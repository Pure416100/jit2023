<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Contact</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <div class="header_section background_bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                    </div>
                    <div class="col-md-9">
                        <div class="menu_text">
                            <ul>
                                <div class="togle_3">
                                    @if (Route::has('login'))
                                    <div class="menu_main">

                                        <div class="padding_left0">
                                            @auth
                                            <a href="{{ url('/') }}">Home</a>
                                            @else
                                            <a href="{{ route('login') }}">Login</a>

                                            <span class="padding_left0"></span> @if (Route::has('register'))<a href="{{ route('register') }}">Register</a>@endif
                                            @endauth
                                        </div>



                                    </div>
                                    @endif
                                    <div class="shoping_bag"><img src="images/search-icon.png"></div>
                                </div>
                                <div id="myNav" class="overlay">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <div class="overlay-content">
                                        <a href="{{ url('/') }}">Home</a>
                                        <a href="{{ url('services') }}">Services</a>
                                        <a href="{{ url('about') }}">About</a>
                                        <a href="{{ url('choose') }}">Choose</a>
                                        <a href="{{ url('team') }}">Team</a>
                                        <a href="{{ url('contact') }}">Contact Us</a>
                                    </div>
                                </div>
                                <span class="navbar-toggler-icon"></span>
                                <span onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function() {

                    $(this).addClass('transition');
                }, function() {

                    $(this).removeClass('transition');
                });
            });
        </script>
        <script>
            function openNav() {
                document.getElementById("myNav").style.width = "100%";
            }

            function closeNav() {
                document.getElementById("myNav").style.width = "0%";
            }
        </script>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>