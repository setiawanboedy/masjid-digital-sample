@extends('layouts.app',['title'=>'Login'])
@section('content')
<main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
    <div class="my-8 px-4">
      <div class="mb-8">
        <h2 class="font-bold text-gray-900 text-2xl">Masuk</h2>
        <p class="mb-2 text-slate-500">Silahkan masuk dengan akun Anda</p>
      </div>
      <form action="#">
        <div class="mb-8">
          <label class="block mb-2 text-slate-500" for="email">Email/Telpon</label>
          <input type="text" class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama"
            placeholder="Masukkan email atau telpon" required>
        </div>

        <div class="mb-4">
          <label class="block mb-2 text-slate-500" for="password">Password</label>
          <input type="password" class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama" placeholder="Masukkan kata sandi"
            required>
        </div>
        <a href="#" class="italic block text-slate-500 hover:underline">Lupa password?</a>

        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mt-8">
          <span class="font-medium block">Belum punya akun? <a href="{{route('register.index')}}" class="text-utama">Daftar disini</a></span>
          <button type="submit"
            class="bg-utama py-2 px-4 rounded-md text-white overflow-hidden relative flex justify-between items-center">Masuk
            <svg class="ml-1" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
              stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </button>
        </div>
      </form>
    </div>

  </main>
@endsection