@extends('layouts.custom', ['title' => 'Pembayaran'])
@section('content')
    <main class="container max-w-2xl mx-auto flex-1 pb-14 font-nunito relative">
        <a href="{{ url()->previous() }}" class="absolute z[999] -top-[70px] md:left-0 left-4">
            <i class="fa-solid fa-arrow-left fa-lg absolute left-0 text-[#394760]"></i>
        </a>
        <div class="my-8 px-3">
            <h1 class="font-bold text-xl">Investasi Seikhlasnya</h1>
            <p class="mt-2">Yuk pilih nominal investasi terbaik Anda</p>
            <div class="my-4">
                <form method="POST" action="{{route('event.payment.pay', $event->slug)}}">
                    @csrf
                    <input type="number" name="amount" value="25000" hidden>
                    <button type="submit"
                        class="flex justify-between items-center cursor-pointer my-4 shadow-sm border rounded-md w-full py-3 px-5 hover:bg-slate-100 hover:shadow-md">
                        <p class="font-bold text-slate-700">Rp 25.000</p>
                        <i class="fa-solid fa-chevron-right text-utama"></i>
                    </button>
                </form>
                <form method="POST" action="{{route('event.payment.pay', $event->slug)}}">
                    @csrf
                    <input type="number" name="amount" value="50000" hidden>
                    <button type="submit"
                        class="flex justify-between items-center cursor-pointer my-4 shadow-sm border rounded-md w-full py-3 px-5 hover:bg-slate-100 hover:shadow-md">
                        <p class="font-bold text-slate-700">Rp 50.000</p>
                        <i class="fa-solid fa-chevron-right text-utama"></i>
                    </button>
                </form>
                <form method="POST" action="{{route('event.payment.pay', $event->slug)}}">
                    @csrf
                    <input type="number" name="amount" value="150000" hidden>
                    <button type="submit"
                        class="flex justify-between items-center cursor-pointer my-4 shadow-sm border rounded-md w-full py-3 px-5 hover:bg-slate-100 hover:shadow-md">
                        <p class="font-bold text-slate-700">Rp 150.000</p>
                        <i class="fa-solid fa-chevron-right text-utama"></i>
                    </button>
                </form>
                <form method="POST" action="{{route('event.payment.pay', $event->slug)}}">
                    @csrf
                    <input type="number" name="amount" value="250000" hidden>
                    <button type="submit"
                        class="flex justify-between items-center cursor-pointer my-4 shadow-sm border rounded-md w-full py-3 px-5 hover:bg-slate-100 hover:shadow-md">
                        <p class="font-bold text-slate-700">Rp 250.000</p>
                        <i class="fa-solid fa-chevron-right text-utama"></i>
                    </button>
                </form>
                <form method="POST" action="{{route('event.payment.pay', $event->slug)}}">
                    @csrf
                    <input type="number" name="amount" value="500000" hidden>
                    <button type="submit"
                        class="flex justify-between items-center cursor-pointer my-4 shadow-sm border rounded-md w-full py-3 px-5 hover:bg-slate-100 hover:shadow-md">
                        <p class="font-bold text-slate-700">Rp 500.000</p>
                        <i class="fa-solid fa-chevron-right text-utama"></i>
                    </button>
                </form>
                <form method="POST" action="{{route('event.payment.pay', $event->slug)}}">
                    @csrf
                    <input type="number" name="amount" value="1000000" hidden>
                    <button type="submit"
                        class="flex justify-between items-center cursor-pointer my-4 shadow-sm border rounded-md w-full py-3 px-5 hover:bg-slate-100 hover:shadow-md">
                        <p class="font-bold text-slate-700">Rp 1.000.000</p>
                        <i class="fa-solid fa-chevron-right text-utama"></i>
                    </button>
                </form>
            </div>
            <div class="shadow-sm border rounded-md">
                <div class="px-3 py-8">
                    <p>Atau masukkan investasi terbaik Anda</p>
                    <div class="flex relative items-center my-3" dir="rtl">
                        <span class="absolute left-4 top-3 font-bold z-50 text-lg">Rp</span>
                        <input type="number" id="amount" name="amount"
                            class="input-no-spinner border text-right text-xl border-slate-300 font-bold backdrop-blur-sm bg-slate-100 shadow-sm rounded-md py-3 px-4 w-full focus:outline-none focus:ring-0 focus:ring-utama"
                            placeholder="0" value="" oninput="checkAmount()">
                    </div>
                    <p class="text-sm text-red-400">*Min. investasi sebesar Rp 10.000</p>
                </div>
            </div>
        </div>

    </main>
    @push('footer')
        <footer
            class="bg-white max-w-2xl mx-auto flex-1 border border-gray-200 fixed px-2 py-2 bottom-0 inset-x-0 w-screen z-[999] rounded-md shadow">
            <form method="POST" action="{{route('event.payment.pay', $event->slug)}}">
                @csrf
                <input type="number" id="amount-out" name="amount" hidden>
                <button type="submit" id="submit-button" disabled class="bg-slate-400 w-full text-white py-2 rounded-md">Lanjut Pembayaran</button>
            </form>
        </footer>
    @endpush
@endsection

@push('scripts')
    <script>
        function checkAmount() {
            const button = document.getElementById('submit-button');
            const input = document.getElementById('amount');
            const amountOut = document.getElementById('amount-out');
            const value = parseFloat(input.value);

            if (value >= 10000) {
                amountOut.value = value;
                button.disabled = false;
                button.classList.remove('bg-slate-400');
                button.classList.add('bg-utama');
            } else {
                button.disabled = true;
                button.classList.remove('bg-utama');
                button.classList.add('bg-slate-400');
            }
        }
    </script>
@endpush
