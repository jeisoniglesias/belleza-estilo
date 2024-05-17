<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Offcanvas extends Component
{
    public $title = '';
    public $id = '';
    public $ariaLabelledby = '';
    /**
     * Create a new component instance.
     */
    public function __construct($title, $id)
    {
        $this->title = $title;
        $this->id = $id;
        $this->ariaLabelledby = $id . 'Label';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.offcanvas');
    }
}
