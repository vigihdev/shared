<?php

declare(strict_types=1);

namespace Vigihdev\Shared\Dto\Vehicle;

use Symfony\Component\Serializer\Annotation\SerializedName;
use Vigihdev\Shared\Contract\Vehicle\{VehicleInterface, VehiclePriceInterface};

final class VehicleDto implements VehicleInterface
{

    /**
     * @param VehiclePriceDto $price
     * @return void
     */
    public function __construct(
        private readonly string $brand,
        #[SerializedName('image_url')]
        private readonly string $imageUrl,
        private readonly string $model,
        private readonly string $category,
        private readonly VehiclePriceInterface $price,
    ) {}

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getPrice(): VehiclePriceInterface
    {
        return $this->price;
    }


    /**
     *
     * @return array<string,mixed>
     */
    public function toArray(): array
    {
        return [
            'brand' => $this->brand,
            'image_url' => $this->imageUrl,
            'model' => $this->model,
            'category' => $this->category,
            'price' => $this->price->toArray(),
        ];
    }
}
