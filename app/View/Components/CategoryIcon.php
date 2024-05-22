<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryIcon extends Component
{
    public $event;
    /**
     * Create a new component instance.
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $episode = 0;
        if ($this->event->series != null) {
            $episode = $this->event->series->count();
        }
        return view('components.category-icon',[
            'episode'=>$episode,
        ]);
    }
}
