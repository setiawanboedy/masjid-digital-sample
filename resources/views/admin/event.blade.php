@extends('layouts.admin', ['title' => 'Event', 'page_heading' => 'Data Event'])

@section('content')
<section class="row">
	

	@livewire('admin.event.table-event')

</section>
@endsection

