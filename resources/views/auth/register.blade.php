<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Travel the World</title>

    <link rel="shortcut icon" href="{{ asset('cymer/assets/img/favicon.png') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('cymer/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('cymer/assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('cymer/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cymer/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('cymer/assets/css/style.css') }}">
</head>

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        {{-- <img class="img-fluid" src="{{ asset('cymer/assets/img/login.png') }}" alt="Logo"> --}}
                        <img class="img-fluid" src="{{ asset('img/logo-png-1.png') }}" alt="Logo">

                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Sign Up</h1>
                            <p class="account-subtitle">Enter details to create your account</p>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label>Full Name<span class="login-danger">*</span></label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name">
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Email <span class="login-danger">*</span></label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    <span class="profile-views"><i class="fas fa-envelope"></i></span>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Phone Number <span class="login-danger">*</span></label>
                                    <input id="phone_number" type="number"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        name="phone_number" value="{{ old('phone_number') }}" required
                                        autocomplete="phone_number">
                                    <span class="profile-views"><i class="fas fa-phone-square"></i></span>

                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password <span class="login-danger">*</span></label>
                                    {{-- <input class="form-control pass-input" type="text"> --}}
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                    <span class="profile-views feather-eye toggle-password"></span>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm">Confirm password <span class="login-danger">*</span></label>
                                    {{-- <input class="form-control pass-confirm" type="text"> --}}
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                    <span class="profile-views feather-eye reg-toggle-password"></span>
                                </div>

                                <div class=" dont-have">Already Registered? <a href="{{ route('login') }}">Login</a>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-success btn-block" type="submit">Register</button>
                                </div>
                            </form>

                            {{-- <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>

                            <div class="social-login">
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('cymer/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('cymer/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cymer/assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('cymer/assets/js/script.js') }}"></script>
</body>

</html>
