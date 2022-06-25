<?php

namespace Luilliarcec\Components\Actions\Concerns;

use Closure;
use Luilliarcec\Components\Actions\Confirmation;

trait CanRequireConfirmation
{
    protected ?Closure $configureConfirmationUsing = null;

    public function confirmation(?Closure $configuration): static
    {
        $this->configureConfirmationUsing = $configuration;

        return $this;
    }

    public function getConfirmation(): ?Confirmation
    {
        if (!$this->hasConfirmConfiguration()) {
            return null;
        }

        return $this->evaluate($this->configureConfirmationUsing, [
            'confirmation' => app(Confirmation::class)->url($this->getUrl()),
        ]);
    }

    public function getJsonConfirmConfiguration(): ?string
    {
        return $this->getConfirmation()?->toJson();
    }

    public function hasConfirmConfiguration(): bool
    {
        return $this->configureConfirmationUsing !== null;
    }
}
