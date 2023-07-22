<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $color;
    public $message;

    /**
     * Create a new component instance.
     *
     * @param string $color
     * @param string $message
     */
    public function __construct(string $color = 'orange', string $message = '')
    {
        $this->color = $color;
        $this->message = $message;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
