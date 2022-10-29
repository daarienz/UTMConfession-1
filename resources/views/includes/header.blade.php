<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="home" class="logo">
                        <h4>UTM Confesion <img src="{{asset('/assets/images/logo-icon.png')}}" alt=""></h4>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class=""><a href="{{url('home')}}" class="active">Home</a></li>
                        <li class=""><a href="{{url('about')}}">About Us</a></li>
                        <li class="scroll-to-section">
                            <button class="dropbtn" style="font-weight: 500; position:relative; bottom: -2px;">Sort</button>
                            <div class="dropdown-content">
                                <a href="mostComments">Most Comments</a>
                                <a href="mostLiked">Most Liked</a>
                                <a href="mostDisliked">Most Disliked</a>
                                <a href="home">Date</a>
                            </div>
                        </li>
                        @if((Auth::check()))
                        <li class=""><a href="userConfession">My Confession</a></li>
                        <li class=""><a href="profile">Profile</a></li>
                        <li class="">
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <button><a>Logout</a></button>
                            </form>
                        </li>
                        <li class="">
                            <div class="main-blue-button">
                                <a href="confess">
                                    Confess as {{ Auth::user()->username }}
                                </a>
                            </div>
                        </li>
                        @else
                        <li class=""><a href="{{url('login')}}">Login</a></li>
                        <li class=""><a href="{{url('register')}}">Sign Up</a></li>
                        <li class="">
                            <div class="main-blue-button">
                                <a href="confess">
                                    Anonymous Confess
                                </a>
                            </div>
                        </li>
                        @endif
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->