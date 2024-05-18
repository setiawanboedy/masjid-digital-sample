@extends('layouts.app',['title'=>'Transaksi'])
@section('content')
<main class="max-w-2xl mx-auto flex-1 relative font-nunito">
  <div class="my-8 px-4">
    <div class="flex justify-between items-center">
      <div>
        <h2 class="font-bold text-gray-900 text-2xl">Transaksi Saya</h2>
        <p class="mb-2 text-slate-500">Riwayat transaksi Anda</p>
      </div>


      <div class="flex">
        <div
          class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-s-lg focus:ring-4 focus:outline-none focus:ring-gray-100 ">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter"
            viewBox="0 0 16 16">
            <path
              d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5" />
          </svg>
        </div>

        <select id="states"
          class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-e-lg border-s-gray-100 border-s-2 focus:border-s-2 focus:right-0 focus:outline-none px-4">
          <option selected>Semua</option>
          <option value="success">Berhasil</option>
          <option value="pending">Menunggu</option>
          <option value="failed">Gagal</option>
        </select>
      </div>

    </div>

    <!-- List item -->
    <div class="mt-8">
      <!-- Failed -->
      <div class="flex justify-between mt-4 relative shadow-sm rounded-md border p-4">
        <div class="flex">
          <img
            src="https://afw.imgix.net/pondokdigital/cover/RPrxMgzGxcUQ9h2bxvts3Wyhq4Y6CVCGiekP5UTx.png?w=300&amp;fit=crop&amp;auto=format,compress"
            alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover h-40 md:h-32"
            >
          <div class="pl-4">
            <p class="text-sm">DGTL-8945723050850</p>
            <h1 class="font-bold text-lg">Belajar Dari Kesalahan</h1>

            <div class="flex items-center mt-2">
              <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
              <p class="text-sm text-gray-500 pl-2">14 Mei 2024</p>
            </div>
            <div class="flex items-center mt-1">
              <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
              <p class="text-sm text-gray-500 pl-2">Event Digital</p>
            </div>
            <div class="flex items-center mt-1">
              <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                </path>
              </svg>
              <p class="text-sm text-gray-500 pl-2">Online Event</p>
            </div>
            <div class="flex items-center mt-2 md:right-0 md:top-0 md:absolute">
              <p class="text-sm md:hidden">Status: </p>
              <div class="pl-4">
                <p class="bg-red-500 px-4 rounded-md md:rounded-r-none text-white uppercase">
                  Gagal
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- success -->
      <div class="flex justify-between mt-4 relative shadow-sm rounded-md border p-4">
        <div class="flex">
          <img
            src="https://afw.imgix.net/pondokdigital/cover/RPrxMgzGxcUQ9h2bxvts3Wyhq4Y6CVCGiekP5UTx.png?w=300&amp;fit=crop&amp;auto=format,compress"
            alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover h-40 md:h-32"
            >
          <div class="pl-4">
            <p class="text-sm">DGTL-8945723050850</p>
            <h1 class="font-bold text-lg">Belajar Dari Kesalahan</h1>

            <div class="flex items-center mt-2">
              <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
              <p class="text-sm text-gray-500 pl-2">14 Mei 2024</p>
            </div>
            <div class="flex items-center mt-1">
              <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
              <p class="text-sm text-gray-500 pl-2">Event Digital</p>
            </div>
            <div class="flex items-center mt-1">
              <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                </path>
              </svg>
              <p class="text-sm text-gray-500 pl-2">Online Event</p>
            </div>
            <div class="flex items-center mt-2 md:right-0 md:top-0 md:absolute">
              <p class="text-sm md:hidden">Status: </p>
              <div class="pl-4">
                <p class="bg-green-500 px-4 rounded-md md:rounded-r-none text-white uppercase">
                  Berhasil
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Menunggu -->
      <div class="flex justify-between mt-4 relative shadow-sm rounded-md border p-4">
        <div class="flex">
          <img
            src="https://afw.imgix.net/pondokdigital/cover/RPrxMgzGxcUQ9h2bxvts3Wyhq4Y6CVCGiekP5UTx.png?w=300&amp;fit=crop&amp;auto=format,compress"
            alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover h-40 md:h-32"
            >
          <div class="pl-4">
            <p class="text-sm">DGTL-8945723050850</p>
            <h1 class="font-bold text-lg">Belajar Dari Kesalahan</h1>

            <div class="flex items-center mt-2">
              <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
              <p class="text-sm text-gray-500 pl-2">14 Mei 2024</p>
            </div>
            <div class="flex items-center mt-1">
              <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
              <p class="text-sm text-gray-500 pl-2">Event Digital</p>
            </div>
            <div class="flex items-center mt-1">
              <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                </path>
              </svg>
              <p class="text-sm text-gray-500 pl-2">Online Event</p>
            </div>
            <div class="flex items-center mt-2 md:right-0 md:top-0 md:absolute">
              <p class="text-sm md:hidden">Status: </p>
              <div class="pl-4">
                <p class="bg-yellow-500 px-4 rounded-md md:rounded-r-none text-white uppercase">
                  Menuggu Bayar
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
</main>
@endsection