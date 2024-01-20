<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class seedDetailCard extends Component
{
    /**
     * Create a new component instance.
     */
    // public $short_desc, $description, $market_price;
    // public function __construct($short_desc, $description, $market_price)
    public $climate,$altitude,$marked_price,$description,$short_desc,$name;
    public function __construct($name,$climate,$altitude,$marked_price,$description,$short_desc)
    {
        $this->name = $name;
        $this->climate = $climate;
        $this->altitude = $altitude;
        $this->marked_price = $marked_price;
        $this->description = $description;
        $this->short_desc = $short_desc;

        // $this->short_desc = $short_desc;
        // $this->description = $description;
        // $this->market_price = $market_price;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.seed-detail-card');
    }
}
