<?php

namespace App\Http\Controllers;

use App\Http\Dto\product\CreateProductDto;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    private readonly ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getProducts();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $this->productService->createProduct(CreateProductDto::from($request));
        return redirect()->route('products.index');
    }


    public function edit($id)
    {
        $product = $this->productService->getProduct($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->productService->editProduct($id, CreateProductDto::from($request));
        return redirect()->route('products.index');
    }


    public function destroy($id)
    {
        $this->productService->deleteProduct($id);
        return back();
    }
}
