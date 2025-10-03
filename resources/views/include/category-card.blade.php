 <div class="flex flex-col p-2 rounded-[10px] overflow-hidden shadow-lg bg-[var(--surface)] hover:shadow-2xl transition-shadow duration-300">
     <div class="relative w-full h-[220px]">
         <div class="absolute top-0 left-0">
             <div class="relative w-[140px] h-[60px]">
                 <div class="w-[120px] h-[40px] px-3 py-1 bg-[var(--surface)] rounded-br-[20px]">
                     <p class="text-[16px] font-bold">Category</p>
                 </div>

                 <div class="absolute bottom-0 left-0">
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
                         <rect x="0" y="0" width="20" height="20" fill="var(--surface)" mask="url(#concave-mask)" />
                     </svg>
                 </div>
                 <div class="absolute top-0 right-0">
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
                         <rect x="0" y="0" width="20" height="20" fill="var(--surface)" mask="url(#concave-mask)" />
                     </svg>
                 </div>

             </div>
         </div>
         {{-- нижний правый угол --}}
         <div class="absolute bottom-0 right-0">
             <div class="relative pt-[20px] pl-[20px] w-[140px] h-[60px]">
                 <div class="bg-[var(--surface)] flex items-center justify-center gap-3 rounded-tl-[20px] w-[120px] h-[40px] text-[14px] font-bold">
                     <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                     </svg>
                     3 lorem
                 </div>
                 <div class="absolute top-0 right-0 rotate-180">
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
                         <rect x="0" y="0" width="20" height="20" fill="var(--surface)" mask="url(#concave-mask)" />
                     </svg>
                 </div>
                 <div class="absolute bottom-0 left-0 rotate-180">
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
                         <rect x="0" y="0" width="20" height="20" fill="var(--surface)" mask="url(#concave-mask)" />
                     </svg>
                 </div>
             </div>
         </div>
         {{-- изображение --}}
         <div class="w-full h-full rounded-[5px] overflow-hidden">
             <img class="w-full h-full object-cover" src="{{ asset('img/home/1.jpg') }}" alt="">
         </div>
     </div>
     {{-- заголовок --}}
     <div class="w-full px-3 mt-3">
         <p class="text-[24px] font-bold">Title</p>
         <div class="flex items-center gap-3 border-b border-[var(--accent)] pb-3 mt-2">
             <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
             </svg>
             <p class="text-[16px] font-semibold">Lorem ipsum dolor sit lorem ipsum</p>
         </div>
     </div>
     {{-- категории продуктов --}}
     <div class="w-full flex gap-3 px-3 mt-3">
         <div class="flex items-center gap-2">
             <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
             </svg>
             <p class="text-[14px] font-semibold">Lorem</p>
         </div>
         <div class="flex items-center gap-2">
             <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
             </svg>
             <p class="text-[14px] font-semibold">Lorem</p>
         </div>
         <div class="flex items-center gap-2">
             <svg class="w-5 h-5 flex-shrink-0 text-[#4F443B] group-hover:text-[#8D735D] transition-colors duration-300"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
             </svg>
             <p class="text-[14px] font-semibold">Lorem</p>
         </div>
     </div>
     {{-- полное описание --}}
     <div class="w-full px-3 mt-5 text-[14px] pb-5">
         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores quod tenetur sequi soluta vero qui
         vitae illo, ipsum iste architecto est minus nisi
     </div>
 </div>
