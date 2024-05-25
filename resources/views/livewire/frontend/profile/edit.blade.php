<div>
    <h2 class="font-bold text-gray-900 text-xl">Profil Saya</h2>
    <form wire:submit.prevent='update'  class="my-8">
        @csrf
        <div class="mb-4">
            <label class="block mb-2 text-slate-500" for="email">Nama</label>
            <input type="text" wire:model.live.debounce.300ms='name' value="{{ old('name') }}" name="name"
                id="name"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('name') border-red-600 @enderror"
                placeholder="Nama lengkap Anda" required>
            @error('name')
                <div class="block text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block mb-2 text-slate-500" for="email">Email</label>
            <input type="email" wire:model.live.debounce.300ms='email' value="{{ old('email') }}" name="email"
                id="email"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('email') border-red-600 @enderror"
                placeholder="Alamat email aktif" required>
            @error('email')
                <div class="block text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-2 text-slate-500" for="email">No HP</label>
            <input type="number" wire:model.live.debounce.300ms='phone' value="{{ old('phone') }}" name="phone"
                id="phone"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('phone') border-red-600 @enderror"
                placeholder="Nomor telepon aktif" required>
            @error('phone')
                <div class="block text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-2 text-slate-500" for="email">Alamat Lengkap</label>
            <textarea 
            wire:model.lazy='address'
            class="w-full" name="address" id="address" rows="3" placeholder='Alamat Anda' required></textarea>
            @error('address')
                <div class="block text-red-600">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="flex justify-end">
            <button type="submit"
                class="bg-utama py-2 px-4 rounded-md text-white overflow-hidden relative flex justify-between items-center">Update
                <span wire:loading wire:target='update' class="loading loading-spinner loading-sm ml-1"></span>
            </button>
        </div>
    </form>

    <h2 class="font-bold text-gray-900 text-xl">Ubah Kata Sandi</h2>
    <form wire:submit.prevent='changePw' class="my-4">
        <div class="mb-4">
            <label class="block mb-2 text-slate-500" for="password">Password saat ini</label>
            <input type="password"
            wire:model.live.debounce.300ms='password' value="{{ old('password') }}" name="password" autocomplete="new-password"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('password') border-red-600 @enderror"
                placeholder="Kata sandi lama" required>
                @error('password')
                <div class="block text-red-600">
                    {{ $message }}
                </div> 
            @enderror    
        </div>
        <div class="mb-4">
            <label class="block mb-2 text-slate-500" for="password">Password baru</label>
            <input type="password"
            wire:model.live.debounce.300ms='password_new' value="{{ old('password_new') }}" name="password_new" autocomplete="new-password"
                class="w-full border rounded-md py-2 px-4 shadow-sm focus:outline-none focus:ring-1 focus:ring-utama @error('password_new') border-red-600 @enderror"
                placeholder="Kata sandi baru" required>
                @error('password_new')
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
        <div class="flex justify-end">
            <button type="submit"
                class="bg-utama py-2 px-4 rounded-md text-white overflow-hidden relative flex justify-between items-center">Ubah Password
                <span wire:loading wire:target='changePw' class="loading loading-spinner loading-sm ml-1"></span>
            </button>
        </div>
    </form>
</div>
@push('scripts')
@include('frontend.includes.scripts.alert')
@endpush