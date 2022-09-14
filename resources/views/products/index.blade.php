@extends('products.layouts')
@section('content')
<h1>Product Page</h1>
<a href='products/create' class="btn btn-success">Add New Product</a>
<table class="table">
<thead>
    <tr>
        <td>Item</td>
        <td>Product Name</td>
        <td>Detail</td>
        <td>Price</td>
        <td>Action</td>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
<td>{{ $product->id }}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->detail }}</td>
<td>{{ $product->price }}</td>
<td>
    <button class="btn btn-secondary">Show</butoon>
    <button class="btn btn-warning">Edit</button>
    <button class="btn btn-danger">Delete</button>
</td>
</tr>
@endforeach
</tbody>
</table>
{!! $products->links() !!}
@endsection
