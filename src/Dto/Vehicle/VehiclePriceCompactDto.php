<?php

declare(strict_types=1);

namespace Vigihdev\Shared\Dto\Vehicle;

use Symfony\Component\Serializer\Attribute\SerializedName;
use Vigihdev\Shared\Contract\Vehicle\VehiclePriceCompactInterface;

final class VehiclePriceCompactDto implements VehiclePriceCompactInterface
{
    /**
     * @param VehiclePriceDto[] $priceList
     * @return void
     */
    public function __construct(
        private readonly string $brand,
        #[SerializedName('image_url')]
        private readonly string $imageUrl,
        private readonly string $model,
        private readonly string $category,
        #[SerializedName('price_list')]
        private readonly array $priceList,
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

    /**
     *
     * @return VehiclePriceDto[]
     */
    public function getPriceList(): array
    {
        return $this->priceList;
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
            'price_list' => array_map(fn(VehiclePriceDto $price) => $price->toArray(), $this->priceList),
        ];
    }
}
