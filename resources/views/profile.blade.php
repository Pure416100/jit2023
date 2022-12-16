<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('layouts.app')

@section('content')
<div class="choose_section layout_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center">
                @if ($message = Session::get('Success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
            @endif
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"><img class="profile_img" src="images/ลงทะเบียน.png" alt="student dp" width="650" height="600"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">{{ __('ลงทะเบียนผู้ใช้งาน') }}</h1>



                                    <form method="POST" action="{{ route('profile-update') }}" enctype="multipart/form-data">
                                        @csrf



                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ชื่อเข้าใข้ระบบ') }}</label>

                                            <div class="col-md-6">
                                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->username}}" required autocomplete="username" autofocus>

                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('อีเมล') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email}}" required autocomplete="email">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-3"><label for="name" class="col-md-4 col-form-label text-md-end">สมัครเมื่อ</label>
                                            <div class="col-md-6">
                                                <h6>{{ Auth::user()->created_at->format('j F, Y เวลา h:i' )}}</h6>
                                            </div>
                                            <br>
                                            <div class="row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('บันทึกข้อมูล') }}
                                                    </button>
                                                </div>
                                            </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection