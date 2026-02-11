<?php

declare(strict_types=1);

namespace Vigihdev\Shared\Contract\Able;

interface JsonAbleInterface
{
    public function toJson(): string;
}
