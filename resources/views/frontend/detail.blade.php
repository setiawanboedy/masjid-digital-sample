@extends('layouts.custom', ['title' => 'Detail'])
@section('content')
    <main class="container max-w-2xl mx-auto flex-1 pb-14 font-nunito relative">
        <a href="{{ route('home.index') }}" class="absolute z[999] -top-[70px] md:left-0 left-4">
            <i class="fa-solid fa-arrow-left fa-lg absolute left-0 text-[#394760]"></i>
        </a>
        <div class="my-8 px-3">
            <div class="flex justify-between mt-4 relative">
                <div class="flex">
                    <img src="https://afw.imgix.net/pondokdigital/cover/RPrxMgzGxcUQ9h2bxvts3Wyhq4Y6CVCGiekP5UTx.png?w=300&amp;fit=crop&amp;auto=format,compress"
                        alt="" class="relative rounded-md shadow-md z-[1] aspect-[4/5] object-cover h-40 md:h-52">
                    <div class="pl-4">
                        <h1 class="font-bold text-base md:text-lg">DAUROH SERIES SCALE UP REZEKI - ABU BAKAR ASH SIDDIQ</h1>
                        <div class="flex items-center mt-1">
                            <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2"
                                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <p class="text-sm text-gray-500 pl-2">Event Digital</p>
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
                            <p class="text-sm text-gray-500 pl-2">14 Mei 2024</p>
                        </div>
                        {{-- <div class="flex items-center mt-1">
                            <svg class="text-gray-500" stroke="currentColor" fill="none" stroke-width="2"
                                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                <path
                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                </path>
                            </svg>
                            <p class="text-sm text-gray-500 pl-2">Online Event</p>
                        </div> --}}
                        {{-- <div class="flex items-center mt-1">
                            <svg stroke="grey" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                stroke-linecap="round" stroke-linejoin="round" class="flex-shrink-0" height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <p class="text-sm text-gray-500 pl-2">Islamic Center Mataram</p>
                        </div> --}}
                        <div class="flex items-center mt-1">
                            <svg stroke="grey" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                            <p class="text-sm text-gray-500 pl-2">3 Episode</p>
                        </div>

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
            <p class="mt-2 leading-8 text-slate-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores
                deserunt nobis iste vel
                ducimus, consectetur libero, molestiae fuga facere labore aliquam inventore aperiam vitae! Officia
                voluptates repellat dicta similique illo adipisci recusandae, neque fugit quidem incidunt amet, nisi soluta
                perspiciatis? Cum fugiat optio modi quam rem, quia dolorem earum, assumenda aperiam facere repellat, totam
                asperiores sequi. Culpa non voluptas suscipit, officia dolorum magnam possimus saepe nam odit laudantium
                debitis officiis sit repudiandae voluptates corrupti aliquid eligendi magni. Doloribus, sed temporibus.
                Deleniti rem quasi porro, voluptate soluta, assumenda corporis quae maxime eos doloribus labore asperiores a
                dolores veritatis, ea consectetur. Esse dolore soluta cupiditate officia obcaecati minima voluptatum
                recusandae sint excepturi non earum aspernatur doloribus, blanditiis assumenda laudantium, mollitia atque
                ipsum iste hic accusantium fugit voluptatem fugiat! Laudantium aperiam impedit suscipit porro numquam aut
                iste sed rerum, voluptas, autem nostrum temporibus unde, nesciunt aliquam. Aperiam, quod ad voluptas
                repellat quam earum pariatur at dolor cupiditate. Dolorum quisquam eum corporis nisi, similique laborum
                rerum! Debitis earum optio fugiat, eveniet veniam eum magnam perspiciatis? Distinctio dolorum voluptatem
                accusantium at, assumenda sint doloribus ad ratione eveniet illum harum iste similique, ullam nisi quos
                vitae nemo? Suscipit cum aperiam illo eveniet a saepe facere perferendis.</p>

            <header class="mt-8">
                <h1 class="font-bold text-xl">Preview Video</h1>
            </header>
            <div class="my-4">
                <div
                    class="flex justify-between items-center cursor-pointer my-4 shadow-sm border rounded-md w-full py-3 px-5 hover:bg-slate-100">
                    <div class="flex items-center">
                        <i class="fa-solid fa-video text-slate-500"></i>
                        <p class="pl-4 text-slate-700">Cara Benar Bayar Zakat Maal</p>
                    </div>
                    <i class="fa-solid fa-play text-utama"></i>
                    {{-- <i class="fa-solid fa-lock text-slate-500"></i> --}}
                </div>
                <div
                    class="flex justify-between items-center  my-4 shadow-sm border rounded-md w-full py-3 px-5 hover:bg-slate-100">
                    <div class="flex items-center">
                        <i class="fa-solid fa-video text-slate-500"></i>
                        <p class="pl-4 text-slate-700">Cara Benar Bayar Zakat Maal</p>
                    </div>
                    {{-- <i class="fa-solid fa-play text-utama"></i> --}}
                    <i class="fa-solid fa-lock text-slate-500"></i>
                </div>
                <div
                    class="flex justify-between items-center my-4 shadow-sm border rounded-md w-full py-3 px-5 hover:bg-slate-100">
                    <div class="flex items-center">
                        <i class="fa-solid fa-video text-slate-500"></i>
                        <p class="pl-4 text-slate-700">Cara Benar Bayar Zakat Maal</p>
                    </div>
                    {{-- <i class="fa-solid fa-play text-utama"></i> --}}
                    <i class="fa-solid fa-lock text-slate-500"></i>
                </div>

            </div>
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
