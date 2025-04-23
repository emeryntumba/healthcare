<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Button extends Component
{
    public string $label;
    public string $type;
    public ?string $href;

    /**
     * Create a new component instance.
     *
     * @param string $label
     * @param string $type
     * @param string|null $href
     */
    public function __construct(string $label, string $type = 'submit', ?string $href = null)
    {
        $this->label = $label;
        $this->type = $type;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.button');
    }
}
