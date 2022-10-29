<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Confession</title>

    <link href="{{url('https://fonts.gstatic.com')}}" rel="preconnect">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap')}}" rel="stylesheet">
    <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
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
    <style>
        .fa {
            font-size: 30px;
            transition: 0.3s;
            cursor: pointer;
            user-select: none;
            color: rgb(51, 204, 197);
            border-color: rgb(51, 204, 197);
            padding: 10px;
            border-radius: 10px;
        }

        .fa:hover {
            color: rgb(71, 113, 203);
            border-radius: 30px;
            border-color: rgb(71, 113, 203);
        }
    </style>


    <div id="services" class="our-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>Confess <span>anything</em></h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">

                @foreach($confession as $confessions)
                <div class="col-lg-4">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon">
                                    <img src="assets/images/service-icon-01.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="right-content">
                                    <h4>{{ $confessions->username }}</h4>
                                    <p>{{ $confessions->confession }}</p>
                                    <p>Date: {{ $confessions->created_at }}</p>
                                </div>
                            </div>
                        </div>
                        <i onclick="myFunction(this)" class="fa fa-thumbs-up">{{ $confessions->numberOfLikes }}</i>
                        <i onclick="myFunction(this)" class="fa fa-thumbs-down">{{ $confessions->numberOfDislikes }}</i>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>

    @include('includes.footer')
</body>

</html>