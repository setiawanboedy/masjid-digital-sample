<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryIcon extends Component
{
    public $categoryKey;
    /**
     * Create a new component instance.
     */
    public function __construct($categoryKey)
    {
        $this->categoryKey = $categoryKey;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-icon');
    }
}
