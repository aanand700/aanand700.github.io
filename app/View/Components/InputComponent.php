<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputComponent extends Component
{

    public $name = null;
    public $label = null;
    public $value = null;
    public $type = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $value, $type)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value ?? '';
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-component');
    }
}
