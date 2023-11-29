@extends('user_template.layouts.template')
@section('main-content')
    <div class="container" style="margin-bottom: 170px"></div>
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                        <img src="{{ asset($product->product_img) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>{{ $product->product_name }}</h4>
                        <span class="price">Rp.{{ $product->price }}</span>
                        <ul class="about">
                            <li>Category : {{ $product->product_category_name }}</li>
                            <li>Sub Category : {{ $product->product_subcategory_name }}</li>
                            <li>Quantity : {{ $product->quantity }}</li>
                        </ul>
                        <ul class="stars">
                            <i class="fa-solid fa-star fa-flip"></i>
                            <i class="fa-solid fa-star fa-flip"></i>
                            <i class="fa-solid fa-star fa-flip"></i>
                            <i class="fa-solid fa-star fa-flip"></i>
                            <i class="fa-solid fa-star fa-flip"></i>
                        </ul>
                        <span>{{ $product->product_short_desc }}</span>
                        <div class="quote">
                            <i class="fa-solid fa-quote-left fa-bounce"></i>
                            <p>{{ $product->product_long_desc }}</p>
                        </div>
                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>No. of Orders</h6>
                            </div>
                            <div class="right-content">
                                <form action="{{ route('addproducttocart', $product->id) }}" method="POST">
                                    @csrf
                                <div class="quantity buttons_added">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="number" min="1" name="quantity" class="input-text qty text" size="4" pattern="" inputmode="" placeholder="1" value="">
                                </div>
                            </div>
                        </div>
                        <div class="total">
                            <h4>Total: {{ $product->price }}</h4>
                            <div class="main-border-button"><input class="btn btn-light" type="submit" value="Add To Cart"></div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="  padding-top: 90px;
    padding-bottom: 90px;"></div>
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Related Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($related_product as $product)
            <div class="col-lg-4">
                <div class="item">
                    <div class="thumb">
                        <div class="hover-content">
                            <ul>
                                <li><a href="{{ route('singleproduct', [$product->id, $product->slug]) }}"><i class="fa-regular fa-eye fa-bounce"></i></a></li>
                                <li><a href=""><i class="fa-regular fa-star fa-bounce"></i></a></li>
                                <li><a href=""><i class="fa-brands fa-opencart fa-bounce"></i></a></li>
                            </ul>
                        </div>
                        <img src="{{ asset($product->product_img) }}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>{{ $product->product_name }}</h4>
                        <span>Rp.{{ $product->price }}</span>
                        <ul class="stars">
                            <i class="fa-solid fa-star fa-flip"></i>
                            <i class="fa-solid fa-star fa-flip"></i>
                            <i class="fa-solid fa-star fa-flip"></i>
                            <i class="fa-solid fa-star fa-flip"></i>
                            <i class="fa-solid fa-star fa-flip"></i>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection