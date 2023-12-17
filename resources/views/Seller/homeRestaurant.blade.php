
@extends('layouts.index')
@section('content')

<div>

    {{--<!----------------------------------------header-------------------------------------------------------->--}}
    {{--<section class="resturantheader">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-12 headerlogo">--}}
                    {{--<img src="{{asset('img/res-img.png')}}" alt="">--}}
                    {{--<div class="div">--}}
                        {{--<span class="span">--}}
                            {{--<span class="fa fa-star checked"></span>--}}
                            {{--<span class="fa fa-star checked"></span>--}}
                            {{--<span class="fa fa-star checked"></span>--}}
                            {{--<span class="fa fa-star "></span>--}}
                            {{--<span class="fa fa-star"></span>--}}
                        {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    {{--<!---------------------------------------- sell page-------------------------------------------------------->--}}
    {{--<section class="resturantmeals">--}}
        {{--<div class="sellspage text-center">--}}
            {{--<h1>{{$restaurant->name}}</h1>--}}
            {{--<h2>قائمه الطعام / منتجاتى</h2>--}}
           {{--<a href={{route('newProduct',$restaurant->id)}}> <button class="sellsbut">اضف منتج جديد</button> </a>--}}
        {{--</div>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
               {{--@foreach ($products as $product)--}}
                {{--<div class="col-sm-4">--}}
                    {{--<a href={{route('productView',$product->id)}} >--}}
                    {{--<a href={{route('productView',['id'=>$product->id ])}} >--}}

                    {{--<div class="mealsitem sellitem">--}}
                        {{--<div class="absicon">--}}
                            {{--<span class="far fa-times-circle "></span>--}}
                        {{--</div>--}}

                        {{--<img src="{{asset('img/burger.jpg')}}" alt="">--}}
                        {{--<div class="text-center">--}}
                            {{--<h3>{{$product->name}}</h3>--}}
                            {{--<p>{{$product->details}}</p>--}}
                        {{--</div>--}}
                        {{--<div class="mealdetail selldetail">--}}
                            {{--<span class="fa fa-piggy-bank "></span>--}}
                            {{--<span class="mealdetailtext"> {{$product->price}} </span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
</div>

    <section class="resturantheader">
        <div class="container">
            <div class="row">
                <div class="col-12 headerlogo">
                    <img src="{{asset('img/res-img.png')}}" alt="">
                    <p>{{$restaurant->name}}</p>
                    <div class="div">
                        <span class="span">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------------------- meals-------------------------------------------------------->
    <section class="resturantmeals">

        <div class="sellspage text-center">
        {{--<h1>{{$restaurant->name}}</h1>--}}
        <h2>قائمه الطعام / منتجاتى</h2>
        <a href={{route('newProduct',$restaurant->id)}}> <button class="sellsbut">اضف منتج جديد</button> </a>
        </div>

        <div class="container">
            <div class="row ">
                @foreach($products as $product)

                <div class="col-md-4  ">
                    <div class="mealsitem">
                        <img src="{{asset('images/products/'.$product->image)}}" alt="">
                        <div class="text-center">
                            <h3>{{$product->name}}</h3>
                            <p>{{$product->details}}</p>
                        </div>
                        <div class="mealdetail">
                            <span class="fa fa-hand-holding-heart "></span>
                            <span class="mealdetailtext"> {{$product->duration}} </span>
                            <br>
                            <span class="fa fa-piggy-bank "></span>
                            <span class="mealdetailtext"> {{$product->price}} </span>
                        </div>

                        {{--<div class="text-center">--}}

                            {{--<a href={{route('productView',['id'=>$product->id ])}} >--}}
                                {{--<button> اضغط للتفاصيل</button> </a>--}}
                        {{--</div>--}}

                    </div>
                </div>
               @endforeach
            </div>
        </div>
        </div>
    </section>


@endsection