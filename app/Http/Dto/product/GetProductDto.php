<?php

namespace App\Http\Dto\product;

use Spatie\LaravelData\Data;

class GetProductDto extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public string $unit,
        public float $price,
        public int $amount,
    )
    {}
}
