@extends('layouts.index')
@section('title')
    <title> meal </title>
@endsection
@section('css')
    {{--<link rel="stylesheet" href="{{asset('/css/slick.css')}}">--}}
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
@endsection
@section('content')
    <section class="meal-page">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="meal-desc">
                        <h1>{{$product->name}}</h1>
                        <p>{{$product->details}}</p>
                        {{--<p><img src="{{asset('img/piggy-bank.png')}}" alt="" width="50px"> السعر : 25 ريال</p>--}}
                        {{--<p><img src="{{asset('img/piggy-bank.png')}}" alt="" width="50px"> السعر : 25 ريال</p>--}}
                        <p> {{$product->price}}ريال </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="meal-img">
                        <img src="{{asset('images/products/'.$product->image)}}" width="100%" class="meal-img">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Start Cart Section -->
    <section class="add-to-cart-sec">
        <div class="container">
            <a href="{{route('addToCart',[$product->id,  Auth::id()])}}" class="add-to-cart">
                اضف الي العربة
            </a>
            <div class="cart-info">
                <i class="fas fa-info"></i>
                <span>معلومات عن المتجر</span>
            </div>
            <div class="rate-heading">
                <h2>تقييم المستخدمين</h2>
                <span>155 تقييم</span>
            </div>
            <!-- Rates Added -->

            <div>
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="rate-com">--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                        {{--</ul>--}}
                        {{--<h3>بواسطة : محمد محروس</h3>--}}
                        {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eveniet voluptate exercitationem voluptatibus debitis mollitia at. Adipisci delectus ratione iure porro nulla totam sed ea nobis, quaerat, debitis non labore!</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="rate-com">--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                        {{--</ul>--}}
                        {{--<h3>بواسطة : محمد محروس</h3>--}}
                        {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eveniet voluptate exercitationem voluptatibus debitis mollitia at. Adipisci delectus ratione iure porro nulla totam sed ea nobis, quaerat, debitis non labore!</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="rate-com">--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                        {{--</ul>--}}
                        {{--<h3>بواسطة : محمد محروس</h3>--}}
                        {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eveniet voluptate exercitationem voluptatibus debitis mollitia at. Adipisci delectus ratione iure porro nulla totam sed ea nobis, quaerat, debitis non labore!</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="rate-com">--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                        {{--</ul>--}}
                        {{--<h3>بواسطة : محمد محروس</h3>--}}
                        {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eveniet voluptate exercitationem voluptatibus debitis mollitia at. Adipisci delectus ratione iure porro nulla totam sed ea nobis, quaerat, debitis non labore!</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="rate-com">--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                        {{--</ul>--}}
                        {{--<h3>بواسطة : محمد محروس</h3>--}}
                        {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eveniet voluptate exercitationem voluptatibus debitis mollitia at. Adipisci delectus ratione iure porro nulla totam sed ea nobis, quaerat, debitis non labore!</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="rate-com">--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                            {{--<li class="fa fa-star"></li>--}}
                        {{--</ul>--}}
                        {{--<h3>بواسطة : محمد محروس</h3>--}}
                        {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab eveniet voluptate exercitationem voluptatibus debitis mollitia at. Adipisci delectus ratione iure porro nulla totam sed ea nobis, quaerat, debitis non labore!</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Add Rate To Service -->--}}
            {{--<div class="add-rate">--}}
                {{--<h2>اضف تقييمك</h2>--}}
                {{--<ul class="list-unstyled">--}}
                    {{--<li class="fa fa-star"></li>--}}
                    {{--<li class="fa fa-star"></li>--}}
                    {{--<li class="fa fa-star"></li>--}}
                    {{--<li class="fa fa-star"></li>--}}
                    {{--<li class="fa fa-star"></li>--}}
                {{--</ul>--}}
                {{--<form action="">--}}
                    {{--<textarea name="rate" id="rate" cols="30" rows="10" placeholder="اضف تقييمك"></textarea>--}}
                    {{--<input type="submit" value="ارسال" name="submit">--}}
                {{--</form>--}}
            {{--</div>--}}
            </div>
        </div>
    </section>
    <!-- End Add Cart Section -->

    <!-- Start More Meals Section -->
    {{--<section class="more-meals">--}}
        {{--<h2>المزيد من أكلات هذا المطعم</h2>--}}
        {{--<div class="meals-imgs">--}}
            {{--<div class="contanier-fluid">--}}
                {{--<div class="slider">--}}
                    {{--<div class="item">--}}
                        {{--<img src="{{asset('img/erik-odiin-787777-unsplash.jpg')}}" alt="Meal">--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<img src="{{asset('img/erik-odiin-787777-unsplash.jpg')}}" alt="Meal">--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<img src="{{asset('img/erik-odiin-787777-unsplash.jpg')}}" alt="Meal">--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<img src="{{asset('img/erik-odiin-787777-unsplash.jpg')}}" alt="Meal">--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<img src="{{asset('img/erik-odiin-787777-unsplash.jpg')}}" alt="Meal">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End More Meals Section -->


@endsection

