<?php

namespace Luilliarcec\Components\Actions\Concerns;

use Closure;

trait HasIcon
{
    protected string|Closure|null $icon = null;

    protected string|Closure|null $iconPosition = null;

    public function icon(string|Closure|null $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->evaluate($this->icon);
    }

    public function iconPosition(string|Closure|null $position): static
    {
        $this->iconPosition = $position;

        return $this;
    }

    public function getIconPosition(): ?string
    {
        return $this->evaluate($this->iconPosition);
    }
}
