<div>
    <div class="flex items-center mb-10">
        <div class="rounded-full w-[64px] h-[64px] bg-blue-950 flex justify-center items-center">
            <h1 class="text-white font-semibold text-2xl uppercase">{{$firstLetter}}</h1>
        </div>
        <div class="pl-6">
            <h1 class="font-bold text-xl">{{ $user->name }}</h1>
            <p class="text-slate-500">{{ $user->email }}</p>
        </div>
    </div>
</div>
