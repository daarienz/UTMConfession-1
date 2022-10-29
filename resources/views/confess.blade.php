<!DOCTYPE html>
<html lang="en">

<head>
    <title>Confess</title>

    <link href="{{url('https://fonts.gstatic.com')}}" rel="preconnect">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/templatemo-seo-dream.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/animated.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/owl.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/sort.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{url('https://kit.fontawesome.com/a076d05399.js')}}" crossorigin="anonymous"></script>

    @include('includes.header')
</head>

<body>
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" method="post">
                        @csrf
                        <div class="row">


                            <div class="col-lg-6 offset-lg-3">
                                <div class="section-heading">
                                    <h6>Confession</h6>
                                    <h2>Fill Out <span>Your</span> <em>Confession</em> Below</h2>
                                </div>
                            </div>

                            
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="confession" type="text" class="form-control" id="confession" placeholder="Confession" required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" name="submit" class="main-button">
                                                @if(Auth::check())
                                                send as {{ Auth::user()->username }}
                                                @else
                                                Send as Anonymous
                                                @endif
                                            </button>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="contact-info">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <a href="register"><img src="assets/images/Sign Up.jpg" alt="email icon" style="background-color: white;"><br>Sign Up</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <a href="login"><img src="assets/images/Sign_In.png" alt="phone" style="background-color: white;"><br>Log In</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <a href="#"><img src="assets/images/contact-icon-03.png" alt="location"><br>Belum Tau</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>