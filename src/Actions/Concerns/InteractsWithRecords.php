<?php

namespace Luilliarcec\Components\Actions\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait InteractsWithRecords
{
    protected Model|Collection|null $record = null;

    public function record(Model|Collection|null $record): static
    {
        $this->record = $record;

        return $this;
    }

    public function getRecord(): Model|Collection|null
    {
        return $this->record;
    }
}
