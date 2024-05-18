@extends('layouts.app',['title'=>'Event'])
@section('content')
<main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
  <div class="my-8 px-4">
    <div class="flex items-center mb-10">
      <div class="rounded-full w-[64px] h-[64px] bg-blue-950 flex justify-center items-center">
        <h1 class="text-white font-semibold text-2xl">B</h1>
      </div>
      <div class="pl-6">
        <h1 class="font-bold text-xl">Budi Setiawan</h1>
        <p class="text-slate-500">budisetiawan.dev@gmail.com</p>
      </div>
    </div>

    <h2 class="font-bold text-gray-900 text-xl">Data Pribadi</h2>
    <div class="mt-6 mb-2">
      <div class="flex justify-content-between items-center cursor-pointer hover:bg-slate-100 hover:rounded-md py-4">
        <div class="flex items-center">
          <svg stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="24"
            width="24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
            </path>
          </svg>
          <p class="pl-4">Ubah profil</p>
        </div>
        <svg stroke="grey" fill="grey" stroke-width="0" viewBox="0 0 24 24" aria-hidden="true" class="ml-auto"
          height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
            clip-rule="evenodd"></path>
        </svg>
      </div>
      <div class="flex justify-content-between items-center cursor-pointer hover:bg-slate-100 hover:rounded-md py-4">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="currentColor"
            class="bi bi-receipt ml-[1px]" viewBox="0 0 16 16">
            <path
              d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z" />
            <path
              d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5" />
          </svg>
          <p class="pl-4">Transaksi</p>
        </div>
        <svg stroke="currentColor" fill="grey" stroke-width="0" viewBox="0 0 24 24" aria-hidden="true" class="ml-auto"
          height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
            clip-rule="evenodd"></path>
        </svg>
      </div>

      <div class="flex justify-content-between items-center cursor-pointer hover:bg-red-100 hover:rounded-md py-4 group">
        <div class="flex items-center">
          <svg stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"
            class="text-red-500 group-hover:text-black" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <p class="pl-4 text-red-500 group-hover:text-black">Keluar akun</p>
        </div>
        <svg stroke="currentColor" fill="grey" stroke-width="0" viewBox="0 0 24 24" aria-hidden="true" class="ml-auto fill-red-500 group-hover:fill-black"
          height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
            clip-rule="evenodd"></path>
        </svg>
      </div>


    </div>
  </div>
</main>
@endsection