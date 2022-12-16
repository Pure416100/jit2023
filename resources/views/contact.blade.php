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

</head>
@section('content')
<body>
  
@extends('layouts.app')

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
                  <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
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
@endsection