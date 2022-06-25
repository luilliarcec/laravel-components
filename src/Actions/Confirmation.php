<?php

namespace Luilliarcec\Components\Actions;

use Illuminate\Contracts\Support\Jsonable;

class Confirmation implements Jsonable
{
    protected ?string $method = 'get';
    protected ?string $title = null;
    protected ?string $description = null;
    protected ?string $url = null;

    public function method(string $method = 'get'): static
    {
        $this->method = $method;

        return $this;
    }

    public function title(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function description(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function url(?string $url): static
    {
        $this->url = $url;

        return $this;
    }

    protected function getArrayableConfiguration(): array
    {
        $configuration = [];

        if ($this->method !== null) {
            $configuration['method'] = $this->method;
        }

        if ($this->title !== null) {
            $configuration['title'] = $this->title;
        }

        if ($this->description !== null) {
            $configuration['description'] = $this->description;
        }

        if ($this->url !== null) {
            $configuration['url'] = $this->url;
        }

        return $configuration;
    }

    public function toJson($options = 0): string
    {
        $json = json_encode($this->getArrayableConfiguration(), JSON_UNESCAPED_SLASHES | $options);

        return str_replace(
            [
                '"{{ ',
                ' }}"',
            ],
            '',
            $json,
        );
    }
}
