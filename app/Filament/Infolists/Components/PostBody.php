<?php

namespace App\Filament\Infolists\Components;

use Closure;
use Filament\Infolists\Components\Entry;

class PostBody extends Entry
{
    protected string $view = 'filament.app.infolists.components.post-body';

    protected int|Closure|null $maxLength = 20;

    public function maxLength(int|Closure|null $maxLength): static
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    public function getMaxLength(): ?int
    {
        return $this->evaluate($this->maxLength);
    }
}
