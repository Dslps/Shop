<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Infinite Swipe Grid</title>
</head>
<body class="bg-gray-300 overflow-hidden">

    <div id="grid-container" class="w-screen h-screen cursor-grab active:cursor-grabbing">
        
        <!-- Основной контейнер с наклоном и свайпом -->
        <div id="grid-wrapper" 
             class="flex gap-5 rotate-[-10deg] transition-transform duration-200 ease-out will-change-transform"
             style="transform: translate3d(50vw, 50vh, 0px);">
            
            @foreach($gridColumns as $columnIndex => $column)
                <!-- Колонка с карточками -->
                <div class="flex flex-col gap-5" data-column="{{ $columnIndex }}">
                    @foreach($column['cards'] as $cardIndex => $card)
                        <div class="w-[600px] h-[450px] bg-white cursor-pointer rounded-[20px] hover:scale-105 duration-300 shadow-lg overflow-hidden"
                             data-column="{{ $columnIndex }}" 
                             data-card="{{ $cardIndex }}"
                             onclick="window.location.href='{{ $card['link'] }}'">
                            
                            <!-- Контент карточки -->
                            <div class="w-full h-full p-6 flex flex-col bg-gradient-to-br from-white to-gray-50">
                                @if($card['image'])
                                    <div class="flex-1 bg-cover bg-center rounded-lg mb-4" 
                                         style="background-image: url('{{ $card['image'] }}');">
                                    </div>
                                @endif
                                
                                <div class="flex-shrink-0">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $card['title'] }}</h3>
                                    <p class="text-gray-600 mb-3">{{ $card['description'] }}</p>
                                    
                                    @if($card['price'])
                                        <div class="text-3xl font-bold text-green-600 mb-3">{{ $card['price'] }}</div>
                                    @endif
                                    
                                    @if($card['features'])
                                        <div class="flex space-x-4 text-sm text-gray-500">
                                            @foreach($card['features'] as $feature)
                                                <span>{{ $feature }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
            
        </div>
    </div>

    <!-- UI контролы -->
    <div class="absolute top-4 left-4 bg-black bg-opacity-70 text-white px-4 py-2 rounded-lg text-sm z-10">
        <div>Позиция: <span id="position-indicator">0, 0</span></div>
        <div>Колонок: <span id="columns-count">{{ count($gridColumns) }}</span></div>
    </div>

    <script>
        class InfiniteSwipeGrid {
            constructor() {
                this.container = document.getElementById('grid-container');
                this.wrapper = document.getElementById('grid-wrapper');
                this.positionIndicator = document.getElementById('position-indicator');
                this.columnsCount = document.getElementById('columns-count');
                
                this.isDragging = false;
                this.startX = 0;
                this.startY = 0;
                this.translateX = 0;
                this.translateY = 0;
                
                // Размеры для расчетов
                this.columnWidth = 620; // 600px + gap
                this.cardHeight = 470;  // 450px + gap
                this.currentCenterX = 0;
                this.currentCenterY = 0;
                
                // Управление загрузкой
                this.loadedRegions = new Set(['0,0']); // Начальная область уже загружена
                this.existingColumns = new Map();
                
                this.init();
            }
            
            init() {
                this.bindEvents();
                this.cacheExistingColumns();
                this.updatePosition();
            }
            
            cacheExistingColumns() {
                const columns = document.querySelectorAll('[data-column]');
                columns.forEach(column => {
                    const columnIndex = parseInt(column.dataset.column);
                    this.existingColumns.set(columnIndex, column);
                });
            }
            
            bindEvents() {
                // Mouse events
                this.container.addEventListener('mousedown', this.handleStart.bind(this));
                document.addEventListener('mousemove', this.handleMove.bind(this));
                document.addEventListener('mouseup', this.handleEnd.bind(this));
                
                // Touch events
                this.container.addEventListener('touchstart', this.handleStart.bind(this), { passive: false });
                document.addEventListener('touchmove', this.handleMove.bind(this), { passive: false });
                document.addEventListener('touchend', this.handleEnd.bind(this));
                
                // Предотвращаем нежелательные события
                this.container.addEventListener('contextmenu', e => e.preventDefault());
                this.container.addEventListener('selectstart', e => e.preventDefault());
            }
            
            handleStart(e) {
                this.isDragging = true;
                this.container.classList.add('cursor-grabbing');
                
                const clientX = e.clientX || e.touches[0].clientX;
                const clientY = e.clientY || e.touches[0].clientY;
                
                this.startX = clientX - this.translateX;
                this.startY = clientY - this.translateY;
                
                e.preventDefault();
            }
            
            handleMove(e) {
                if (!this.isDragging) return;
                
                const clientX = e.clientX || e.touches[0].clientX;
                const clientY = e.clientY || e.touches[0].clientY;
                
                this.translateX = clientX - this.startX;
                this.translateY = clientY - this.startY;
                
                // Обновляем позицию с учетом наклона
                this.wrapper.style.transform = `translate3d(${50 + (this.translateX / window.innerWidth) * 100}vw, ${50 + (this.translateY / window.innerHeight) * 100}vh, 0px)`;
                
                this.updatePosition();
                this.checkForNewColumns();
                
                e.preventDefault();
            }
            
            handleEnd(e) {
                this.isDragging = false;
                this.container.classList.remove('cursor-grabbing');
            }
            
            updatePosition() {
                this.currentCenterX = Math.round(-this.translateX / this.columnWidth);
                this.currentCenterY = Math.round(-this.translateY / this.cardHeight);
                
                this.positionIndicator.textContent = `${this.currentCenterX}, ${this.currentCenterY}`;
            }
            
            checkForNewColumns() {
                const viewportColumns = Math.ceil(window.innerWidth / this.columnWidth) + 2;
                const startColumn = this.currentCenterX - Math.floor(viewportColumns / 2);
                const endColumn = this.currentCenterX + Math.floor(viewportColumns / 2);
                
                // Проверяем нужные колонки
                for (let col = startColumn; col <= endColumn; col++) {
                    const regionKey = `${Math.floor(col / 5)},${Math.floor(this.currentCenterY / 3)}`;
                    
                    if (!this.loadedRegions.has(regionKey)) {
                        this.loadRegion(regionKey);
                        this.loadedRegions.add(regionKey);
                    }
                }
                
                // Удаляем далекие колонки для оптимизации
                this.removeDistantColumns();
            }
            
            loadRegion(regionKey) {
                const [regionX, regionY] = regionKey.split(',').map(Number);
                
                fetch('/api/grid-columns', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        regionX: regionX,
                        regionY: regionY
                    })
                })
                .then(response => response.json())
                .then(data => {
                    this.appendColumns(data.columns);
                })
                .catch(error => {
                    console.error('Ошибка загрузки:', error);
                    this.loadedRegions.delete(regionKey);
                });
            }
            
            appendColumns(columns) {
                columns.forEach(column => {
                    const columnElement = this.createColumnElement(column);
                    this.wrapper.appendChild(columnElement);
                    this.existingColumns.set(column.index, columnElement);
                });
                
                this.columnsCount.textContent = this.existingColumns.size;
            }
            
            createColumnElement(column) {
                const div = document.createElement('div');
                div.className = 'flex flex-col gap-5';
                div.dataset.column = column.index;
                
                column.cards.forEach((card, cardIndex) => {
                    const cardElement = this.createCardElement(card, column.index, cardIndex);
                    div.appendChild(cardElement);
                });
                
                return div;
            }
            
            createCardElement(card, columnIndex, cardIndex) {
                const div = document.createElement('div');
                div.className = 'w-[600px] h-[450px] bg-white cursor-pointer rounded-[20px] hover:scale-105 duration-300 shadow-lg overflow-hidden';
                div.dataset.column = columnIndex;
                div.dataset.card = cardIndex;
                div.onclick = () => window.location.href = card.link;
                
                div.innerHTML = `
                    <div class="w-full h-full p-6 flex flex-col bg-gradient-to-br from-white to-gray-50">
                        ${card.image ? `
                            <div class="flex-1 bg-cover bg-center rounded-lg mb-4" style="background-image: url('${card.image}');"></div>
                        ` : ''}
                        <div class="flex-shrink-0">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">${card.title}</h3>
                            <p class="text-gray-600 mb-3">${card.description}</p>
                            ${card.price ? `<div class="text-3xl font-bold text-green-600 mb-3">${card.price}</div>` : ''}
                            ${card.features ? `
                                <div class="flex space-x-4 text-sm text-gray-500">
                                    ${card.features.map(feature => `<span>${feature}</span>`).join('')}
                                </div>
                            ` : ''}
                        </div>
                    </div>
                `;
                
                return div;
            }
            
            removeDistantColumns() {
                const maxDistance = 10; // Максимальное расстояние в колонках
                const columnsToRemove = [];
                
                this.existingColumns.forEach((element, columnIndex) => {
                    const distance = Math.abs(columnIndex - this.currentCenterX);
                    
                    if (distance > maxDistance) {
                        columnsToRemove.push(columnIndex);
                    }
                });
                
                columnsToRemove.forEach(columnIndex => {
                    const element = this.existingColumns.get(columnIndex);
                    if (element && element.parentNode) {
                        element.parentNode.removeChild(element);
                    }
                    this.existingColumns.delete(columnIndex);
                });
            }
        }
        
        document.addEventListener('DOMContentLoaded', () => {
            new InfiniteSwipeGrid();
        });
    </script>
</body>
</html>
