@extends('layuots.app')
@section('content')
    <div class="w-full h-screen relative overflow-hidden bg-[#F3F1ED]">
        <!-- Увеличенный контейнер для компенсации поворота -->
        <div class="absolute inset-[-20%] flex items-center justify-center">
            <div class="w-[120%] h-[120%] grid grid-cols-4 gap-3 rotate-[-10deg]">
                <!-- Колонка 1 - движение вверх -->
                <div class="relative h-full overflow-hidden">
                    <div class="scroll-container" data-direction="up" data-speed="30">
                        <div class="scroll-content">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/1.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/2.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/3.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/4.jpg') }}"
                                alt="">
                        </div>
                        <div class="scroll-content-clone">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/1.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/2.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/3.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/4.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>

                <!-- Колонка 2 - движение вниз -->
                <div class="relative h-full overflow-hidden">
                    <div class="scroll-container" data-direction="down" data-speed="35">
                        <div class="scroll-content">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/1.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/2.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/3.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/4.jpg') }}"
                                alt="">
                        </div>
                        <div class="scroll-content-clone">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/1.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/2.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/3.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/4.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>

                <!-- Колонка 3 - движение вверх -->
                <div class="relative h-full overflow-hidden">
                    <div class="scroll-container" data-direction="up" data-speed="25">
                        <div class="scroll-content">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/1.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/2.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/3.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/4.jpg') }}"
                                alt="">
                        </div>
                        <div class="scroll-content-clone">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/1.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/2.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/3.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/4.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>

                <!-- Колонка 4 - движение вниз -->
                <div class="relative h-full overflow-hidden">
                    <div class="scroll-container" data-direction="down" data-speed="40">
                        <div class="scroll-content">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/1.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/2.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/3.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/4.jpg') }}"
                                alt="">
                        </div>
                        <div class="scroll-content-clone">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/1.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/2.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/3.jpg') }}"
                                alt="">
                            <img class="w-full h-auto object-cover rounded-lg mb-3" src="{{ asset('img/home/4.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- контент с наложенностью --}}
        <div class="w-full h-full absolute z-10 border-[20px] border-[var(--bg)]">
            <div class="relative w-full h-full">
                <div
                    class="absolute top-0 left-1/2 -translate-x-1/2 z-10 flex justify-center items-center max-w-[1440px] w-full h-[60px]">
                    <div class="absolute top-0 right-0">
                        <svg width="20" height="20" viewBox="0 0 20 20">
                            <defs>
                                <mask id="concave-mask">
                                    <!-- Белый квадрат (видимая область) -->
                                    <rect x="0" y="0" width="20" height="20" fill="white" />
                                    <!-- Черный круг (вырезаемая область) -->
                                    <circle cx="20" cy="20" r="20" fill="black" />
                                </mask>
                            </defs>
                            <!-- Применяем маску к квадрату -->
                            <rect x="0" y="0" width="20" height="20" fill="var(--bg)"
                                mask="url(#concave-mask)" />
                        </svg>
                    </div>
                    <div class="absolute top-0 left-0 rotate-90">
                        <svg width="20" height="20" viewBox="0 0 20 20">
                            <defs>
                                <mask id="concave-mask">
                                    <!-- Белый квадрат (видимая область) -->
                                    <rect x="0" y="0" width="20" height="20" fill="white" />
                                    <!-- Черный круг (вырезаемая область) - слева внизу -->
                                    <circle cx="0" cy="20" r="20" fill="black" />
                                </mask>
                            </defs>
                            <!-- Применяем маску к квадрату -->
                            <rect x="0" y="0" width="20" height="20" fill="var(--bg)"
                                mask="url(#concave-mask)" />
                        </svg>

                    </div>
                    <div class="max-w-[1400px] w-full h-full bg-[var(--bg)] rounded-bl-[50px] rounded-br-[50px]"></div>
                </div>

                <!-- Верхний левый угол -->
                <div class="absolute bottom-0 right-0 ">
                    <svg width="60" height="60" viewBox="0 0 60 60">
                        <defs>
                            <mask id="concave-mask-tl">
                                <rect x="0" y="0" width="60" height="60" fill="white" />
                                <circle cx="0" cy="0" r="60" fill="black" />
                            </mask>
                        </defs>
                        <rect x="0" y="0" width="60" height="60" fill="var(--bg)" mask="url(#concave-mask-tl)" />
                    </svg>
                </div>

                <!-- Верхний правый угол -->
                <div class="absolute bottom-0 left-0 ">
                    <svg width="60" height="60" viewBox="0 0 60 60">
                        <defs>
                            <mask id="concave-mask-tr">
                                <rect x="0" y="0" width="60" height="60" fill="white" />
                                <circle cx="60" cy="0" r="60" fill="black" />
                            </mask>
                        </defs>
                        <rect x="0" y="0" width="60" height="60" fill="var(--bg)" mask="url(#concave-mask-tr)" />
                    </svg>
                </div>

                <!-- Нижний левый угол -->
                <div class="absolute top-0 right-0">
                    <svg width="60" height="60" viewBox="0 0 60 60">
                        <defs>
                            <mask id="concave-mask-bl">
                                <rect x="0" y="0" width="60" height="60" fill="white" />
                                <circle cx="0" cy="60" r="60" fill="black" />
                            </mask>
                        </defs>
                        <rect x="0" y="0" width="60" height="60" fill="var(--bg)" mask="url(#concave-mask-bl)" />
                    </svg>
                </div>

                <!-- Нижний правый угол -->
                <div class="absolute top-0 left-0">
                    <svg width="60" height="60" viewBox="0 0 60 60">
                        <defs>
                            <mask id="concave-mask-br">
                                <rect x="0" y="0" width="60" height="60" fill="white" />
                                <circle cx="60" cy="60" r="60" fill="black" />
                            </mask>
                        </defs>
                        <rect x="0" y="0" width="60" height="60" fill="var(--bg)" mask="url(#concave-mask-br)" />
                    </svg>
                </div>

                <div class="absolute bottom-0 left-0 w-[860px] h-[360px]">
                    <div class="relative w-full h-full pt-15 pr-15">
                        <div class="absolute top-0 left-0 ">
                            <svg width="60" height="60" viewBox="0 0 60 60">
                                <defs>
                                    <mask id="concave-mask-tr">
                                        <rect x="0" y="0" width="60" height="60" fill="white" />
                                        <circle cx="60" cy="0" r="60" fill="black" />
                                    </mask>
                                </defs>
                                <rect x="0" y="0" width="60" height="60" fill="var(--bg)"
                                    mask="url(#concave-mask-tr)" />
                            </svg>
                        </div>
                        <div class="absolute bottom-0 right-0 ">
                            <svg width="60" height="60" viewBox="0 0 60 60">
                                <defs>
                                    <mask id="concave-mask-tr">
                                        <rect x="0" y="0" width="60" height="60" fill="white" />
                                        <circle cx="60" cy="0" r="60" fill="black" />
                                    </mask>
                                </defs>
                                <rect x="0" y="0" width="60" height="60" fill="var(--bg)"
                                    mask="url(#concave-mask-tr)" />
                            </svg>
                        </div>
                        <div class="w-full h-full rounded-tr-[60px] bg-[var(--bg)] p-15">
                            <p class="text-[54px] text-[var(--text)] font-bold">Lorem ipsum dolor sit.</p>
                            <p class="text-[22px] text-[var(--accent)] font-bold">Lorem ipsum dolor sit amet.</p>
                            <p class="text-[16px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse fugit
                                ducimus, qui voluptatum sequi molestias natus totam dignissimos quasi eligendi vero
                                perspiciatis quibusdam commodi odit optio animi consequatur dicta? Adipisci!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="max-w-[1400px] w-full mx-auto mt-[150px]">
        <p class="text-[54px] font-bold text-center text-shadow">Lorem ipsum dolor sit amet.</p>
        <div class="text-center mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta molestiae tenetur
            dolor
            quisquam quis commodi quaerat maxime mollitia sed, aut a accusamus? Quis, reprehenderit distinctio reiciendis
            cupiditate dolorem ratione quas?
        </div>

        <div class="w-full flex items-center justify-center gap-5 mt-[50px]">

            <div
                class="flex items-center justify-center gap-3 rounded-full bg-[var(--bg)] px-5 py-3 shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                </svg>
                <p class="font-bold">
                    Lorem
                </p>
            </div>
            <div
                class="flex items-center justify-center gap-3 rounded-full bg-[var(--bg)] px-5 py-3 shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                </svg>
                <p class="font-bold">
                    Lorem
                </p>
            </div>
            <div
                class="flex items-center justify-center gap-3 rounded-full bg-[var(--bg)] px-5 py-3 shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                </svg>
                <p class="font-bold">
                    Lorem
                </p>
            </div>
            <div
                class="flex items-center justify-center gap-3 rounded-full bg-[var(--bg)] px-5 py-3 shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                </svg>
                <p class="font-bold">
                    Lorem
                </p>
            </div>

        </div>
        {{-- категории --}}
        <div class="grid grid-cols-4 gap-5 mt-[80px]">

            @include('include.category-card')
            @include('include.category-card')
            @include('include.category-card')
            @include('include.category-card')

        </div>

        {{-- акции --}}
        <div class="w-full flex gap-10 mt-[100px] pb-[800px]">

            <div class="flex-1">
                <p class="text-[54px] leading-[54px] font-bold">Lorem ipsum <br> <span
                        class="text-[var(--accent)]">dolor</span> sit consectetur</p>
                <div class="mt-10 max-w-[500px]">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores corporis quo soluta omnis!
                    Assumenda pariatur corrupti quos itaque reiciendis, accusamus dolor culpa a nam nobis odio, voluptatum
                    saepe blanditiis ad.
                </div>
                <div class="w-full flex flex-col mt-10 gap-5">

                    <div class="flex items-center gap-5">
                        <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <p>2022 - Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                    <div class="flex items-center gap-5">
                        <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <p>2022 - Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                    <div class="flex items-center gap-5">
                        <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        <p>2022 - Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
                    </div>
                    <div class="w-full flex mt-10 gap-10">
                        <div class="w-[250px] h-[250px] flex-shrink-0 rounded-[20px] overflow-hidden">
                            <img class="w-full h-full object-cover" src="{{ asset('img/home/1.jpg') }}" alt="">
                        </div>
                        <div class="flex flex-col justify-center">
                            <svg class="w-6 h-6 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            <p class="text-[22px] font-bold mt-[10px]">Lorem ipsum dolor sit amet.</p>
                            <div class="mt-[20px]">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quis ipsa eveniet, laborum
                                saepe dolores, incidunt, ab dignissimos cupiditate voluptatibus eaque provident iure aliquam
                                eligendi quibusdam nihil reiciendis aliquid doloribus?
                            </div>
                            <a href="">button</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 flex gap-5">
                <div class="w-full h-[700px] rounded-[20px] overflow-hidden shadow-2xl p-5 bg-[var(--surface)]">
                    <img class="w-full h-full object-cover rounded-[10px] overflow-hidden" src="{{ asset('img/home/1.jpg') }}" alt="">
                </div>

                <div
                    class="max-w-[120px] w-full h-[700px] flex flex-col gap-3 bg-[var(--surface)] shadow-2xl rounded-[20px] p-[10px] overflow-hidden ">
                    <div class="w-full h-[100px] rounded-[10px] overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="{{ asset('img/home/1.jpg') }}" alt="">
                        <div class=" absolute top-1 right-1 bg-[var(--surface)] p-1 rounded">
                            <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-[100px] rounded-[10px] overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="{{ asset('img/home/1.jpg') }}" alt="">
                        <div class=" absolute top-1 right-1 bg-[var(--surface)] p-1 rounded">
                            <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-[100px] rounded-[10px] overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="{{ asset('img/home/1.jpg') }}" alt="">
                        <div class=" absolute top-1 right-1 bg-[var(--surface)] p-1 rounded">
                            <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-[100px] rounded-[10px] overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="{{ asset('img/home/1.jpg') }}" alt="">
                        <div class=" absolute top-1 right-1 bg-[var(--surface)] p-1 rounded">
                            <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-[100px] rounded-[10px] overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="{{ asset('img/home/1.jpg') }}" alt="">
                        <div class=" absolute top-1 right-1 bg-[var(--surface)] p-1 rounded">
                            <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                    </div>
                    <div class="w-full h-[100px] rounded-[10px] overflow-hidden relative">
                        <img class="w-full h-full object-cover" src="{{ asset('img/home/1.jpg') }}" alt="">
                        <div class=" absolute top-1 right-1 bg-[var(--surface)] p-1 rounded">
                            <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const containers = document.querySelectorAll('.scroll-container');

            containers.forEach(container => {
                const direction = container.dataset.direction;
                const speed = parseFloat(container.dataset.speed) || 30;

                let position = 0;
                let isPaused = false;
                let contentHeight = 0;

                // Ждем загрузки всех изображений
                const images = container.querySelectorAll('img');
                let loadedImages = 0;

                function checkImagesLoaded() {
                    loadedImages++;
                    if (loadedImages === images.length) {
                        startAnimation();
                    }
                }

                images.forEach(img => {
                    if (img.complete) {
                        checkImagesLoaded();
                    } else {
                        img.addEventListener('load', checkImagesLoaded);
                    }
                });

                function startAnimation() {
                    // Получаем высоту одного набора изображений
                    const content = container.querySelector('.scroll-content');
                    contentHeight = content.offsetHeight;

                    // Начальная позиция для движения вниз
                    if (direction === 'down') {
                        position = -contentHeight;
                    }

                    animate();
                }

                function animate() {
                    if (!isPaused) {
                        if (direction === 'up') {
                            position -= speed / 60;

                            // Плавный переход: когда первый набор полностью уходит вверх
                            if (position <= -contentHeight) {
                                position = position + contentHeight;
                            }
                        } else {
                            position += speed / 60;

                            // Плавный переход: когда второй набор полностью показывается
                            if (position >= 0) {
                                position = position - contentHeight;
                            }
                        }

                        container.style.transform = `translateY(${position}px)`;
                    }

                    requestAnimationFrame(animate);
                }

                // Пауза при наведении
                container.addEventListener('mouseenter', () => {
                    isPaused = true;
                });

                container.addEventListener('mouseleave', () => {
                    isPaused = false;
                });
            });
        });
    </script>

    <style>
        .scroll-container {
            display: flex;
            flex-direction: column;
            will-change: transform;
        }

        .scroll-content,
        .scroll-content-clone {
            flex-shrink: 0;
        }
    </style>
@endsection
