@extends('user_template.layouts.user_profile_template')
@section('profilecontent')
@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="container" id="order">
<table class="table">
    <tr>
        <th>Product Id</th>
        <th>Price</th>
    </tr>
@foreach ($orders as $order)
    <tr>
        <td>{{ $order->product_id }}</td>
        <td>Rp.{{ $order->total_price }}</td>
    </tr>
@endforeach
</table>
</div>
@endsection