<!DOCTYPE html>
<html lang="en">

<head>
    <title>Log In</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ 'fonts/font-awesome-4.7.0/css/font-awesome.min.css' }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>


    <div class="container-login100" style="background-image: url({{ asset('images/bg-01.jpg') }});">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" action="{{ route('pages.login') }}" method="post">
                @csrf
                <span class="login100-form-title p-b-37">
                    Log In
                </span>

                <div {{-- class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email" --}}>
                    <input class="input100 @error('email') is-invalid @enderror" type="email" name="email"
                           placeholder="Email">
                    <span class="focus-input100"></span>
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <input class="input100 @error('password') is-invalid @enderror" type="password" id="password"
                           name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign In
                    </button>
                </div>

                <div class="text-center p-t-57 p-b-20">
                    <span class="txt1">
                        Or login with
                    </span>
                </div>

                <div class="flex-c p-b-112">
                    <a href="{{ route('wallets.index') }}" class="login100-social-item">
                        <img src="{{ asset('images/icons/icon-facebook.png') }}" alt="FACEBOOK">
                    </a>

                    <a href="{{ route('wallets.index') }}" class="login100-social-item">
                        <img src="{{ asset('images/icons/icon-google.png') }}" alt="GOOGLE">
                    </a>
                </div>

                <div class="text-center">
                    <a href="{{ route('pages.showFormRegister') }}" class="txt2 hov1">
                        Register
                    </a>
                </div>

            </form>


        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        function visibility() {
            var x = document.getElementById('password');
            if (x.type === 'password') {
                x.type = "text";
                $('#eyeShow').show();
                $('#eyeSlash').hide();
            } else {
                x.type = "password";
                $('#eyeShow').hide();
                $('#eyeSlash').show();
            }
        }
    </script>
</body>

</html>
