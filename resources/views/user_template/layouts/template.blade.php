@php
    $categories = App\Models\Category::latest()->get();
@endphp

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sevex Apparel</title>

    <link rel="shortcut icon" href="{{ asset('home/assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="    {{ asset('home/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="    {{ asset('home/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="    {{ asset('home/assets/css/templatemo-hexashop.css') }}">
    <link rel="stylesheet" href="    {{ asset('home/assets/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="    {{ asset('home/assets/css/lightbox.css') }}">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('Home') }}" class="logo">
                            <img src="{{ asset('home/assets/images/logo.png') }}" width="125px">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('Home') }}">Home</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Category</a>
                                <ul>
                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('category', [$category->id, $category->slug]) }}">{{ $category->category_name }}</a>
                                    </li>
                                @endforeach
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#products">Product</a></li>
                            <li class="scroll-to-section"><a href="{{ route('about') }}">About</a></li>
                            <li class="scroll-to-section"><a href="{{ route('customerservice') }}">Contact</a></li>
                            </li>
                            <li class="scroll-to-section"><a href=""><i class="fa-solid fa-magnifying-glass fa-bounce"></i></a></li>
                            <li class="scroll-to-section"><a href="{{ route('addtocart') }}"><i class="fa-brands fa-opencart fa-bounce"></i></a></li>
                            <li class="scroll-to-section"><a href="{{ route('userprofile') }}"><i class="fa-regular fa-user fa-bounce"></i></a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div>
        @yield('main-content')
    </div>
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <a href="{{ route('Home') }}">
                                <img src="    {{ asset('home/assets/images/white-logo.png') }}" alt="" width="245px"></a>
                        </div>
                        <ul>
                            <li><a href="https://www.google.com/maps/place/Wisma+Griya+Sabha+Dpr+Ri/@-6.6664681,106.923046,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69b62d6daa6f11:0xff61d6fa4cc6efe4!8m2!3d-6.6664681!4d106.923046!16s%2Fg%2F11btz3cgmm?entry=ttu">Jl. Raya Puncak - Cianjur No.477, Kopo, Kec. Cisarua, Kabupaten Bogor,
                                    Jawa Barat, Indonesia 16750</a></li>
                            <li><a href="https://mail.google.com/mail/natsx0606@gmail.com">sevexcompany@gmail.com</a></li>
                            <li><a href="https://wa.me/+62895336164328">+62-895-3361-64328</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Collection</a></li>
                        <li><a href="#">Women’s Collection</a></li>
                        <li><a href="#">Kid’s Collection</a></li>
                        <li><a href="#">Couple's Collection</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <ul>
                            <li><a href="https://wa.me/+62895336164328"><i class="fa-brands fa-whatsapp fa-bounce"></i></a></li>
                            <li><a href="https://www.instagram.com/___natsx/?igshid=YTgybWtqcGlldGxr"><i class="fa-brands fa-instagram fa-bounce"></i></a></li>
                            <li><a href="https://www.tiktok.com/@natsx7?lang=en"><i class="fa-brands fa-tiktok fa-bounce"></i></a></li>
                            <li><a href="https://id.pinterest.com/natsx0606/"><i class="fa-brands fa-pinterest fa-bounce"></i></a></li>
                        </ul>
                        <p>Copyright © 2023 Sevex E-Commerce
                            <br>Design By: <a href="https://www.instagram.com/___natsx/?igshid=YTgybWtqcGlldGxr"
                                target="_blank" title="free css templates">Natsx</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="    {{ asset('home/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="    {{ asset('home/assets/js/popper.js') }}"></script>
    <script src="    {{ asset('home/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="    {{ asset('home/assets/js/owl-carousel.js') }}"></script>
    <script src="    {{ asset('home/assets/js/accordions.js') }}"></script>
    <script src="    {{ asset('home/assets/js/datepicker.js') }}"></script>
    <script src="    {{ asset('home/assets/js/scrollreveal.min.js') }}"></script>
    <script src="    {{ asset('home/assets/js/waypoints.min.js') }}"></script>
    <script src="    {{ asset('home/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="    {{ asset('home/assets/js/imgfix.min.js') }}"></script> 
    <script src="    {{ asset('home/assets/js/slick.js') }}"></script> 
    <script src="    {{ asset('home/assets/js/lightbox.js') }}"></script> 
    <script src="    {{ asset('home/assets/js/isotope.js') }}"></script> 
    
    <!-- Global Init -->
    <script src="    {{ asset('home/assets/js/custom.js') }}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>