@extends('layouts.app',['title'=>'Event'])
@section('content')
<main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
  <!-- Search -->
  @livewire('frontend.event.search')

</main>
@endsection