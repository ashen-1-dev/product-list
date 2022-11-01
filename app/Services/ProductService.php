<?php

namespace App\Services;

use App\Http\Dto\product\GetProductDto;
use App\Http\Dto\product\CreateProductDto;
use App\Models\Product;

class ProductService
{
    /** @return GetProductDto[] */
    public function getProducts()
    {
        return Product::all()->map(fn ($x) => GetProductDto::from($x));
    }

    public function getProduct($id): GetProductDto {
        return GetProductDto::from(Product::findOrFail($id));
    }

    public function editProduct($id, CreateProductDto $createProductDto): GetProductDto
    {
        $product = Product::findOrFail($id);
        $product->update($createProductDto->toArray());
        return GetProductDto::from($product);
    }

    public function deleteProduct($id): void
    {
        Product::destroy($id);
    }

    public function createProduct(CreateProductDto $createProductDto): GetProductDto
    {
        $product =  Product::create($createProductDto->toArray());
        return GetProductDto::from($product);
    }

}
