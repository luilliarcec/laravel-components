<?php

namespace Luilliarcec\Components\Actions\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait InteractsWithRecords
{
    protected ?Model $record = null;
    protected ?Collection $records = null;

    public function records(Collection $records): static
    {
        $this->records = $records;

        return $this;
    }

    public function getRecords(): ?Collection
    {
        return $this->records;
    }

    public function record(Model $record): static
    {
        $this->record = $record;

        return $this;
    }

    public function getRecord(): Model|Collection|null
    {
        return $this->record;
    }
}
