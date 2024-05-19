<div>
    <form class="mt-4" method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="mb-8">
            <label class="block mb-2 text-slate-500" for="email">Nama</label>
            <input type="text" wire:model.live.debounce.300ms='name' value="{{ old('name') }}" name="name"
                id="name"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('name') border-red-600 @enderror"
                placeholder="Masukkan lengkap Anda" required>
                @error('name')
                <div class="block text-red-600">
                    {{ $message }}
                </div>
                @enderror
        </div>

        <div class="mb-8">
            <label class="block mb-2 text-slate-500" for="email">Email</label>
            <input type="email"
            wire:model.live.debounce.300ms='email' value="{{ old('email') }}" name="email" id="email"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('email') border-red-600 @enderror"
                placeholder="Masukkan email" required>
                @error('email')
                <div class="block text-red-600">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="mb-8">
            <label class="block mb-2 text-slate-500" for="email">No HP</label>
            <input type="number"
            wire:model.live.debounce.300ms='phone' value="{{ old('phone') }}" name="phone" id="phone"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('phone') border-red-600 @enderror"
                placeholder="Masukkan nomor hp" required>
                @error('phone')
                <div class="block text-red-600">
                    {{ $message }}
                </div>
                @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-slate-500" for="password">Password</label>
            <input type="password"
            wire:model.live.debounce.300ms='password' value="{{ old('password') }}" name="password" autocomplete="new-password"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('password') border-red-600 @enderror"
                placeholder="Masukkan kata sandi" required>
                @error('password')
                <div class="block text-red-600">
                    {{ $message }}
                </div> 
            @enderror    
        </div>
        <div class="mb-4">
            <label class="block mb-2 text-slate-500" for="password">Konfirmasi Password</label>
            <input type="password"
            wire:model.live.debounce.300ms='password_confirmation' value="{{ old('password_confirmation') }}" name="password_confirmation" id="password_confirmation" autocomplete="new-password"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('password_confirmation') border-red-600 @enderror"
                placeholder="Masukkan kata sandi" required>
                @error('password_confirmation')
                <div class="block text-red-600">
                    {{ $message }}
                </div> 
            @enderror    
        </div>

        <div class="flex flex-col md:flex-row items-center justify-between gap-4 mt-8">
            <span class="font-medium block">Sudah punya akun? <a href="{{ route('login.index') }}"
                    class="text-utama">Masuk disini</a></span>
            <button type="submit"
                class="bg-utama py-2 px-8 rounded-md text-white overflow-hidden relative flex justify-between items-center">
                <span  >Daftar</span>
            </button>
        </div>
    </form>
</div>
