<?php

namespace App\View\Components;

use Illuminate\View\Component;

class toast extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title, $type='info', $bgcolor, $svgpath, $mtime='0 min ago';

    public function __construct($type)
    {
        if($type == 'success'){
            $this->bgcolor=trans('theme.successbgcolor');
            $this->svgpath=trans('theme.successSvgPath');
        }
        elseif($type == 'warning'){
            $this->bgcolor=trans('theme.warningbgcolor');
            $this->svgpath=trans('theme.warningSvgPath');
        }
        elseif($type == 'danger'){
            $this->bgcolor=trans('theme.dangerbgcolor');
            $this->svgpath=trans('theme.dangerSvgPath');
        }else{
            $this->bgcolor=trans('theme.infobgcolor');
            $this->svgpath=trans('theme.infoSvgPath');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.toast');
    }
}
