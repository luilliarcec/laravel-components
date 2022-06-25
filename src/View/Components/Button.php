<?php

namespace Luilliarcec\Components\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public string $tag = 'button',
        public string $type = 'button',
        public string $color = 'primary',
        public string $size = 'md',
        public ?string $icon = null,
        public string $iconPosition = 'before',
        public ?string $tooltip = null,
        public bool $disabled = false,
        public bool $outlined = false,
        public bool $darkMode = false,
    ) {
    }

    public function render(): View
    {
        return view('components::components.button');
    }
}
