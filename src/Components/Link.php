<?php

namespace Luilliarcec\Components\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Luilliarcec\Components\Actions\Confirmation;

class Link extends Component
{
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

    public function getConfirmation(): ?Confirmation
    {
        if (!$this->hasConfirmConfiguration()) {
            return null;
        }

        if ($this->confirmation instanceof Confirmation) {
            return $this->confirmation;
        }

        return (new Confirmation())
            ->method($this->confirmation['method'] ?? 'get')
            ->title($this->confirmation['title'] ?? null)
            ->description($this->confirmation['description'] ?? null)
            ->url($this->confirmation['url'] ?? $this->attributes['href']);
    }

    public function getJsonConfirmConfiguration(): ?string
    {
        if (is_string($this->confirmation)) {
            return $this->confirmation;
        }

        return $this->getConfirmation()?->toJson();
    }

    public function hasConfirmConfiguration(): bool
    {
        return $this->confirmation !== null;
    }

    public function render(): View
    {
        return view('components::components.link');
    }
}
