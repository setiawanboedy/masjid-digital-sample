@extends('layouts.app',['title'=>'Login'])
@section('content')
<main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
    <div class="my-8 px-4">
      <div class="mb-8">
        <h2 class="font-bold text-gray-900 text-2xl">Masuk</h2>
        <p class="mb-2 text-slate-500">Silahkan masuk dengan akun Anda</p>
      </div>
      @livewire('frontend.auth.login')
    </div>

  </main>
@endsection