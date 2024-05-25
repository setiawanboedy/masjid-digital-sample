<?php

namespace App\Livewire\Frontend\Event;

use Livewire\Component;

class Search extends Component
{
    public $search = '';
    
    public function render()
    {
        return view('livewire.frontend.event.search');
    }
}
