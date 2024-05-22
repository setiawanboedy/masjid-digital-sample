<div>
    @if ($event->categoryKey == 'SERIES')
        <div class="flex items-center mt-1">
            <svg stroke="grey" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
            <p class="text-sm text-gray-500 pl-2">{{$episode}} Episode</p>

        </div>
    @elseif ($event->categoryKey == 'ONLINE')
        <div class="flex items-center mt-1">
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round" class="text-slate-400" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="2" y1="12" x2="22" y2="12"></line>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                </path>
            </svg>
            <p class="text-sm text-gray-500 pl-2">Event Online</p>
        </div>
    @elseif ($event->categoryKey == 'OFFLINE')
        <div class="flex items-center mt-1">
            <svg stroke="grey" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                stroke-linejoin="round" class="flex-shrink-0" height="1em" width="1em"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <p class="text-sm text-gray-500 pl-2">Event Offline</p>
        </div>
    @endif
</div>
