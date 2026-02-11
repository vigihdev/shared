<?php

declare(strict_types=1);

namespace Vigihdev\Shared\Dto\Vehicle;

use Vigihdev\Shared\Contract\Vehicle\VehiclePriceInterface;

final class VehiclePriceDto implements VehiclePriceInterface
{

    public function __construct(
        private readonly string $label,
        private readonly int $amount,
    ) {}

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     *
     * @return array<string,mixed>
     */
    public function toArray(): array
    {
        return [
            'label' => $this->label,
            'amount' => $this->amount,
        ];
    }
}
