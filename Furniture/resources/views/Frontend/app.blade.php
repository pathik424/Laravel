<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Furniture</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('fassets/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('fassets/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('fassets/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('fassets/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('fassets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('fassets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fassets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="logo" href="index.html"><img src="{{ asset('fassets/images/logo.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="design.html">Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="Register">Register</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="Login">Login</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="logout">Logout</a>
                            </li>

                            <div class="px-4">
                                <div class="font-medium text-base text-gray-800"> Welcome {{ Auth::user()->firstname }}
                                </div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            </div>

                        @endguest

                    </ul>
                    @if (session('message'))
                        {{-- anathi jyare login karse tyare session 1 time vakhat success or failed option batavse // a connceted authcontroller jode che --}}
                        <div class="alert alert-danger" role="alert">
                            {{ session('message') }}


                        </div>
                    @endif
                    <form class="form-inline my-2 my-lg-0">
                        <div class="search_icon">
                            <ul>
                                <li><a href="#"><img src="{{ asset('fassets/images/search-icon.png') }}"></a>
                                </li>
                                <li><a href="#"><img src="{{ asset('fassets/images/user-icon.png') }}"></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
        </nav>
    </div>
    </div>
    <!-- header section end -->



    @yield('front')




    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section">
        <div class="container">
            <div class="footer_location_text">
                <ul>
                    <li><img src="{{ asset('fassets/images/map-icon.png') }}"><span class="padding_left_10"><a
                                href="#">Loram Ipusm hosting web</a></span></li>
                    <li><img src="{{ asset('fassets/images/call-icon.png') }}"><span class="padding_left_10"><a
                                href="#">Call : +7586656566</a></span></li>
                    <li><img src="{{ asset('fassets/images/mail-icon.png') }}"><span class="padding_left_10"><a
                                href="#">demo@gmail.com</a></span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">Useful link </h2>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="design.html">Our Designe</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">Repair</h2>
                    <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscinaliqua Loreadipiscing </p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">Social Media</h2>
                    <div id="social">
                        <a class="facebookBtn smGlobalBtn active" href="#"></a>
                        <a class="twitterBtn smGlobalBtn" href="#"></a>
                        <a class="googleplusBtn smGlobalBtn" href="#"></a>
                        <a class="linkedinBtn smGlobalBtn" href="#"></a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h1 class="useful_text">Our Repair center</h1>
                    <p class="footer_text">Lorem ipsum dolor sit amet, consectetur adipiscinaliquaLoreadipiscing </p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html
                    Templates</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{ asset('fassets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('fassets/js/popper.min.js') }}"></script>
    <script src="{{ asset('fassets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fassets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('fassets/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('fassets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('fassets/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('fassets/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>