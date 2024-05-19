@extends('layouts.app',['title'=>'Daftar'])
@section('content')
<main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
    <div class="my-8 px-4">
      <div class="mb-8">
        <h2 class="font-bold text-gray-900 text-2xl">Daftar akun</h2>
        <p class="mb-2 text-slate-500">Silahkan isi pendaftaran berikut untuk membuat akun</p>
      </div>


      <div class="py-4 border bg-yellow-100 border-yellow-200 text-yellow-800 rounded-md p-4">
        <p>Pastikan data yang diisi sesuai, e-tiket akan di kirimkan ke alamat email dan nomor telepon yang dicantumkan</p>
      </div>

      <form class="mt-4" action="#">
        <div class="mb-8">
          <label class="block mb-2 text-slate-500" for="email">Nama</label>
          <input type="text" class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama"
            placeholder="Masukkan lengkap Anda" required>
        </div>

        <div class="mb-8">
          <label class="block mb-2 text-slate-500" for="email">Email</label>
          <input type="email" class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama"
            placeholder="Masukkan email" required>
        </div>
        <div class="mb-8">
          <label class="block mb-2 text-slate-500" for="email">No HP</label>
          <input type="number" class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama"
            placeholder="Masukkan nomor hp" required>
        </div>

        <div class="mb-4">
          <label class="block mb-2 text-slate-500" for="password">Password</label>
          <input type="password" class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama" placeholder="Masukkan kata sandi"
            required>
        </div>

        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mt-8">
          <span class="font-medium block">Sudah punya akun? <a href="{{route('login.index')}}" class="text-utama">Masuk disini</a></span>
          <button type="submit"
            class="bg-utama py-2 px-8 rounded-md text-white overflow-hidden relative flex justify-between items-center">Daftar
          </button>
        </div>
      </form>
    </div>

  </main>
@endsection