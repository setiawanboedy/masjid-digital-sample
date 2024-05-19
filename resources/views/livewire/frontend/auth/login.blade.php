<div>
    <form wire:submit.prevent='login'>
        @csrf
        <div class="mb-8">
            <label class="block mb-2 text-slate-500" for="email">Email/Telpon</label>
            <input type="text" wire:model.live.debounce.300ms='email_phone' value="{{ old('email_phone') }}"
                name="email_phone" id="email_phone"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('email_phone') border-red-600 @enderror"
                placeholder="Masukkan email atau telpon" required>
            @error('email_phone')
                <div class="block text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-slate-500" for="password">Password</label>
            <input type="password" wire:model.live.debounce.300ms='password' value="{{ old('password') }}"
                name="password" id="password"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('password') border-red-600 @enderror"
                placeholder="Masukkan kata sandi" required>
            @error('password')
                <div class="block text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="#" class="italic block text-slate-500 hover:underline">Lupa password?</a>

        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mt-8">
            <span class="font-medium block">Belum punya akun? <a href="{{ route('register.index') }}"
                    class="text-utama">Daftar disini</a></span>
            <button type="submit"
                class="bg-utama py-2 px-4 rounded-md text-white overflow-hidden relative flex justify-between items-center">Masuk
                <span wire:loading wire:target='login' class="loading loading-spinner loading-sm ml-1"></span>
                <svg wire:loading.remove wire:target='login' class="ml-1" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                    stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                    xmlns="http://www.w3.org/2000/svg">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </button>
        </div>
    </form>
</div>
@push('scripts')
@include('frontend.includes.scripts.alert')
@endpush