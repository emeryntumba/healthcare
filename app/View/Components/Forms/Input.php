<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $label
     * @param string $type
     * @param mixed $value
     * @param bool $required
     * @param bool $autofocus
     */
    public function __construct(
        public string $name,
        public string $label,
        public string $type = 'text',
        public $value = null,
        public bool $required = false,
        public bool $autofocus = false
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
