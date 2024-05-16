@extends('layouts.app',['title'=>'Home'])
@section('content')
<main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
    <!-- Image Banner -->
    <a href="#"><img
        src="https://afw.imgix.net/pondokdigital/user-media/qizAJVCLjPF55h2QytDNdfMDu4oiM8xwK3HptPVW.png??w=600&amp;fit=crop&amp;auto=format,compress"
        loading="lazy" alt="" class="w-full">
    </a>

    <!-- Event Terbaru -->
    <section class="py-8 relative z-[1] overflow-hidden" style="background-color: rgba(255, 252, 252, 0);">
      <header class="px-4 mb-4 flex items-center">
        <div class="flex-1 pr-4">
          <h2 class="font-bold text-xl">EVENT TERBARU</h2>
        </div><a class="text-primary-700 font-bold text-sm flex items-center gap-2 flex-shrink-0"
          href="#">Selengkapnya <svg stroke="currentColor" fill="currentColor" stroke-width="0"
            viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
              clip-rule="evenodd"></path>
          </svg></a>
      </header>
      <div class="overflow-x-auto flex whitespace-nowrap gap-4 py-2 px-4">
        <a class="w-[160px]" href="/src/views/detail.html">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/O405lXX1kIoikr9mxw34c9AILWYI1YNBfbdttoLA.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Belajar Dari Keluarga Nabi Ibrahim</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                </path>
              </svg> <strong class="font-medium">Event online</strong></div>
          </div>
        </a>
        <a class="w-[160px]" href="/event/abubakar">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/wNzVZ9WpxcfzlakcF3O1o6mkpiJDT6dbrBw5ZzyU.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">DAUROH SERIES SCALE UP REZEKI - ABU BAKAR
              ASH SIDDIQ</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a>
        
        <a class="w-[160px]" href="/event/daurohtheseries">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/UUdYcPqw3hHLqMSbfC5I62T4wLvwPsY0pOoM9ug0.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">DAUROH THE SERIES</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a>
        <a class="w-[160px]" href="/event/marbot-camp-2024">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/3Jmr4eOV65koW5QaCCOEhZwFNhOJlrlls1cA5GEr.png?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Marbot Camp 2024</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400 flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg> <strong class="font-medium flex-1 truncate min-w-0">Masjid Sejuta Pemuda
                Sukabumi Jawabarat</strong></div>
          </div>
        </a>
        <a class="w-[160px]" href="/event/marbot-camp-2024">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/3Jmr4eOV65koW5QaCCOEhZwFNhOJlrlls1cA5GEr.png?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Marbot Camp 2024</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400 flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg> <strong class="font-medium flex-1 truncate min-w-0">Masjid Sejuta Pemuda
                Sukabumi Jawabarat</strong></div>
          </div>
        </a>
        <a class="w-[160px]" href="/event/marbot-camp-2024">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/3Jmr4eOV65koW5QaCCOEhZwFNhOJlrlls1cA5GEr.png?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Marbot Camp 2024</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400 flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg> <strong class="font-medium flex-1 truncate min-w-0">Masjid Sejuta Pemuda
                Sukabumi Jawabarat</strong></div>
          </div>
        </a>
      </div>
    </section>

    <!-- Belajar Fiqih -->
    <section class="py-8 relative z-[1] overflow-hidden" style="background-color: rgb(255, 255, 255);">
      <header class="px-4 mb-4 flex items-center">
        <div class="flex-1 pr-4">
          <h2 class="font-bold text-xl">Belajar Fiqih</h2>
        </div><a class="text-primary-700 font-bold text-sm flex items-center gap-2 flex-shrink-0"
          href="/category/Fiqh">Selengkapnya <svg stroke="currentColor" fill="currentColor" stroke-width="0"
            viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
              clip-rule="evenodd"></path>
          </svg></a>
      </header>
      <div class="overflow-x-auto flex whitespace-nowrap gap-4 py-2 px-4"><a class="w-[160px]"
          href="/event/marbot-camp-2024">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/3Jmr4eOV65koW5QaCCOEhZwFNhOJlrlls1cA5GEr.png?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Marbot Camp 2024</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400 flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg> <strong class="font-medium flex-1 truncate min-w-0">Masjid Sejuta Pemuda
                Sukabumi Jawabarat</strong></div>
          </div>
        </a><a class="w-[160px]" href="/event/zakat">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/nh2aiV6PP5qGySU3mIew5Wlieig8wAT28LQDPlp1.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Series Zakat Maal Bersama Ust Rendy Saputra
            </h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a><a class="w-[160px]" href="/event/ilmuwaris">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/PHpg2KKG4bJl5Rdx1MiSIQGCTbSDZN7fmfcLlJrJ.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Ilmu Waris</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                </path>
              </svg> <strong class="font-medium">Event online</strong></div>
          </div>
        </a>
        <a class="w-[160px]" href="/event/shalat">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/kUh7SbzAnPoZE3sogYPnIJhBhBqDQh52IeFkJlM6.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Perbaiki Shalat Allah Perbaiki Hidupmu</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a>
        <a class="w-[160px]" href="/event/shalat">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/kUh7SbzAnPoZE3sogYPnIJhBhBqDQh52IeFkJlM6.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Perbaiki Shalat Allah Perbaiki Hidupmu</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a>
        <a class="w-[160px]" href="/event/shalat">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/kUh7SbzAnPoZE3sogYPnIJhBhBqDQh52IeFkJlM6.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Perbaiki Shalat Allah Perbaiki Hidupmu</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a>
      </div>
    </section>

    <section class="py-8 relative z-[1] overflow-hidden" style="background-color: rgb(255, 255, 255);">
      <header class="px-4 mb-4 flex items-center">
        <div class="flex-1 pr-4">
          <h2 class="font-bold text-xl">Agar Hijrahmu Istiqomah</h2>
        </div><a class="text-primary-700 font-bold text-sm flex items-center gap-2 flex-shrink-0"
          href="/category/hidupbahagia">Selengkapnya <svg stroke="currentColor" fill="currentColor" stroke-width="0"
            viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
              clip-rule="evenodd"></path>
          </svg></a>
      </header>
      <div class="overflow-x-auto flex whitespace-nowrap gap-4 py-2 px-4"><a class="w-[160px]"
          href="/event/intimatesession">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/re6m8WWAUWetrECd9CjvQEPHXPvUhOHapwMEg6zJ.png?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Intimate Session Scale Up Rezeki</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400 flex-shrink-0" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
              </svg> <strong class="font-medium flex-1 truncate min-w-0">di Grand Asrilia Hotel, Jl. Pelajar Pejuang 45
                No.123, Bandung</strong></div>
          </div>
        </a><a class="w-[160px]" href="/event/kpp">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/J0J3PDFd2LW6YpvpGd136SXxoldC6F10rJJe8FI1.png?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">KISAH-KISAH PEREMPUAN PERADABAN</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a><a class="w-[160px]" href="/event/twr">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/qAtgvi4A0ejUXMljqKbI9wPlSxHv2zow4J7YhTzA.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">The Winner Of Ramadhan</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                </path>
              </svg> <strong class="font-medium">Event online</strong></div>
          </div>
        </a><a class="w-[160px]" href="/event/7jurusmenjemputrezeki">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/E716BZQW23Iy6kGbx1OjDGJ2auvmhbgJ7mlnUVfr.png?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Scale Up Rezeki For Pemula</h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a>
        <a class="w-[160px]" href="/event/hijrah-class">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/RPrxMgzGxcUQ9h2bxvts3Wyhq4Y6CVCGiekP5UTx.png?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Hijrah Class - Agar Hijrah Lebih Istiqomah
            </h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a>
        <a class="w-[160px]" href="/event/hijrah-class">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/RPrxMgzGxcUQ9h2bxvts3Wyhq4Y6CVCGiekP5UTx.png?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Hijrah Class - Agar Hijrah Lebih Istiqomah
            </h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a>
        <a class="w-[160px]" href="/event/hijrah-class">
          <div class="relative aspect-[4/5]"><img
              src="https://afw.imgix.net/pondokdigital/cover/RPrxMgzGxcUQ9h2bxvts3Wyhq4Y6CVCGiekP5UTx.png?w=300&amp;fit=crop&amp;auto=format,compress"
              alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
              style="width: 100%; display: block;"></div>
          <div class="p-4">
            <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Hijrah Class - Agar Hijrah Lebih Istiqomah
            </h2>
            <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor"
                fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg> <strong class="font-medium">Web series</strong></div>
          </div>
        </a>
      
      </div>
    </section>
  </main>
@endsection