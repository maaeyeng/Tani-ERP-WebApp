@extends('products.layouts')
@section('content')
<h1> Create Product</h1>
<form action="{{ route('products.store') }}" method='post'>
@csrf
   Product Name: <input type='text' name='name'>
   Product Detail: <input type='text' name='detail'>
   Product Price: <input type='text' name='price'>
   <input type='submit' value='Save'>
</form>
@endsection