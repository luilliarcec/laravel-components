<?php

namespace Luilliarcec\Components\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Luilliarcec\Components\Actions\Confirmation;

class Link extends Component
{
    use Concerns\CanRequireConfirmation;

    public function __construct(
        public string $tag = 'a',
        public string $type = 'button',
        public ?string $color = 'primary',
        public ?string $size = 'md',
        public ?string $icon = null,
        public ?string $iconPosition = 'before',
        public ?string $tooltip = null,
        public bool $disabled = false,
        public bool $darkMode = false,
        public string|array|Confirmation|null $confirmation = null
    ) {
        $this->color ??= 'primary';
        $this->size ??= 'md';
        $this->iconPosition ??= 'before';
    }

    public function render(): View
    {
        return view('components::components.link');
    }
}
