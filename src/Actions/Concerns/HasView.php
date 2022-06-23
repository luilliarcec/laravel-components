<?php

namespace Luilliarcec\Components\Actions\Concerns;

trait HasView
{
    public function view(string $view): static
    {
        $this->view = $view;

        return $this;
    }

    public function getView(): string
    {
        return $this->view;
    }
}
