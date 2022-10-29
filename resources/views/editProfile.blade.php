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
    <link href="{{asset('/assets/css/updateProfile.css')}}" rel="stylesheet">

    @include('includes.header')
</head>

<body>
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" method="post" action="updateProfile">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id = Auth::user()->id }}">


                        <div class="row">

                            <div class="col-md-4">
                                <div class="profile-img">
                                    <div class="section-headings">
                                        <h2><span>Edit</span><em> Profile</em></h2> <br>
                                        <img style="border-radius: 50%;" src="https://i.ibb.co/XDvNnq4/IU-Photos-107-of-599-Last-fm.webp" alt="" /> <br> <br> <br> <br>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="profile-head">
                                    <div class="section-headings">
                                        <h2 style="color: white;">.</h2>
                                        <h6 style="color: white;">.</h6> <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Username :</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" name="username" type="text" value="{{ Auth::user()->username }}" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Email :</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" name="email" type="email" value="{{ Auth::user()->email }}" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Status :</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" name="description" type="text" value="{{ Auth::user()->description }}" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Back button -->
                            <div class="col-md-2">
                                <a style="text-decoration: none;" href="profile" class="profile-edit-btn" name="btnAddMore">Back </a>
                            </div>
                            <!-- Submit form button -->
                            <div>
                                <button type="submit" style="text-decoration: none;" class="profile-edit-btn">Submit</button><br>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div> <br> <br>

        <!-- Change Password Part -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" method="post" action="changePassword">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id = Auth::user()->id }}">


                        <div class="row">

                            <div class="col-md-4">
                                <div class="profile-img">
                                    <div class="section-headings">
                                        <h2><em>Change</em><span> Password</span></h2> <br>
                                        <img style="border-radius: 50%;" src="https://i.ibb.co/XDvNnq4/IU-Photos-107-of-599-Last-fm.webp" alt="" /> <br> <br> <br> <br>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="profile-head">
                                    <div class="section-headings">
                                        <h2 style="color: white;">.</h2>
                                        <h6 style="color: white;">.</h6> <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Old Password :</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" name="oldPassword" type="text" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>New Password :</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" name="newPassword" type="text" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><b>Confirm New Password :</b></label>
                                            </div>
                                            <div class="col-md-6">
                                                <input class="form-control" name="confirmNewPassword" type="text" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Back button -->
                            <div class="col-md-2">
                                <a style="text-decoration: none;" href="profile" class="profile-edit-btn" name="btnAddMore">Back </a>
                            </div>
                            <!-- Submit form button -->
                            <div>
                                <button type="submit" style="text-decoration: none;" class="profile-edit-btn">Submit</button><br>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(Session::has('differentNewPassword'))
    <script>
        alert('"Confirm New Password" must be the same as "New Password" !');
    </script>
    @endif
    @if(Session::has('wrongPassword'))
    <script>
        alert('Wrong Password !');
    </script>
    @endif
</body>

</html>