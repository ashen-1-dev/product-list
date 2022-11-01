<?php

namespace App\Http\Dto\product;

use Spatie\LaravelData\Attributes\Validation\IntegerType;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;
use Symfony\Contracts\Service\Attribute\Required;

class CreateProductDto extends Data
{
    public function __construct(
        #[StringType, Required]
        public string $name,
        #[StringType, Required]
        public string $unit,
        #[Required]
        public float $price,
        #[IntegerType, Required]
        public int $amount,
    )
    {}
}
