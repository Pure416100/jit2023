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
    <title>Login</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Custom styles for this template-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
    

</head>
@section('content')

<body>

    @extends('layouts.app')
    <div class="choose_section layout_padding">
        <div class="container">


            <div class="card o-hidden border-0 shadow-lg my-5 bg-grey">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            <img class="profile_img" src="images/1.png" alt="student dp" width="620" height="600">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center ">
                                    <h4>Welcome {{ __('Login') }}!</h4>
                                </div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        @if ($message = Session::get('error'))
                                        <div class="alert alert-danger d-flex align-items-center " role="alert">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                            </svg>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @endif

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{('ชื่อผู้ใช้ หรือ อีเมล์')}}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="text" placeholder="email & username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{('รหัสผ่าน')}}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3 ">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('เข้าสู่ระบบ') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('ลืมรหัสผ่าน?') }}
                                                </a>
                                                @endif
                                            </div>
                                        </div>

                                    </form>

                                    <hr>
                                    <div class="col-md-8 offset-md-4">

                                        <script src="https://accounts.google.com/gsi/client" async defer></script>



                                        <div id="g_id_onload" data-client_id="726831138738-ahftk5eed78007jojd3vugni1qt1rpmr.apps.googleusercontent.com" data-callback="handleCredentialResponse">
                                        </div>
                                        <div class="g_id_signin" data-type="standard" data-size="large" data-theme="filled_black" data-text="sign_in_with" data-shape="rectangular" data-logo_alignment="left"></div>




                                    </div>
                                    <script>
                                        function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
                                            console.log('statusChangeCallback');
                                            console.log(response); // The current login status of the person.
                                            if (response.status === 'connected') { // Logged into your webpage and Facebook.
                                                testAPI();
                                            } else { // Not logged into your webpage or we are unable to tell.
                                                document.getElementById('status').innerHTML = 'Please log ' +
                                                    'into this webpage.';
                                            }
                                        }


                                        function checkLoginState() { // Called when a person is finished with the Login Button.
                                            FB.getLoginStatus(function(response) { // See the onlogin handler
                                                statusChangeCallback(response);
                                            });
                                        }


                                        window.fbAsyncInit = function() {
                                            FB.init({
                                                appId: '2143325035838322',
                                                cookie: true, // Enable cookies to allow the server to access the session.
                                                xfbml: true, // Parse social plugins on this webpage.
                                                version: 'v14.0' // Use this Graph API version for this call.
                                            });


                                            FB.getLoginStatus(function(response) { // Called after the JS SDK has been initialized.
                                                statusChangeCallback(response); // Returns the login status.
                                            });
                                        };

                                        function testAPI() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
                                            console.log('Welcome!  Fetching your information.... ');
                                            FB.api('/me', function(response) {
                                                console.log("last data-->", response);
                                                console.log('Successful login for: ' + response.name);
                                                document.getElementById('status').innerHTML =
                                                    'Thanks for logging in, ' + response.name + '!';

                                            });
                                        }

                                        function parseJwt(token) {
                                            var base64Url = token.split('.')[1];
                                            var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
                                            var jsonPayload = decodeURIComponent(window.atob(base64).split('').map(function(c) {
                                                return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
                                            }).join(''));

                                            return JSON.parse(jsonPayload);
                                        }

                                        function handleCredentialResponse(response) {
                                            console.log(response);
                                            console.log("Encoded JWT ID token: " + response.credential);
                                            const decoded = parseJwt(response.credential);
                                            console.log("DECODED-->", decoded);

                                            // $.ajax({
                                            //     type :"get",
                                            //     url : location.origin+"/google/"+response.credential.split(".")[1],

                                            $.ajax({
                                                    type: "post",
                                                    url: location.origin + "/ajaxRequestPost",
                                                    data: decoded
                                                })
                                                .done((response) => {
                                                    console.log("Google login response-->", response);
                                                    location.href = location.origin + "/";
                                                });

                                        }
                                        window.onload = function() {
                                            google.accounts.id.initialize({
                                                client_id: "726831138738-ahftk5eed78007jojd3vugni1qt1rpmr.apps.googleusercontent.com",
                                                callback: handleCredentialResponse
                                            });
                                            google.accounts.id.renderButton(
                                                document.getElementById("buttonDiv"), {
                                                    theme: "outline",
                                                    size: "large"
                                                } // customization attributes
                                            );
                                            google.accounts.id.prompt(); // also display the One Tap dialog

                                            $.ajaxSetup({
                                                headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                }
                                            });
                                        }
                                    </script>
                                    <br>
                                    <div class="col-md-8 offset-md-4">

                                        <div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false" scope="public_profile,email" onlogin="checkLoginState();"></div>

                                        <script>
                                            function statusChangeCallback(response) { // Called with the results from FB.getLoginStatus().
                                                console.log('statusChangeCallback');
                                                console.log(response); // The current login status of the person.
                                                if (response.status === 'connected') { // Logged into your webpage and Facebook.
                                                    testAPI();
                                                } else { // Not logged into your webpage or we are unable to tell.
                                                    document.getElementById('status').innerHTML = 'Please log ' +
                                                        'into this webpage.';
                                                }
                                            }



                                            function checkLoginState() { // Called when a person is finished with the Login Button.
                                                FB.getLoginStatus(function(response) { // See the onlogin handler
                                                    statusChangeCallback(response);
                                                });


                                            }



                                            window.fbAsyncInit = function() {
                                                FB.init({
                                                    appId: '2143325035838322',
                                                    cookie: true, // Enable cookies to allow the server to access the session.
                                                    xfbml: true, // Parse social plugins on this webpage.
                                                    version: 'v14.0' // Use this Graph API version for this call.
                                                });


                                                FB.getLoginStatus(function(response) { // Called after the JS SDK has been initialized.
                                                    statusChangeCallback(response); // Returns the login status.
                                                });
                                            };

                                            function testAPI() { // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
                                                console.log('Welcome!  Fetching your information.... ');
                                                FB.api('/me', {
                                                    locale: 'en_US',
                                                    fields: 'id,name,first_name,last_name,email,link,gender,locale,picture'
                                                }, function(response) {
                                                    console.log("last data-->", response);
                                                    console.log('Successful login for: ' + response.name);

                                                    $.ajax({
                                                            type: "post",
                                                            url: location.origin + "/ajaxRequestPost2",
                                                            data: response
                                                        })
                                                        .done((response) => {
                                                            console.log("facebook login response-->", response);
                                                            location.href = location.origin + "/";
                                                        });

                                                });

                                            }
                                        </script>

                                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
@include('layouts.footer')
</html>
@endsection