<!DOCTYPE html>
<html lang="en">

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

  
</head>

<body>
  <!--header section start -->
  <div class="header_section">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md-3">
          <div class="logo"><a href="{{ url('/') }}"><img src="images/logo1.png"></a></div>
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
                    <h1 class="w3-text-white">{{ Auth::user()->name }}</h1>
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
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <h1 class="banner_taital">Get to know</h1>
            <h1 class="banner_taital_1">your ideas best</h1>
            <p class="banner_text">Get rid of potential sensation problems.</p>
            <div class="contact_bt"><a href="{{ url('/Menu_day') }}">start <span class="contact_padding"><img src="images/contact-icon.png"></span></a></div>
          </div>
          <div class="col-sm-2">
            <div class="play_icon"><a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/play-icon.png"></a>
              <div class="dropdown">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <video width="820" height="540" controls>
                    <source src="myVideo.mp4" type="video/mp4">
                    <source src="myVideo.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                  </video>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <div><img src="images/1.png" class="image_1"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
  </div>
  <!-- header section end -->
  <!-- services section start -->
  <div class="services_section layout_padding">
    <div class="container">
      <h1 class="services_taital"><span>Our</span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Services</span></h1>
      <p class="services_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="services_section_2 layout_padding">
              <div class="row">
                <div class="col-md-6">
                  <div class="box_section active">
                    <div class="tiles_img"></div>
                    <h3 class="tile_text active">Tile & Grout</h3>
                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="box_section">
                    <div class="tiles_img_1"></div>
                    <h3 class="tile_text">Carpet Cleaning</h3>
                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa fa-angle-right"></i>
        </a>
      </div>
    </div>
  </div>
  <!-- services section start -->
  <!-- about section start -->
  <div class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div><img src="images/011.png" class="card bg-info" width="250" height="250"></div>
        </div>
        <div class="col-md-6">
          <h1 class="services_taital"><span>About </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">jitdee</span></h1>
          <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
          <div class="contact_bt_1"><a href="#">READ MORE<span class="contact_padding"><img src="images/contact-icon1.png"></span></a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- about section end -->
 
  <!-- team section start -->
  <div class="team_section layout_padding">
    <div class="container">
      <h1 class="choose_taital"><span>Our </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Team</span></h1>
      <p class="choose_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
      <div class="team_section_2 layout_padding">
        <div class="container">
          <div class="images_main_1">
            <div class="row">
            <div class="col-sm-5">
                  <div class="image_4"><img src="images/dev1.png" width="190" height="190"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="images/fb-icon.png"></a></li>
                      <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                      <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                      <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                    </ul>
                  </div>
                </div>
                
                <div class="col-sm-7">
                  <h2 class="consectetur_text">นาย ภควัต นาเจิมพลอย</h2>
                  <h2 class="consectetur_text">Mr.Pakawat Najermploy</h2>
                  <p class="dummy_text">สาขาวิชาเทคโนโลยีสารสนเทศ<span> คณะวิทยาการสารสนเทศ</span><span> มหาวิทยาลัยมหาสารคาม</span></p>
                  
                </div>
                
              </div><hr>
            </div>
          <div class="images_main">
            <div class="row">
              <div class="col-sm-7">
                <h2 class="consectetur_text_1">นายภูวนาท ประทุมวัน</h2>
                <h2 class="consectetur_text_1">Mr.Phuwanart Pratumwan</h2>
                <p class="dummy_text_1">สาขาวิชาเทคโนโลยีสารสนเทศ<span> คณะวิทยาการสารสนเทศ</span><span> มหาวิทยาลัยมหาสารคาม</span></p>
              </div>
              <div class="col-sm-5">
                <div class="image_4"><img src="images/dev2.png" width="190" height="190"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="images_main_1">
            <div class="row">
              <div class="col-sm-5">
                <div class="image_4"><img src="images/dev3.png" width="150" height="150"></div>
                <h6 class="follow_text">Follow Us</h6>
                <div class="follow_social_icon">
                  <ul>
                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-7">
                <h2 class="consectetur_text">นางสาว จุฑามาศ หาสุข</h2>
                <h2 class="consectetur_text">Miss.Juthamas Hasuk</h2>
                <p class="dummy_text">สาขาวิชาเทคโนโลยีสารสนเทศ<span> คณะวิทยาการสารสนเทศ</span><span> มหาวิทยาลัยมหาสารคาม</span></p>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </div>
  <!-- team section start -->
  <!-- newsletter section start -->
  <div class="newsletter_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="newsletter_text">Newsletter</h1>
          <p class="tempor_text">Tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="col-md-6">
          <div class="mail_bt_main">
            <input type="email" class="mail_text" placeholder="ENTER YOUR MAIL" name="Enter Tour Mail">
            <div class="subscribe_bt"><a href="{{ route('password.email') }}">SUBSCRIBE</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- newsletter section end -->
  <!-- footer section start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="footer_main">
        <div class="footer_left">
          <h1 class="contact_taital"><span>Contact </span> <img src="images/icon-2.png"> <span>Us</span></h1>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="images/map-icon.png"><span class="padding_left_15">Locations</span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="images/call-icon.png"><span class="padding_left_15">+71 9876543210</span></a></div>
        </div>
        <div class="footer_left">
          <div class="location_text"><a href="#"><img src="images/map-icon.png"><span class="padding_left_15">demo@gmail.com</span></a></div>
        </div>
      </div>
      <div class="contact_section">
        <div class="row">
          <div class="col-md-6">
            <div class="mail_section">
              <input type="" class="email_text" placeholder="Name" name="Name">
              <input type="" class="email_text" placeholder="Email" name="Email">
              <input type="" class="email_text" placeholder="Phone Number" name="Phone Number">
              <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
              <div class="send_bt"><a href="#">send</a></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map_main">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3831.4138222613483!2d103.28263481486015!3d16.19915158880074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3122a6a3a1bfc96d%3A0x901c5b0f2d94761!2z4LmC4Lij4LiH4Lie4Lii4Liy4Lia4Liy4Lil4Liq4Li44LiX4LiY4Liy4LmA4Lin4LiKIOC4hOC4k-C4sOC5geC4nuC4l-C4ouC4qOC4suC4quC4leC4o-C5jCDguKHguKvguLLguKfguLTguJfguKLguLLguKXguLHguKLguKHguKvguLLguKrguLLguKPguITguLLguKE!5e0!3m2!1sth!2sth!4v1671184725932!5m2!1sth!2sth"  width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
              </div>
            </div>
            <div class="social_icon">
              <ul>
                <li><a href="#"><img src="images/fb-icon1.png"></a></li>
                <li><a href="#"><img src="images/twitter-icon1.png"></a></li>
                <li><a href="#"><img src="images/linkden-icon1.png"></a></li>
                <li><a href="#"><img src="images/instagram-icon1.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">Copyright 2020 All Right Reserved By <a href="https://html.design">Free html Templates</a></p>
    </div>
  </div>
  <!-- copyright section end -->
  <!-- Javascript files-->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-3.0.0.min.js"></script>
  <script src="js/plugin.js"></script>
  <!-- sidebar -->
  <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- javascript -->
  <script src="js/owl.carousel.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

  <script src="vendor/global/global.min.js"></script>
<script src="vendor/chart.js/Chart.bundle.min.js"></script>
<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendor/owl-carousel/owl.carousel.js"></script>
<script src="js/dashboard/cards-center.js"></script>

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
</body>

</html>