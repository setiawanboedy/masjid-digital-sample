<div>
    <header class="mb-8 px-4">
        <input type="search"
        wire:model.live.debounce.400ms='search'
            class="border border-slate-300 backdrop-blur-sm shadow-sm rounded-md py-2 px-4 w-full mt-4 focus:outline-none focus:ring-1 focus:ring-[#3FE0D0]"
            placeholder="Cari event" value="">
    </header>
    <livewire:frontend.event.events lazy :$search />
</div>
