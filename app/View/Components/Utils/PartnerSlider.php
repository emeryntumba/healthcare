<?php

namespace App\View\Components\Utils;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\File;

class PartnerSlider extends Component
{
    public array $logos;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->logos = collect(File::files(public_path('img/partners')))
            ->filter(fn($file) => in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'svg', 'webp']))
            ->map(fn($file) => asset('img/partners/' . $file->getFilename()))
            ->values()
            ->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.utils.partner-slider');
    }
}
