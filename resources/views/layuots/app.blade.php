<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>

<body class="bg-[var(--bg)]">

    <header
        class="fixed max-w-[1400px] w-full mx-auto px-10 top-0 left-0 right-0 z-50 backdrop-blur-2xl bg-[#F7F6F3]/40 shadow-xl rounded-bl-[50px] rounded-br-[50px]">
        <nav class="w-full flex items-center justify-between h-20">
            <!-- Логотип слева -->
            <div class="flex items-center">
                <svg class="w-32 h-10 text-[#8D735D]" viewBox="0 0 120 40">
                    <text x="0" y="28" font-family="system-ui" font-size="24" font-weight="600"
                        fill="currentColor">LOGO</text>
                </svg>
            </div>

            <!-- Навигация справа -->
            <div class="flex items-center">
                <!-- Главная -->
                <a href="#"
                    class="group flex items-center px-3 py-2 rounded-full hover:bg-white/30 transition-all duration-500">
                    <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span
                        class="max-w-0  opacity-0 group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 transition-all duration-500 ease-out text-sm font-medium text-[#111111] whitespace-nowrap">Главная</span>
                </a>

                <!-- Образы -->
                <a href="#"
                    class="group flex items-center px-3 py-2 rounded-full hover:bg-white/30 transition-all duration-500">
                    <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    <span
                        class="max-w-0  opacity-0 group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 transition-all duration-500 ease-out text-sm font-medium text-[#111111] whitespace-nowrap">Образы</span>
                </a>

                <!-- Товары -->
                <a href="#"
                    class="group flex items-center px-3 py-2 rounded-full hover:bg-white/30 transition-all duration-500">
                    <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span
                        class="max-w-0  opacity-0 group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 transition-all duration-500 ease-out text-sm font-medium text-[#111111] whitespace-nowrap">Товары</span>
                </a>

                <!-- Акции -->
                <a href="#"
                    class="group flex items-center px-3 py-2 rounded-full hover:bg-white/30 transition-all duration-500">
                    <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                    </svg>
                    <span
                        class="max-w-0  opacity-0 group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 transition-all duration-500 ease-out text-sm font-medium text-[#111111] whitespace-nowrap">Акции</span>
                </a>

                <!-- Новинки -->
                <a href="#"
                    class="group flex items-center px-3 py-2 rounded-full hover:bg-white/30 transition-all duration-500">
                    <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <span
                        class="max-w-0  opacity-0 group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 transition-all duration-500 ease-out text-sm font-medium text-[#111111] whitespace-nowrap">Новинки</span>
                </a>

                <!-- Личный кабинет -->
                <a href="#"
                    class="group flex items-center px-3 py-2 rounded-full hover:bg-white/30 transition-all duration-500">
                    <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span
                        class="max-w-0  opacity-0 group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 transition-all duration-500 ease-out text-sm font-medium text-[#111111] whitespace-nowrap">Кабинет</span>
                </a>

                <!-- Доставка -->
                <a href="#"
                    class="group flex items-center px-3 py-2 rounded-full hover:bg-white/30 transition-all duration-500">
                    <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                    </svg>
                    <span
                        class="max-w-0  opacity-0 group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 transition-all duration-500 ease-out text-sm font-medium text-[#111111] whitespace-nowrap">Доставка</span>
                </a>

                <!-- Контакты -->
                <a href="#"
                    class="group flex items-center px-3 py-2 rounded-full hover:bg-white/30 transition-all duration-500">
                    <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span
                        class="max-w-0  opacity-0 group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 transition-all duration-500 ease-out text-sm font-medium text-[#111111] whitespace-nowrap">Контакты</span>
                </a>

                <!-- Поиск -->
                <div
                    class="group relative flex items-center px-3 py-2 rounded-full hover:bg-white/30 transition-all duration-500">
                    <button onclick="toggleSearch()" class="flex items-center">
                        <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <div id="searchBox" class="max-w-0  opacity-0 transition-all duration-500 ease-out">
                        <input type="text" id="searchInput" placeholder="Поиск..."
                            class="ml-2 px-3 py-1 text-sm bg-white/50 backdrop-blur-md rounded-full border border-[#E2DFDA] focus:outline-none focus:border-[#8D735D] text-[#111111] placeholder-[#7B776F]"
                            oninput="keepSearchOpen()" onblur="closeSearchIfEmpty()" />
                    </div>
                </div>

                <!-- О нас -->
                <a href="#"
                    class="group flex items-center px-3 py-2 rounded-full hover:bg-white/30 transition-all duration-500">
                    <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span
                        class="max-w-0  opacity-0 group-hover:max-w-[100px] group-hover:opacity-100 group-hover:ml-2 transition-all duration-500 ease-out text-sm font-medium text-[#111111] whitespace-nowrap">О
                        нас</span>
                </a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>


    <script>
        let searchOpen = false;

        function toggleSearch() {
            const searchBox = document.getElementById('searchBox');
            const searchInput = document.getElementById('searchInput');

            if (!searchOpen) {
                searchBox.style.maxWidth = '200px';
                searchBox.style.opacity = '1';
                searchOpen = true;
                setTimeout(() => searchInput.focus(), 300);
            } else if (searchInput.value === '') {
                searchBox.style.maxWidth = '0';
                searchBox.style.opacity = '0';
                searchOpen = false;
            }
        }

        function keepSearchOpen() {
            const searchBox = document.getElementById('searchBox');
            if (document.getElementById('searchInput').value !== '') {
                searchBox.style.maxWidth = '200px';
                searchBox.style.opacity = '1';
                searchOpen = true;
            }
        }

        function closeSearchIfEmpty() {
            setTimeout(() => {
                const searchInput = document.getElementById('searchInput');
                const searchBox = document.getElementById('searchBox');
                if (searchInput.value === '') {
                    searchBox.style.maxWidth = '0';
                    searchBox.style.opacity = '0';
                    searchOpen = false;
                }
            }, 200);
        }
    </script>
</body>

</html>
