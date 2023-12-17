@extends('layouts.index')
@section('content')
    <section class="resturantheader">
        <div class="container">
            <div class="row">
                <div class="col-12 headerlogo">
                    <img src="{{asset('images/restaurants/'.$restaurant->img)}}" alt="">
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
        <div class="container">
            <div class="row ">
                @foreach($products as $product)

                    <div class="col-md-3  ">
                        <div class="mealsitem">
                            <img src="{{asset('images/products/'.$product->image)}}" alt="">
                            <div class="text-center">
                                <a class=" add-to-cart" href={{route('addToCart',[$product->id,  Auth::id()])}} >
                                    <i class="text-left fas fa-shopping-cart"
                                       style=" display: inline-block; color: #ec3454;"></i> </a>

                                <h3 style="display: inline-block; ">{{$product->name}}</h3>

                                <p>{{$product->details}}</p>
                            </div>
                            <div class="mealdetail">
                                <span class="fa fa-hand-holding-heart "></span>
                                <span class="mealdetailtext"> {{$product->duration}} </span>
                                <br>
                                <span class="fa fa-piggy-bank "></span>
                                <span class="mealdetailtext"> {{$product->price}} </span>
                            </div>

                            <div class="text-center">

                                <a href={{route('productView',['id'=>$product->id ])}} >
                                    <button> اضغط للتفاصيل</button>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>


@endsection