<!doctype html>
<html>

<head>

    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Jitdee</title>
    <link rel="icon" type="image/x-icon" href="/images/logo1.1.png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-blue.css">
    
   <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
   
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet">
    
</head>

<body>
    <div id="app">
        <div class="header_section background_bg fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo"><a href="{{ url('/') }}"><img src="images/logo1.png" width="150" height="150"></a></div>
                    </div>
                    <div class="col-md-9">
                        <div class="menu_text">
                            <ul>
                                <div class="togle_3">
                                    @if (Route::has('login'))
                                    <div class="menu_main">

                                        <div class="padding_left0">
                                            @auth

                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('/') }}">หน้าแรก</a>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            @else

                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('login') }}">เข้าสู่ระบบ</a>

                                            <span class="padding_left0"></span> @if (Route::has('register'))<a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('register') }}">ลงทะเบียน</a>@endif
                                            @endauth
                                        </div>



                                    </div>
                                    @endif

                                </div>
                                <div id="myNav" class="overlay w3-hover-blue">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                                    <div class="overlay-content ">
                                        <div class="container">
                                            @auth
                                            <h3 class="w3-text-white">ยินดีตอนรับ</h3>
                                            <h3 class="w3-text-white"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                              </svg> {{ Auth::user()->name }}</h3>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('/profile') }}">ข้อมูลส่วนตัว</a>
                                            <hr>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('/') }}">หน้าแรก</a>

                                            <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('Menu_day') }}">บันทึกความรู้สึก</a>
                                            <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('services') }}">ประวัติบันทึกความรู้ศึก</a>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('certificate1') }}">รางวัลของฉัน</a>
                                            <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('about') }}">เกี่ยวกับ</a>

                                            <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('team') }}">ทีมผู้พัฒนา</a>
                                            <a class=" w3-btn w3-round-xlarge w3-hover-white" href="{{ url('contact') }}">ติดต่อสอบถาม</a>
                                            <hr>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">ออกจากระบบ</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            @else
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ url('/') }}">หน้าแรก</a>
                                            <a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                                            @if (Route::has('register'))<a class="w3-btn w3-round-xlarge w3-hover-white" href="{{ route('register') }}">ลงทะเบียน</a>@endif
                                            @endauth

                                        </div>
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