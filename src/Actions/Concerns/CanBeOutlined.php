<?php

namespace Luilliarcec\Components\Actions\Concerns;

trait CanBeOutlined
{
    protected bool $isOutlined = false;

    public function outlined(bool $condition = true): static
    {
        $this->isOutlined = $condition;

        return $this;
    }

    public function isOutlined(): bool
    {
        return $this->isOutlined;
    }
}
