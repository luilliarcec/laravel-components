<?php

namespace Luilliarcec\Components\Components\Concerns;

use Luilliarcec\Components\Actions\Confirmation;

trait CanRequireConfirmation
{
    public function getConfirmation(): Confirmation|string|null
    {
        if (!$this->hasConfirmConfiguration()) {
            return null;
        }

        if (is_array($this->confirmation)) {
            return (new Confirmation())
                ->method($this->confirmation['method'] ?? 'get')
                ->title($this->confirmation['title'] ?? null)
                ->description($this->confirmation['description'] ?? null)
                ->url($this->confirmation['url'] ?? $this->attributes['href']);
        }

        return $this->confirmation;
    }

    public function getJsonConfirmConfiguration(): ?string
    {
        return is_string($this->getConfirmation())
            ? $this->getConfirmation()
            : $this->getConfirmation()?->toJson();
    }

    public function hasConfirmConfiguration(): bool
    {
        return $this->confirmation !== null;
    }
}
