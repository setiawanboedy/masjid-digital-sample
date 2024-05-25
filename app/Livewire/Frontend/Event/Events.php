<?php

namespace App\Livewire\Frontend\Event;

use App\Models\Event;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Url;
use Livewire\Component;

class Events extends Component
{

    #[Reactive]
    #[Url]
    public $search;

    public function placeholder() 
    {
        return view('components.shimmer-events');        
    }
    
    public function render()
    {
        $events = Event::search($this->search)->get();
        $response = [
            'events'=>$events
        ];
        return view('livewire.frontend.event.events', $response);
    }
}
