<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    
    <script src="{{url('https://kit.fontawesome.com/a076d05399.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('/assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/main.js')}}"></script>
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}">
    <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap')}}" >
    <link href="{{asset('/assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/templatemo-seo-dream.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/animated.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/sort.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/util.css')}}" rel="stylesheet">
    <link href="{{asset('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/animate/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/select2/select2.min.css')}}" rel="stylesheet">

    @include('includes.header')
</head>

<body>
    <div class="contact-us section" id="contact">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="assets/images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" method="post">
                @csrf
                <span class="login100-form-title">Log<em>in</em></span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>

    @if(Session::has('registerSuccess'))
    <script>
        alert('Registration success, You can login now :)');
    </script>
    @endif

    @if(Session::has('wrongPassword'))
    <script>
        alert('Wrong Password !');
    </script>
    @endif
    
    @if(Session::has('error'))
    <script>
        alert('Not registered in our database !');
    </script>
    @endif
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
</body>

</html>