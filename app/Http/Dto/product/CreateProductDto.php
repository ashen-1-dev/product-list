<?php

namespace App\Http\Dto\product;

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
        #[StringType, Required]
        public int $price,
        #[StringType, Required]
        public int $amount,
    )
    {}
}
