<?php

namespace App\View\Components;

use Illuminate\View\Component;

class badge extends Component
{
    public $title, $nvalue=0, $bgcolor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nvalue=0)
    {
        $this->bgcolor=trans('theme.bgcolor');
        $this->nvalue=$nvalue;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.badge');
    }
}
