<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/images/logo.png" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/core.min.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900">


    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
</head>
<body>
    <div class="preloader">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
        <p>Loading...</p>
      </div>
    </div>
    <div id="app" class="page">
        <header class="page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar_corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-stick-up-clone="false" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true" data-md-stick-up-offset="60px" data-lg-stick-up-offset="145px" data-xl-stick-up-offset="145px" data-xxl-stick-up-offset="145px" data-body-class="rd-navbar-corporate-linked">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand rd-navbar-static--hidden"><a class="brand-name" href="index.html/"><img src="images/logo.png" alt="" width="157" height="21"/></a></div>
                </div>
                <!-- RD Navbar Top Panel-->
                <div class="rd-navbar-top-panel rd-navbar-top-panel_extended">
                <div class="rd-navbar-top-panel__main">
                    <div class="rd-navbar-top-panel__toggle rd-navbar-fixed__element-1 rd-navbar-static--hidden" data-rd-navbar-toggle=".rd-navbar-top-panel__main"><span></span></div>
                    <div class="rd-navbar-top-panel__content">
                    <div class="rd-navbar-top-panel__content-top">
                        <div class="rd-navbar-top-panel__left">
                        <p>We help clients with websites and eCommerce</p>
                        </div>
                        <div class="rd-navbar-top-panel__right">
                        <ul class="rd-navbar-items-list">
                            <li>
                            <ul class="list-inline-xxs">
                                <li><a class="icon icon-xxs icon-primary fa fa-facebook" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-primary fa fa-twitter" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-primary fa fa-google-plus" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-primary fa fa-vimeo" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-primary fa fa-youtube" href="#"></a></li>
                                <li><a class="icon icon-xxs icon-primary fa fa-pinterest-p" href="#"></a></li>
                            </ul>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <div class="rd-navbar-top-panel__content-bottom rd-navbar-content_middle rd-navbar-content_justify">
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand rd-navbar-fixed--hidden"><a class="brand-name" href="index.html"><img src="images/logo.png" alt="Logo"/></a></div>
                        <ul class="list-bordered">
                        <li>
                            <div class="unit flex-row align-items-center unit-spacing-sm">
                            <div class="unit-left"><span class="icon icon-md icon-primary linear-icon-map-marker"></span></div>
                            <div class="unit-body">
                                <dl class="list-terms-modern">
                                <dt>Address</dt>
                                <dd><a href="#">31F West Tower, Lotte Center Hanoi</a></dd>
                                </dl>
                            </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit flex-row align-items-center unit-spacing-sm">
                            <div class="unit-left"><span class="icon icon-md icon-primary linear-icon-telephone"></span></div>
                            <div class="unit-body">
                                <dl class="list-terms-modern">
                                <dt>Phones</dt>
                                <dd>
                                    <ul class="list-semicolon">
                                    <li><a href="tel:#">+84 24 3333 6629</a></li>
                                    <li><a href="tel:#">+84 90 614 7557</a></li>
                                    </ul>
                                </dd>
                                </dl>
                            </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit flex-row align-items-center unit-spacing-sm">
                            <div class="unit-left"><span class="icon icon-md icon-primary linear-icon-clock3"></span></div>
                            <div class="unit-body">
                                <dl class="list-terms-modern">
                                <dt>We are open</dt>
                                <dd>Mn-Fr: 8 am-6 pm</dd>
                                </dl>
                            </div>
                            </div>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="rd-navbar-bottom-panel rd-navbar-search-wrap">
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-wrap rd-navbar-search_not-collapsable">
                    <ul class="rd-navbar-items-list rd-navbar-search_collapsable">
                    <li>
                        <button class="rd-navbar-search__toggle rd-navbar-fixed--hidden" data-rd-navbar-toggle=".rd-navbar-search-wrap"></button>
                    </li>
                    
                    </ul>
                    <!-- RD Search-->
                    <div class="rd-navbar-search rd-navbar-search_toggled rd-navbar-search_not-collapsable">
                    <form class="rd-search" action="search-results.html" method="GET" data-search-live="rd-search-results-live">
                        <div class="form-wrap">
                        <input class="form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                        <label class="form-label" for="rd-navbar-search-form-input">Enter keyword</label>
                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                        </div>
                        <button class="rd-search__submit" type="submit"></button>
                    </form>
                    <div class="rd-navbar-fixed--hidden">
                        <button class="rd-navbar-search__toggle" data-custom-toggle=".rd-navbar-search-wrap" data-custom-toggle-disable-on-blur="true"></button>
                    </div>
                    </div>
                    <div class="rd-navbar-search_collapsable">
                    <ul class="rd-navbar-nav">
                        <li class="active"><a href="#home">Home</a>
                        </li>
                        <li><a href="#about">About Us</a>
                        </li>
                        <li><a href="#services">Services</a>
                        </li>
                        <li><a href="#portfolio">Portfolio</a>
                        </li>
                        <li><a href="#our-team">Our team</a>
                        </li>

                        </li>
                        <li><a href="#testimonials">Testimonials</a>
                        </li>
                        <li><a href="#contacts">Contacts</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </nav>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="footer-modern">
            <div class="container">
            <div class="footer-modern__layer footer-modern__layer_top">
                <a class="brand" href="index.html"><img src="images/logo.png" alt="Logo"/></a>
                <ul class="list-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
                </ul>
                <ul class="list-inline-xxs footer-modern__list">
                <li><a class="icon icon-xxs icon-primary fa fa-facebook" href="#"></a></li>
                <li><a class="icon icon-xxs icon-primary fa fa-twitter" href="#"></a></li>
                <li><a class="icon icon-xxs icon-primary fa fa-google-plus" href="#"></a></li>
                <li><a class="icon icon-xxs icon-primary fa fa-vimeo" href="#"></a></li>
                <li><a class="icon icon-xxs icon-primary fa fa-youtube" href="#"></a></li>
                <li><a class="icon icon-xxs icon-primary fa fa-pinterest" href="#"></a></li>
                </ul>
            </div>
            <div class="footer-modern__layer footer-modern__layer_bottom">
                <p class="rights"><span>LDCC-Agency</span><span>&nbsp;&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved.</p>
                <ul class="list-bordered">
                <li>
                    <dl class="list-terms-minimal">
                    <dt>Address</dt>
                    <dd>31F West Tower, Lotte Center Hanoi</dd>
                    </dl>
                </li>
                <li>
                    <dl class="list-terms-minimal">
                    <dt>Phones</dt>
                    <dd>
                        <ul class="list-semicolon">
                        <li><a href="tel:#">+84 24 3333 6629 </a></li>
                        <li><a href="tel:#">+84 90 614 7557</a></li>
                        </ul>
                    </dd>
                    </dl>
                </li>
                <li>
                    <dl class="list-terms-minimal">
                    <dt>E-mail</dt>
                    <dd><a href="mailto:#">info@ldcc.vn</a></dd>
                    </dl>
                </li>
                </ul>
            </div>
            </div>
        </footer>
    </div>
</body>
</html>
