@extends('layouts.app', ['title' => 'Event Online'])
@section('content')
    <main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
        <!-- Search -->
        <div class="grid grid-cols-2 gap-4 px-4">
            @foreach ($online_events as $event)
                <a href="{{ route('event.detail.index', $event->slug) }}">
                    <div class="relative aspect-[4/5]"><img
                            src="{{ Storage::url($event->image) }}?w=300&amp;fit=crop&amp;auto=format,compress" alt=""
                            class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
                            style="width: 100%; display: block;"></div>
                    <div class="p-4">
                        <h2 class="font-bold text-gray-900 truncate">{{ $event->title }}</h2>
                        <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400">
                            <x-category-icon :event="$event" />
                        </div>
                    </div>
                </a>
            @endforeach

        </div>

    </main>
@endsection
