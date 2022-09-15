@extends('pos.layouts')
@section('content')
<h2>POS Status Workflow </h2>
<table class="table">
    <thead>
        <tr>
            <td>#</td>
            <td>Item</td>
            <td>Customer</td>
            <td>Order</td>
            <td>Payment</td>
            <td>Transport</td>
            <td>Action</td>
</tr>
</thead>
@foreach($poss as $pos)
<tr>
<td><input type="checkbox"></td>
            <td>{{ $pos->id }}</td>
            <td>{{ $pos->customer_name }}</td>
            <td>{{ $pos->date }}</td>
            <td> @if($pos->status  == '1' ) complete @else Not @endif</td>
            <td>{{ $pos->status }}</td>
            <td><button class="btn btn-warning">Show</button></td>
</tr>
@endforeach
</table>
@endsection