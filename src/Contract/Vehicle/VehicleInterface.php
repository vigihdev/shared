<?php

declare(strict_types=1);

namespace Vigihdev\Shared\Contract\Vehicle;

use Vigihdev\Shared\Contract\Able\ArrayAbleInterface;
use Vigihdev\Shared\Dto\Vehicle\VehiclePriceDto;

interface VehicleInterface extends ArrayAbleInterface
{
    public function getBrand(): string;
    public function getImageUrl(): string;
    public function getModel(): string;
    public function getCategory(): string;

    /**
     *
     * @return VehiclePriceDto
     */
    public function getPrice(): VehiclePriceInterface;
}
