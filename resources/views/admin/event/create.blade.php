@extends('layouts.admin', ['title' => 'Event', 'page_heading' => 'Tambah Event'])

@section('content')
<section class="row">
	@livewire('admin.event.create-event')

</section>
@endsection

@push('modals')
{{-- @include('masters.asbab.modal.create')
@include('masters.asbab.modal.update')
@include('masters.asbab.modal.create-target')
@include('masters.asbab.modal.update-target') --}}
@endpush

