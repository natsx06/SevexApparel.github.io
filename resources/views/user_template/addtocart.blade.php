@extends('user_template.layouts.template')
@section('main-content')
<div class="container" style="margin-bottom: 170px"></div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="container" id="addtocart">
        <div class="row">
            <div class="col-12">
                <div class="box_main">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($cart_items as $item)
                                <tr>
                                    @php
                                        $product_name = App\Models\Product::where('id', $item->product_id)->value('product_name');
                                        $img = App\Models\Product::where('id', $item->product_id)->value('product_img');
                                    @endphp
                                    <td><img src="{{ asset($img) }}" alt="" width="120px"></td>
                                    <td>{{ $product_name }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>Rp.{{ $item->price }}</td>
                                    <td>
                                        <div class="main-border-button"><a class="btn btn-dark" href="{{ route('removecartitem', $item->id) }}">Remove</a>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                    $total = $total + $item->price;
                                @endphp
                            @endforeach
                            @if ($total > 0)
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Total</td>
                                <td>Rp.{{ $total }}</td>
                                <td>
                                    <div class="main-border-button"><a class="btn btn-dark" href="{{ route('shippingaddress') }}">Checkout</a>
                                    </div>
                                </td>
                            </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
