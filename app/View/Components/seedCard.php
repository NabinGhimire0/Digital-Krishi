<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class seedCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $categoryName;
    public $src;
    public function __construct($url,$categoryName,$src)
    {
        $this->url=$url;
        $this->src=$src;
        $this->categoryName=$categoryName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.seed-card');
    }
}
