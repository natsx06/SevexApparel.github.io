@extends('user_template.layouts.template')
@section('main-content')
<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Sevex Apparel</h2>
                    <span>Awesome, update &amp; fashionable clothing brand</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="  padding-top: 90px;
padding-bottom: 90px;"></div>
<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>{{ $category->category_name }}</h2>
                    <span>Check out all of our products.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($product as $product)
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