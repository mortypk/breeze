<?php

namespace App\View\Components;

use Illuminate\View\Component;

class progressbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $bgcolor,$nvalue=0;
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
        return view('components.progressbar');
    }
}
