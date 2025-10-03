<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Infinite Dynamic Grid</title>
</head>
<body style="overflow: hidden; margin: 0; padding: 0; overscroll-behavior: none;">

    <div id="grid-container" class="w-screen h-screen cursor-grab active:cursor-grabbing" style="touch-action: none; user-select: none; -webkit-user-select: none;">
        
        <!-- Основной контейнер с наклоном -->
        <div id="grid-wrapper" 
             class="absolute transition-none will-change-transform"
             style="transform-origin: center center;">
        </div>
    </div>

    <!-- Шаблоны карточек (скрытые) -->
    <div id="card-templates" class="hidden">
        
        <!-- Карточка 1 -->
        <a href="" id="card-template-1" class="card-style">
          
        </a>

        <!-- Карточка 2 -->
        <a href="" id="card-template-2" class="card-style">
          
        </a>

        <!-- Карточка 3 -->
        <a href="" id="card-template-3" class="card-style">
       
        </a>

        <!-- Карточка 4 -->
        <a href="" id="card-template-4" class="card-style">
         
        </a>

        <!-- Карточка 5 (ЦЕНТРАЛЬНАЯ) -->
        <a href="{{route('home')}}" id="card-template-5" class="card-style border-4 border-blue-500">
         
        </a>

        <!-- Карточка 6 -->
        <a href="" id="card-template-6" class="card-style">
          
        </a>

        <!-- Карточка 7 -->
        <a href="" id="card-template-7" class="card-style">
           
        </a>

        <!-- Карточка 8 -->
        <a href="" id="card-template-8" class="card-style">
           
        </a>

        <!-- Карточка 9 -->
        <a href="" id="card-template-9" class="card-style">
           
        </a>
        
    </div>

    <script>
        class InfiniteDynamicGrid {
            constructor() {
                this.container = document.getElementById('grid-container');
                this.wrapper = document.getElementById('grid-wrapper');
                
                // Параметры сетки
                this.cardWidth = 800;
                this.cardHeight = 500;
                this.gap = 20;
                this.totalWidth = this.cardWidth + this.gap;
                this.totalHeight = this.cardHeight + this.gap;
                
                // Параметры свайпа
                this.isDragging = false;
                this.startX = 0;
                this.startY = 0;
                this.currentX = 0;
                this.currentY = 0;
                
                // Параметры инерции
                this.velocityX = 0;
                this.velocityY = 0;
                this.lastX = 0;
                this.lastY = 0;
                this.lastTime = 0;
                this.friction = 0.95; // Коэффициент затухания
                this.animationId = null;
                
                // Границы рендеринга - начинаем с 5x5 для упреждающего рендеринга
                this.minX = -2;
                this.maxX = 2;
                this.minY = -2;
                this.maxY = 2;
                
                // Хранилище отрендеренных карточек
                this.renderedCards = new Map();
                
                // Кэш шаблонов карточек
                this.cardTemplates = {};
                
                this.init();
            }
            
            init() {
                this.cacheCardTemplates();
                this.renderInitialGrid();
                this.centerView();
                this.bindEvents();
            }
            
            // Кэшируем шаблоны карточек
            cacheCardTemplates() {
                for (let i = 1; i <= 9; i++) {
                    const template = document.getElementById(`card-template-${i}`);
                    if (template) {
                        this.cardTemplates[i] = template;
                    }
                }
            }
            
            // Получаем ID карточки для позиции в бесконечной сетке
            getCardIdForPosition(x, y) {
                // Карточка 5 в центре (0,0)
                const shiftedX = x + 1;
                const shiftedY = y + 1;
                
                const patternX = ((shiftedX % 3) + 3) % 3;
                const patternY = ((shiftedY % 3) + 3) % 3;
                
                const mapping = [
                    [1, 2, 3],
                    [4, 5, 6],
                    [7, 8, 9]
                ];
                
                return mapping[patternY][patternX];
            }
            
            createCard(x, y) {
                const cardId = this.getCardIdForPosition(x, y);
                const template = this.cardTemplates[cardId];
                
                if (!template) {
                    console.error(`Template not found for card ${cardId}`);
                    return null;
                }
                
                // Клонируем шаблон
                const card = template.cloneNode(true);
                card.id = `card-${x}-${y}`;
                
                // Устанавливаем позицию
                card.style.left = `${x * this.totalWidth}px`;
                card.style.top = `${y * this.totalHeight}px`;
                
                // Добавляем data-атрибуты для отслеживания
                card.dataset.gridX = x;
                card.dataset.gridY = y;
                card.dataset.cardId = cardId;
                
                // Если это центральная позиция и НЕ карточка 5, убираем синюю рамку
                if (x === 0 && y === 0 && cardId !== 5) {
                    card.classList.remove('border-4', 'border-blue-500');
                }
                
                return card;
            }
            
            renderInitialGrid() {
                for (let y = this.minY; y <= this.maxY; y++) {
                    for (let x = this.minX; x <= this.maxX; x++) {
                        this.renderCard(x, y);
                    }
                }
            }
            
            renderCard(x, y) {
                const key = `${x},${y}`;
                if (this.renderedCards.has(key)) return;
                
                const card = this.createCard(x, y);
                if (card) {
                    this.wrapper.appendChild(card);
                    this.renderedCards.set(key, card);
                }
            }
            
            renderColumn(x) {
                console.log(`Rendering column ${x}`);
                for (let y = this.minY; y <= this.maxY; y++) {
                    this.renderCard(x, y);
                }
            }
            
            renderRow(y) {
                console.log(`Rendering row ${y}`);
                for (let x = this.minX; x <= this.maxX; x++) {
                    this.renderCard(x, y);
                }
            }
            
            removeColumn(x) {
                console.log(`Removing column ${x}`);
                for (let y = this.minY; y <= this.maxY; y++) {
                    const key = `${x},${y}`;
                    const card = this.renderedCards.get(key);
                    if (card) {
                        card.remove();
                        this.renderedCards.delete(key);
                    }
                }
            }
            
            removeRow(y) {
                console.log(`Removing row ${y}`);
                for (let x = this.minX; x <= this.maxX; x++) {
                    const key = `${x},${y}`;
                    const card = this.renderedCards.get(key);
                    if (card) {
                        card.remove();
                        this.renderedCards.delete(key);
                    }
                }
            }
            
            centerView() {
                const screenCenterX = window.innerWidth / 2;
                const screenCenterY = window.innerHeight / 2;
                
                this.currentX = screenCenterX - this.cardWidth / 2;
                this.currentY = screenCenterY - this.cardHeight / 2;
                
                this.updateTransform();
            }
            
            bindEvents() {
                this.container.addEventListener('mousedown', this.handleStart.bind(this));
                document.addEventListener('mousemove', this.handleMove.bind(this));
                document.addEventListener('mouseup', this.handleEnd.bind(this));
                
                this.container.addEventListener('touchstart', this.handleStart.bind(this), { passive: false });
                document.addEventListener('touchmove', this.handleMove.bind(this), { passive: false });
                document.addEventListener('touchend', this.handleEnd.bind(this));
                
                this.container.addEventListener('contextmenu', e => e.preventDefault());
            }
            
            handleStart(e) {
                this.isDragging = true;
                this.container.style.cursor = 'grabbing';
                
                // Останавливаем инерцию если она есть
                if (this.animationId) {
                    cancelAnimationFrame(this.animationId);
                    this.animationId = null;
                }
                
                const clientX = e.clientX || e.touches[0].clientX;
                const clientY = e.clientY || e.touches[0].clientY;
                
                this.startX = clientX - this.currentX;
                this.startY = clientY - this.currentY;
                
                // Инициализируем отслеживание скорости
                this.lastX = clientX;
                this.lastY = clientY;
                this.lastTime = Date.now();
                this.velocityX = 0;
                this.velocityY = 0;
                
                e.preventDefault();
            }
            
            handleMove(e) {
                if (!this.isDragging) return;
                
                const clientX = e.clientX || e.touches[0].clientX;
                const clientY = e.clientY || e.touches[0].clientY;
                
                const currentTime = Date.now();
                const deltaTime = currentTime - this.lastTime;
                
                // Вычисляем скорость движения
                if (deltaTime > 0) {
                    this.velocityX = (clientX - this.lastX) / deltaTime * 16; // Нормализуем к 60fps
                    this.velocityY = (clientY - this.lastY) / deltaTime * 16;
                }
                
                this.lastX = clientX;
                this.lastY = clientY;
                this.lastTime = currentTime;
                
                this.currentX = clientX - this.startX;
                this.currentY = clientY - this.startY;
                
                this.updateTransform();
                this.checkAndExpandBoundaries();
                
                e.preventDefault();
            }
            
            handleEnd() {
                this.isDragging = false;
                this.container.style.cursor = 'grab';
                
                // Запускаем инерционное движение
                this.startInertia();
            }
            
            startInertia() {
                // Если скорость слишком маленькая, не запускаем инерцию
                if (Math.abs(this.velocityX) < 0.5 && Math.abs(this.velocityY) < 0.5) {
                    return;
                }
                
                const animate = () => {
                    // Применяем скорость к позиции
                    this.currentX += this.velocityX;
                    this.currentY += this.velocityY;
                    
                    // Применяем трение
                    this.velocityX *= this.friction;
                    this.velocityY *= this.friction;
                    
                    // Обновляем трансформацию и проверяем границы
                    this.updateTransform();
                    this.checkAndExpandBoundaries();
                    
                    // Продолжаем анимацию, если скорость достаточная
                    if (Math.abs(this.velocityX) > 0.1 || Math.abs(this.velocityY) > 0.1) {
                        this.animationId = requestAnimationFrame(animate);
                    } else {
                        this.animationId = null;
                    }
                };
                
                this.animationId = requestAnimationFrame(animate);
            }
            
            updateTransform() {
                this.wrapper.style.transform = `translate3d(${this.currentX}px, ${this.currentY}px, 0) rotate(-10deg)`;
            }
            
            checkAndExpandBoundaries() {
                const buffer = 2.5;
                const viewWidth = window.innerWidth * buffer;
                const viewHeight = window.innerHeight * buffer;
                
                const leftVisible = Math.floor((-this.currentX - viewWidth/2) / this.totalWidth);
                const rightVisible = Math.ceil((-this.currentX + viewWidth/2) / this.totalWidth);
                const topVisible = Math.floor((-this.currentY - viewHeight/2) / this.totalHeight);
                const bottomVisible = Math.ceil((-this.currentY + viewHeight/2) / this.totalHeight);
                
                if (rightVisible + 1 > this.maxX) {
                    this.maxX = rightVisible + 1;
                    this.renderColumn(this.maxX);
                }
                
                if (leftVisible - 1 < this.minX) {
                    this.minX = leftVisible - 1;
                    this.renderColumn(this.minX);
                }
                
                if (bottomVisible + 1 > this.maxY) {
                    this.maxY = bottomVisible + 1;
                    this.renderRow(this.maxY);
                }
                
                if (topVisible - 1 < this.minY) {
                    this.minY = topVisible - 1;
                    this.renderRow(this.minY);
                }
                
                this.cleanupDistantBlocks(leftVisible, rightVisible, topVisible, bottomVisible);
            }
            
            cleanupDistantBlocks(leftVisible, rightVisible, topVisible, bottomVisible) {
                const cleanupBuffer = 3;
                
                while (this.maxX > rightVisible + cleanupBuffer) {
                    this.removeColumn(this.maxX);
                    this.maxX--;
                }
                
                while (this.minX < leftVisible - cleanupBuffer) {
                    this.removeColumn(this.minX);
                    this.minX++;
                }
                
                while (this.maxY > bottomVisible + cleanupBuffer) {
                    this.removeRow(this.maxY);
                    this.maxY--;
                }
                
                while (this.minY < topVisible - cleanupBuffer) {
                    this.removeRow(this.minY);
                    this.minY++;
                }
            }
        }
        
        document.addEventListener('DOMContentLoaded', () => {
            new InfiniteDynamicGrid();
        });
    </script>
</body>
</html>
