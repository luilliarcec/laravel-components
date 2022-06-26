<?php

namespace Luilliarcec\Components\Components;

use Illuminate\Contracts\View\View;
use Luilliarcec\Components\Actions\Confirmation;

class IconButton extends Link
{
    public function __construct(
        string $tag = 'button',
        string $type = 'button',
        ?string $color = 'primary',
        ?string $size = 'md',
        ?string $icon = null,
        ?string $tooltip = null,
        bool $disabled = false,
        bool $darkMode = false,
        public ?string $label = null,
        string|array|Confirmation|null $confirmation = null
    ) {
        parent::__construct(
            tag: $tag,
            type: $type,
            color: $color,
            size: $size,
            icon: $icon,
            iconPosition: null,
            tooltip: $tooltip,
            disabled: $disabled,
            darkMode: $darkMode,
            confirmation: $confirmation
        );
    }

    public function render(): View
    {
        return view('components::components.icon-button');
    }
}
