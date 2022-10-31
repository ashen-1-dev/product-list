@extends('layouts.app')

@section('content')
    <div class="container-sm">
        <form method="post" action="{{route('products.update', ['product' => $product->id])}}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Наименование продукции</label>
                <input type="text" value="{{$product->name}}"  class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Цена</label>
                <input type="number" value="{{$product->price}}" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Количество</label>
                <input type="number" value="{{$product->amount}}" class="form-control" id="amount" name="amount">
            </div>
            <div class="mb-3">
                <label for="unit" class="form-label">Единицы измерения</label>
                <input type="text" value="{{$product->unit}}" class="form-control" id="unit" name="unit">
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>
@endsection
