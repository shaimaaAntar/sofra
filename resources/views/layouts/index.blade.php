<!doctype html>
<html  dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<title>Sofra</title>--}}
    @yield('title')
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    {{--<link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{asset('/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/css/css.css')}}">
    @yield('css')
</head>

<body>
<section class="navsec ">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-lg-2 navmarket">
                <a href={{Route('cart',Auth::id())}}>
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>

            @guest
                @if (Route::has('login'))
                    <li  class="col-sm-2 col-lg-2" >
                        <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li  class="col-sm-2 col-lg-2" >
                        <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <div class="col-sm-4 col-lg-4 " >

                    <button class="btn  dropdown-toggle navusertoggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="color: #fff; font-size: 20px;">
                        <span class=""> <a href="">
                                {{ Auth::user()->name }}
                            </a>
                        </span>
                    </button>
                    <div class="dropdown-menu navusermenu " aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item " href="my orders.html">
                            <i class="fas fa-clipboard-list"></i>
                            طلباتى</a>
                        <a class="dropdown-item " href="offers.html">
                            <i class="fas fa-gift"></i>
                            العروض </a>
                        <a class="dropdown-item " href="contact us.html">
                            <i class="far fa-envelope"></i>
                            نواصل معنا </a>
                        <a class="dropdown-item " href="/myAccount/{{Auth()->user()->id}}">
                            <i class="far fa-user"></i>
                            حسابى </a>
                        <a class="dropdown-item " href="#">
                            <i class="far fa-calculater"></i>
                            العموله </a>
                        <a class="dropdown-item " href="meal page.html">
                            <i class="far fa-note"></i>
                            الطلبات المقدمه </a>
                        {{--<a class="dropdown-item " href="Sofra Home-client.html">--}}
                        {{--<i class="fas fa-sign-out-alt"></i>--}}
                        {{--تسجيل الخروج </a>--}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            {{ __('تسجيل خروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </div>

            @endguest




            <div class="col-sm-3 col-3 text-left navimg">
                <a href="/"> <img src="{{asset('/img/sofra logo-1.png')}}" alt=""></a>
            </div>
            <div class="col-sm-3 col-3  navsearch ">
                <div class="div">
                    <span>
                        <input type="search">
                        <i class="fas fa-search "></i>
                    </span>
                </div>
            </div>
            {{--<div class="col-sm-2 col-2 navtoggle">--}}
            {{--<div class="pos-f-t">--}}
            {{--<nav class="navbar  ">--}}
            {{--<button class="navbar-toggler " type="button" data-toggle="collapse"--}}
            {{--data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"--}}
            {{--aria-expanded="false" aria-label="Toggle navigation">--}}
            {{--<span class="">--}}
            {{--<i class="fas fa-hamburger"></i>--}}
            {{--</span>--}}
            {{--</button>--}}
            {{--</nav>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>
 {{--<!--------------------------nav------------------------->--}}
@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 footertext ">
                <img src="{{asset('img/edit-min.png')}}" alt="">من نحن
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus libero quam, eveniet tempora
                    harum sequi deserunt molestiae doloremque, beatae fuga suscipit dolor quos voluptatum.
                    Distinctio iusto officiis nostrum dignissimos nulla!</p>
                <a href="https://www.instagram.com" target="blank"> <i class="fab fa-instagram"></i></a>
                <a href="https://www.twitter.com" target="blank"> <i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com" target="blank"> <i class="fab fa-facebook"></i></a>

            </div>
            <div class="col-sm-3 footerimg ">
                <img src="{{asset('img/sofra logo-1.png')}}" alt="">
            </div>
        </div>
    </div>
</footer>

{{--javascript--}}
<div>
<script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/all.js')}}"></script>
<script src="{{asset('/slick.min.js')}}"></script>
    <script src="{{asset('/js/js.js')}}"></script>

</div>

</body>

</html>