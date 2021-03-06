<?php

namespace Luilliarcec\Components\Actions;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Traits;
use Illuminate\View\Component;

class Action extends Component implements Htmlable
{
    use Traits\Conditionable;
    use Traits\Macroable;
    use Traits\Tappable;
    use Concerns\InteractsWithRecords;
    use Concerns\EvaluatesClosures;
    use Concerns\CanRequireConfirmation;
    use Concerns\CanOpenUrl;
    use Concerns\CanBeHidden;
    use Concerns\CanBeDisabled;
    use Concerns\CanBeOutlined;
    use Concerns\HasView;
    use Concerns\HasName;
    use Concerns\HasLabel;
    use Concerns\HasColor;
    use Concerns\HasIcon;
    use Concerns\HasSize;
    use Concerns\HasTooltip;

    protected string $view = 'components::actions.link';

    public function button(): static
    {
        $this->view('components::actions.button');

        return $this;
    }

    public function link(): static
    {
        $this->view('components::actions.link');

        return $this;
    }

    public function iconButton(): static
    {
        $this->view('components::actions.icon-button');

        return $this;
    }

    final public function __construct(string $name)
    {
        $this->name($name);
    }

    public static function make(string $name): static
    {
        $static = app(static::class, ['name' => $name]);
        $static->setUp();

        return $static;
    }

    protected function setUp(): void
    {
    }

    public function toHtml(): string
    {
        return $this->render()->render();
    }

    public function render(): View
    {
        $data = array_merge($this->data(), [
            'action' => $this,
        ]);

        return view($this->getView(), $data);
    }
}
