@extends('layouts.app',['title'=>'Transaksi'])
@section('content')
<main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
  <div class="my-8 px-4">
    @livewire('frontend.transaction')
    
  </div>
</main>
@endsection
