@extends('layouts.app',['title'=>'Edit Profil'])
@section('content')
<main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
  <div class="my-8 px-4">
    @livewire('frontend.profile.edit')
    
  </div>
</main>
@endsection
