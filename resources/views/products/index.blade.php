@extends('layouts.app')

@section('title', 'My Product List')

@section('content')
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>{{ $product['stock'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection