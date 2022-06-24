<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="{{ config('static.Home') }}/assets/images/logo/mylogo.ico"  rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="{{ config('static.Home') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config('static.Home') }}/assets/css/all.css">
    <link rel="stylesheet" href="{{ config('static.Home') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ config('static.Home') }}/assets/css/slick-menu.css">
    <link rel="stylesheet" href="{{ config('static.Home') }}/assets/css/default.css">
    <link rel="stylesheet" href="{{ config('static.Home') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ config('static.Home') }}/assets/css/responsive.css">
</head>
<body>

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3">
                <div class="logo">
                    <a href="{{ route("home.index") }}">
                        <img src="{{ config('static.Home') }}/assets/images/logo/mylogo2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-10">
                <div class="main-menu">
                    <nav>
                        <ul id="mobile-menu">
                            <li class="@yield("first")">
                                <a href="{{ route("home.index") }}">
                                    首页
                                    <i class="@yield("arrow-class01")">
                                    </i>
                                </a>
                            </li>
                            <li class="@yield("second")">
                                <a href="{{ route("home.recommend") }}">
                                    推荐
                                    <i class="@yield("arrow-class02")">
                                    </i>
                                </a>
                            </li>
                            <li class="@yield("third")">
                                <a href="{{ route("home.about") }}">
                                    关于我们
                                    <i class="@yield("arrow-class03")">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route("admin.index") }}">
                                    进入后台
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrapp">
            </div>
        </div>
    </div>
</header>
@yield("content")
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                    @csrf
                    {{ css1() }}
                    <div name="StudentName" id="StudentName">
                        Copyright © 2022 All rights reserved.
                    </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</footer>
<a id="button"><i class="fa fa-arrow-up"></i></a>
<script src="{{ config('static.Home') }}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="{{ config('static.Home') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{ config('static.Home') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ config('static.Home') }}/assets/js/popper.min.js"></script>
<script src="{{ config('static.Home') }}/assets/js/slick.min.js"></script>
<script src="{{ config('static.Home') }}/assets/js/slick-menu.min.js"></script>
<script src="{{ config('static.Home') }}/assets/js/jquery.counterup.min.js"></script>
<script src="{{ config('static.Home') }}/assets/js/waypoints.min.js"></script>
<script src="{{ config('static.Home') }}/assets/js/main.js"></script>
<script src="{{ config('static.Home') }}/assets/js/rocket-loader.min.js" data-cf-settings="bbb5393e669076e3bf666012-|49" defer=""></script>
</body>
</html>
