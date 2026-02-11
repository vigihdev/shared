<?php

declare(strict_types=1);

namespace Vigihdev\Shared\Contract\Vehicle;

use Vigihdev\Shared\Contract\Able\ArrayAbleInterface;

interface VehiclePriceInterface extends ArrayAbleInterface
{
    public function getLabel(): string;
    public function getAmount(): int;
}
