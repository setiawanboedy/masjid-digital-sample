@extends('layouts.app', ['title' => 'Home'])
@section('content')
    <main class="max-w-2xl mx-auto flex-1 relative pb-14 font-nunito">
        <!-- Image Banner -->
        <a href="#"><img src="{{ asset('frontend/images/bg-home.jpg') }}" loading="lazy" alt=""
                class="w-full rounded-md">
        </a>

        <!-- Event Terbaru -->
        <section class="py-8 relative z-[1] overflow-hidden" style="background-color: rgba(255, 252, 252, 0);">
            <header class="px-4 mb-4 flex items-center">
                <div class="flex-1 pr-4">
                    <h2 class="font-bold text-xl">EVENT TERBARU</h2>
                </div><a class="text-primary-700 font-bold text-sm flex items-center gap-2 flex-shrink-0"
                    href="#">Selengkapnya <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                        viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                            clip-rule="evenodd"></path>
                    </svg></a>
            </header>
            <div class="overflow-x-auto flex whitespace-nowrap gap-4 py-2 px-4">
                @foreach ($events as $event)
                    <a class="w-[160px]" href="{{ route('event.detail.index', $event->slug) }}" wire:navigate>
                        <div class="relative aspect-[4/5]"><img src="{{ Storage::url($event->image) }}" alt=""
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
        </section>

        @if (!$series_events->isEmpty())
            <section class="py-8 relative z-[1] overflow-hidden" style="background-color: rgb(255, 255, 255);">
                <header class="px-4 mb-4 flex items-center">
                    <div class="flex-1 pr-4">
                        <h2 class="font-bold text-xl">Web Series</h2>
                    </div><a class="text-primary-700 font-bold text-sm flex items-center gap-2 flex-shrink-0"
                        href="/category/hidupbahagia">Selengkapnya <svg stroke="currentColor" fill="currentColor"
                            stroke-width="0" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                                clip-rule="evenodd"></path>
                        </svg></a>
                </header>
                <div class="overflow-x-auto flex whitespace-nowrap gap-4 py-2 px-4">
                    @foreach ($series_events as $event)
                        <a class="w-[160px]" href="{{ route('event.detail.index', $event->slug) }}" wire:navigate>
                            <div class="relative aspect-[4/5]"><img src="{{ Storage::url($event->image) }}" alt=""
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
            </section>
        @endif

        <!-- Belajar Fiqih -->
        @if (!$online_events->isEmpty())
            <section class="py-8 relative z-[1] overflow-hidden" style="background-color: rgb(255, 255, 255);">
                <header class="px-4 mb-4 flex items-center">
                    <div class="flex-1 pr-4">
                        <h2 class="font-bold text-xl">Event Online</h2>
                    </div><a class="text-primary-700 font-bold text-sm flex items-center gap-2 flex-shrink-0"
                        href="/category/Fiqh">Selengkapnya <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                                clip-rule="evenodd"></path>
                        </svg></a>
                </header>
                <div class="overflow-x-auto flex whitespace-nowrap gap-4 py-2 px-4">
                    @foreach ($online_events as $event)
                        <a class="w-[160px]" href="{{ route('event.detail.index', $event->slug) }}" wire:navigate>
                            <div class="relative aspect-[4/5]"><img src="{{ Storage::url($event->image) }}" alt=""
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
            </section>
        @endif

        @if (!$offline_events->isEmpty())
            <section class="py-8 relative z-[1] overflow-hidden" style="background-color: rgb(255, 255, 255);">
                <header class="px-4 mb-4 flex items-center">
                    <div class="flex-1 pr-4">
                        <h2 class="font-bold text-xl">Event Offline</h2>
                    </div><a class="text-primary-700 font-bold text-sm flex items-center gap-2 flex-shrink-0"
                        href="/category/Fiqh">Selengkapnya <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z"
                                clip-rule="evenodd"></path>
                        </svg></a>
                </header>
                <div class="overflow-x-auto flex whitespace-nowrap gap-4 py-2 px-4">
                    @foreach ($offline_events as $event)
                        <a class="w-[160px]" href="{{ route('event.detail.index', $event->slug) }}" wire:navigate>
                            <div class="relative aspect-[4/5]"><img src="{{ Storage::url($event->image) }}"
                                    alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover"
                                    style="width: 100%; display: block;"></div>
                            <div class="p-4">
                                <h2 class="font-bold text-gray-900 truncate">{{ $event->title }}</h2>
                                <div class="flex gap-2 items-center text-slate-600 dark:text-slate-400">
                                    <x-category-icon :event="$event" />
                                </div>
                            </div>
                        </a>
                    @endforeach
              @endif
            </div>
        </section>
    </main>
@endsection
