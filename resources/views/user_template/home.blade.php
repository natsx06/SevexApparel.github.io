@extends('user_template.layouts.template')
@section('main-content')
<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <div class="thumb">
                        <div class="inner-content">
                            <h4>Sevex Apparel</h4>
                            <span>Awesome, update &amp; fashionable clothing brand</span>
                            <div class="main-border-button">
                                <a href="#">Purchase Now!</a>
                            </div>
                        </div>
                        <img src="{{ asset('home/assets/images/left-banner-image.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Women</h4>
                                        <span>Best Clothes For Women</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Women</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('home/assets/images/baner-right-image-01.jpg') }}" class="first">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Men</h4>
                                        <span>Best Clothes For Men</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Men</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('home/assets/images/baner-right-image-02.jpg') }}" class="second">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Kids</h4>
                                        <span>Best Clothes For Kids</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Kids</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('home/assets/images/baner-right-image-03.jpg') }}" class="third">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-first-image">
                                <div class="thumb">
                                    <div class="inner-content">
                                        <h4>Accessories</h4>
                                        <span>Best Trend Accessories</span>
                                    </div>
                                    <div class="hover-content">
                                        <div class="inner">
                                            <h4>Accessories</h4>
                                            <p>Lorem ipsum dolor sit amet, conservisii ctetur adipiscing elit incid.</p>
                                            <div class="main-border-button">
                                                <a href="#">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ asset('home/assets/images/baner-right-image-04.jpg') }}" class="fourth">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Men Area Starts ***** -->
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Men's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="men-item-carousel">
                    <div class="owl-men-item owl-carousel">
                        @foreach ($allproduct as $product)
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{ route('singleproduct', [$product->id, $product->slug]) }}"><i class="fa-regular fa-eye fa-bounce"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa-regular fa-star fa-bounce"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa-brands fa-opencart fa-bounce"></i></a></li>
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Men Area Ends ***** -->

<!-- ***** Women Area Starts ***** -->
<section class="section" id="women">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Women's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="women-item-carousel">
                    <div class="owl-women-item owl-carousel">
                        @foreach ($allproduct as $product)
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{ route('singleproduct', [$product->id, $product->slug]) }}"><i class="fa-regular fa-eye fa-bounce"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa-regular fa-star fa-bounce"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa-brands fa-opencart fa-bounce"></i></a></li>
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Women Area Ends ***** -->

<!-- ***** Kids Area Starts ***** -->
<section class="section" id="kids">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Kid's Latest</h2>
                    <span>Details to details is what makes Hexashop different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kid-item-carousel">
                    <div class="owl-kid-item owl-carousel">
                        @foreach ($allproduct as $product)
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="{{ route('singleproduct', [$product->id, $product->slug]) }}"><i class="fa-regular fa-eye fa-bounce"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa-regular fa-star fa-bounce"></i></a></li>
                                        <li><a href="single-product.html"><i class="fa-brands fa-opencart fa-bounce"></i></a></li>
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
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Kids Area Ends ***** -->



<!-- ***** Explore Area Starts ***** -->
<section class="section" id="explore">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-content">
                    <h2>Explore Our Products</h2>
                    <span>You are allowed to use this HexaShop HTML CSS template. You can feel free to modify or edit this layout. You can convert this template as any kind of ecommerce CMS theme as you wish.</span>
                    <div class="quote">
                        <i class="fa-solid fa-quote-left fa-bounce"></i><p>You are not allowed to redistribute this template ZIP file on any other website.</p>
                    </div>
                    <p>There are 5 pages included in this HexaShop Template and we are providing it to you for absolutely free of charge at our TemplateMo website. There are web development costs for us.</p>
                    <p>If this template is beneficial for your website or business, please kindly <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p>
                    <div class="main-border-button">
                        <a href="products.html">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="leather">
                                <h4>Leather Bags</h4>
                                <span>Latest Collection</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="first-image">
                                <img src="{{ asset('home/assets/images/explore-image-01.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="second-image">
                                <img src="{{ asset('home/assets/images/explore-image-02.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="types">
                                <h4>Different Types</h4>
                                <span>Over 304 Products</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Explore Area Ends ***** -->

<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>All Products</h2>
                    <span>Check out all of our products.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($allproduct as $product)
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

<!-- ***** Social Area Starts ***** -->
<section class="section" id="social">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Social Media</h2>
                    <span>Details to details is what makes Sevex Apparel different from the other themes.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row images">
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Men</h6>
                            <i class="fa-brands fa-instagram fa-bounce"></i>
                        </a>
                    </div>
                    <img src="{{ asset('home/assets/images/instagram-01.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Women</h6>
                            <i class="fa-brands fa-instagram fa-bounce"></i>
                        </a>
                    </div>
                    <img src="{{ asset('home/assets/images/instagram-02.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Couple</h6>
                            <i class="fa-brands fa-instagram fa-bounce"></i>
                        </a>
                    </div>
                    <img src="{{ asset('home/assets/images/instagram-03.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Kids</h6>
                            <i class="fa-brands fa-instagram fa-bounce"></i>
                        </a>
                    </div>
                    <img src="{{ asset('home/assets/images/instagram-04.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>Accesories</h6>
                            <i class="fa-brands fa-instagram fa-bounce"></i>
                        </a>
                    </div>
                    <img src="{{ asset('home/assets/images/instagram-05.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-2">
                <div class="thumb">
                    <div class="icon">
                        <a href="http://instagram.com">
                            <h6>New</h6>
                            <i class="fa-brands fa-instagram fa-bounce"></i>
                        </a>
                    </div>
                    <img src="{{ asset('home/assets/images/instagram-06.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Social Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                    <span>Details to details is what makes Sevex Apparel different from the other themes.</span>
                </div>
                <form id="subscribe" action="" method="get">
                    <div class="row">
                      <div class="col-lg-5">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="Your Name" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-5">
                        <fieldset>
                          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-2">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-dark-button"><i class="fa-solid fa-paper-plane fa-shake"></i></button>
                        </fieldset>
                      </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li><i class="fa-solid fa-location-dot fa-bounce"></i> Store Location:<br><span>Jl. Raya Puncak - Cianjur No.477, Kopo, Kec. Cisarua, Kabupaten Bogor, Jawa Barat, Indonesia 16750</span></li>
                            <li><i class="fa-solid fa-phone fa-shake"></i> Phone:<br><span>+62-895-3361-64328</span></li>
                            <li><i class="fa-solid fa-location-arrow fa-bounce"></i> Office Location:<br><span>Wisma Griya Sabha</span></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><i class="fa-solid fa-clock fa-spin-pulse"></i> Work Hours:<br><span>08:00 AM - 11:00 PM Daily</span></li>
                            <li><i class="fa-solid fa-envelope fa-shake"></i> Email:<br><span>sevexcompany@gmail.com</span></li>
                            <li><i class="fa-solid fa-share-from-square fa-bounce"></i> Social Media:<br><span><a href="#">WhatsApp</a>, <a href="#">Instagram</a>, <a href="#">Tiktok</a>, <a href="#">Pinterest</a></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

