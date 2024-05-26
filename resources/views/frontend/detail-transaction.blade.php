@extends('layouts.custom', ['title' => 'Transaksi'])
@section('content')
    <main class="container max-w-2xl mx-auto flex-1 pb-14 font-nunito relative">
        <a href="{{ url()->previous() }}" class="absolute z[999] -top-[70px] md:left-0 left-4">
            <i class="fa-solid fa-arrow-left fa-lg absolute left-0 text-[#394760]"></i>
        </a>
        <div class="my-8 px-3">
            <div class="flex justify-between mt-4 relative">
                <div class="flex">
                    <img src="{{Storage::url($transaction->event->image)}}?w=300&amp;fit=crop&amp;auto=format,compress"
                        alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover h-40">
                    <div class="pl-4">
                        <h1 class="font-bold text-base md:text-lg">{{$transaction->event->title}}</h1>
                        <div class="flex items-center mt-1">
                            <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2"
                                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <p class="text-sm text-gray-500 pl-2">{{$transaction->event->user->name}}</p>
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
                            <p class="text-sm text-gray-500 pl-2">{{$transaction->event->date}}</p>
                        </div>
                        <div class="flex items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                              </svg>
                            <p class="text-sm text-gray-500 pl-2">{{ $transaction->event->time }} WITA</p>
                        </div>
                        <x-category-icon :event="$transaction->event" />

                    </div>
                    
                </div>
            </div>
        </div>
        <div class="my-6 px-3">
            <button class="bg-yellow-500 w-full text-white py-2 rounded-md">Bayar Sekarang</button>
        </div>
    </main>
@endsection
