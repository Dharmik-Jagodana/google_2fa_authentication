<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $route;
    public $name;
    public $activeUrl;
    public $icon;

    /**
     * Create a new component instance.
     */
    public function __construct($route = null, $name = null, $activeUrl = null, $icon = null)
    {
        $this->route = $route;
        $this->name = $name;
        $this->activeUrl = $activeUrl;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
