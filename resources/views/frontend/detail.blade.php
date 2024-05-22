@extends('layouts.custom', ['title' => $event->title])
@section('content')
    <main class="container max-w-2xl mx-auto flex-1 pb-14 font-nunito relative">
        <a href="{{ route('home.index') }}" class="absolute z[999] -top-[70px] md:left-0 left-4">
            <i class="fa-solid fa-arrow-left fa-lg absolute left-0 text-[#394760]"></i>
        </a>
        <div class="my-8 px-3">
            <div class="flex justify-between mt-4 relative">
                <div class="flex">
                    <img src="{{ Storage::url($event->image) }}" alt=""
                        class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover h-40 md:h-52">
                    <div class="pl-4">
                        <h1 class="font-bold text-base md:text-lg">{{ $event->title }}</h1>
                        <div class="flex items-center mt-1">
                            <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2"
                                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <p class="text-sm text-gray-500 pl-2">{{ $event->user->name }}</p>
                        </div>
                        <div class="flex items-center mt-2">
                            <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2"
                                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <p class="text-sm text-gray-500 pl-2">{{ $event->date }}</p>
                        </div>
                        <div class="flex items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                              </svg>
                            <p class="text-sm text-gray-500 pl-2">{{ $event->time }} WITA</p>
                        </div>

                        <x-category-icon :event="$event" />
                        

                    </div>
                    <div class="right-0 bottom-0 absolute mb-4">
                        <div class="flex items-center cursor-pointer px-1 md:px-2 py-1 rounded-md border border-slate-500">
                            <div class="pr-1 md:pr-2">
                                <svg class="text-sm md:text-base" stroke="currentColor" fill="none" stroke-width="2"
                                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em"
                                    width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="18" cy="5" r="3"></circle>
                                    <circle cx="6" cy="12" r="3"></circle>
                                    <circle cx="18" cy="19" r="3"></circle>
                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                </svg>
                            </div>
                            <p class=" text-slate-500 text-sm md:text-base">
                                Bagikan
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="font-bold text-gray-900 text-xl mt-8">Ringkasan</h3>
            <div class="mt-2 leading-8 text-slate-700">
                <div class="prose prose-slate">
                    {!! $event->description !!}
                </div>
            </div>

            @if ($event->category_key == 'SERIES')
                <header class="mt-8">
                    <h1 class="font-bold text-xl">Preview Video</h1>
                </header>
                <div class="my-4">
                    @foreach ($event->series as $item)
                        <div
                            class="flex justify-between items-center my-4 shadow-sm border rounded-md w-full py-3 px-5 hover:bg-slate-100">
                            <div class="flex items-center">
                                <i class="fa-solid fa-video text-slate-500"></i>
                                <p class="pl-4 text-slate-700">{{ $item->title }}</p>
                            </div>
                            @if ($item->is_unlock == 1)
                            <a href="{{$item->video_url}}">
                                <i class="fa-solid fa-play text-utama"></i>
                            </a>
                            @else
                                <i class="fa-solid fa-lock text-slate-500"></i>
                            @endif
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </main>
    @push('footer')
        <footer
            class="bg-white max-w-2xl mx-auto flex-1 border border-gray-200 fixed px-2 py-2 bottom-0 inset-x-0 w-screen z-[999] rounded-md shadow">
            <a href="{{ route('event.payment.index') }}">
                <button class="bg-utama w-full text-white py-2 rounded-md">Ikuti Event</button>
            </a>
        </footer>
    @endpush
@endsection
