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

      @livewire('frontend.auth.register')
    </div>

  </main>
@endsection