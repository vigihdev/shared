<?php

declare(strict_types=1);

namespace Vigihdev\Shared\Contract\Vehicle;

use Vigihdev\Shared\Contract\Able\ArrayAbleInterface;

interface VehiclePriceCompactInterface extends ArrayAbleInterface
{
    public function getBrand(): string;
    public function getImageUrl(): string;
    public function getModel(): string;
    public function getCategory(): string;

    /**
     *
     * @return VehiclePriceDto[]
     */
    public function getPriceList(): array;
}
