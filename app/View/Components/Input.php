<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $name;
    // public $placeholder;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // $placeholder = null
    public function __construct($name, $label, $value = null)
    {
        $this->name = $name;
        $this->label = $label;
        // $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
