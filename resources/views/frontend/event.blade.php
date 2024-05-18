@extends('layouts.app',['title'=>'Event'])
@section('content')
<main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
  <!-- Search -->
  <header class="mb-8 px-4">
    <input type="search"
      class="border border-slate-300 backdrop-blur-sm shadow-sm rounded-md py-2 px-4 w-full mt-4 focus:outline-none focus:ring-1 focus:ring-[#3FE0D0]"
      placeholder="Cari event" value="">
  </header>

  <div class="grid grid-cols-2 gap-4 px-4">
    <a class="" href="/event/ibrahim">
      <div class="relative aspect-[4/5]"><img
          src="https://afw.imgix.net/pondokdigital/cover/O405lXX1kIoikr9mxw34c9AILWYI1YNBfbdttoLA.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
          alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
          style="width: 100%; display: block;"></div>
      <div class="p-4">
        <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Belajar Dari Keluarga Nabi Ibrahim</h2>
        <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor" fill="none"
            stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400"
            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="2" y1="12" x2="22" y2="12"></line>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
          </svg> <strong class="font-medium">Event online</strong></div>
      </div>
    </a>
    <a class="" href="/event/ibrahim">
      <div class="relative aspect-[4/5]"><img
          src="https://afw.imgix.net/pondokdigital/cover/O405lXX1kIoikr9mxw34c9AILWYI1YNBfbdttoLA.jpg?w=300&amp;fit=crop&amp;auto=format,compress"
          alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
          style="width: 100%; display: block;"></div>
      <div class="p-4">
        <h2 class="font-bold text-gray-900 dark:text-slate-100 truncate">Belajar Dari Keluarga Nabi Ibrahim</h2>
        <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400"><svg stroke="currentColor" fill="none"
            stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400"
            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="2" y1="12" x2="22" y2="12"></line>
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
          </svg> <strong class="font-medium">Event online</strong></div>
      </div>
    </a>

  </div>

</main>
@endsection