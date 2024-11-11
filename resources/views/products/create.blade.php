@extends('layout')

@section('content')
    <h1>Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Product Name">
        <input type="text" name="price" placeholder="Price">
        <input type="text" name="quantity" placeholder="Quantity">
        <button type="submit">Add</button>
    </form>
@endsection
