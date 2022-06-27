<?php

namespace Luilliarcec\Components\Components;

use Illuminate\Contracts\View\View;
use Luilliarcec\Components\Actions\Confirmation;

class Button extends Link
{
    public function __construct(
        string $tag = 'button',
        string $type = 'button',
        ?string $color = 'primary',
        ?string $size = 'md',
        ?string $icon = null,
        ?string $iconPosition = 'before',
        ?string $tooltip = null,
        bool $disabled = false,
        bool $darkMode = false,
        public bool $outlined = false,
        string|array|Confirmation|null $confirmation = null
    ) {
        parent::__construct(
            tag: $tag,
            type: $type,
            color: $color,
            size: $size,
            icon: $icon,
            iconPosition: $iconPosition,
            tooltip: $tooltip,
            disabled: $disabled,
            darkMode: $darkMode,
            confirmation: $confirmation
        );
    }

    public function render(): View
    {
        return view('components::components.button');
    }
}
