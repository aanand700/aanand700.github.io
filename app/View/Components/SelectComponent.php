<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectComponent extends Component
{

    public $name = null;
    public $label = null;
    public $value = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $value = [])
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = is_array($value) ? $value : [$value];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-component');
    }
}
