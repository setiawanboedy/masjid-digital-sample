<?php

namespace App\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class TableEvent extends Component
{
    use WithPagination;
    public $perPage = 10;

    public function render()
    {
        $events = Event::orderBy('dtm', 'desc')->paginate($this->perPage);
        $reponse = [
            'events'=>$events
        ];
        return view('livewire.admin.event.table-event', $reponse);
    }
}
