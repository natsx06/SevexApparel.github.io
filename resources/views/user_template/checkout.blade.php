@extends('user_template.layouts.template')
@section('main-content')
<div class="container" style="margin-bottom: 170px"></div>
    <div class="container" id="addtocart">
        <div class="row">
            <div class="col-lg-6">
                <div class="box_main">
                    <h4>Product Will Send At</h4><br>
                    <p>Address- {{ $shipping_address->complete_address }}</p><br>
                    <p>Postal Code- {{ $shipping_address->postal_code }}</p><br>
                    <p>Phone Number- {{ $shipping_address->phone_number }}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="box_main">
                    <h4>Your Final Product Are</h4>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($cart_items as $item)
                                <tr>
                                    @php
                                        $product_name = App\Models\Product::where('id', $item->product_id)->value('product_name');
                                    @endphp
                                    <td>{{ $product_name }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->price }}</td>
                                </tr>
                                @php
                                    $total = $total + $item->price;
                                @endphp
                            @endforeach
                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td>Rp.{{ $total }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tombol">
                    <form action="" method="POST">
                        @csrf
                        <div class="main-border-button" ><div class="p"><input class="btn btn-dark" type="submit" value="Cancel Order"></div></div>
                    </form>
        
                    <form action="{{ route('placeorder') }}" method="POST">
                        @csrf
                        <div class="main-border-button" ><div class="p"><input class="btn btn-dark mr-2" type="submit" value="Place Order"></div></div>
                    </form>
                </div>
                </div>
            </div>


        </div>
    </div>
@endsection