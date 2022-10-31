@extends('layouts.app')

@section('content')
    <div class="container-sm">
        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">Наименование продукции</th>
                <th scope="col">Кол-во продукции на складе</th>
                <th scope="col">Цена продукции в рублях</th>
                <th scope="col">Единица измерения</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->amount}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->unit}}</td>
                        <td>
                            <form method="post" action="{{route('products.destroy', ['product' => $product->id])}}" >
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger" type="submit">Удалить</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{route('products.edit', ['product' => $product->id])}}" class="btn btn-sm btn-warning" type="submit">Изменить</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('products.create')}}" class="btn btn-primary">
            Создать
        </a>
    </div>
@endsection
