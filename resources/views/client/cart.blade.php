@extends('layouts.index')
@section('content')
    <section class="cart">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 offset-3">
                    @if(\Illuminate\Support\Facades\Session::has('message'))
                        <div class="alert alert-success">
                            {{ \Illuminate\Support\Facades\Session::get('message') }}
                        </div>
                    @endif
                    @foreach($carts as $cart)
                        <div class="row  cartitem">
                            <div class="col-sm-4 ">
                                <img src="assets/img/erik-odiin-787777-unsplash.jpg" alt="">
                            </div>
                            <div class="col-sm-8 ">
                                <p> {{$cart->products->name}}</p>
                                <p>{{$cart->products->price}}</p>
                                <p>البائع : wild burger</p>
                                <p>{{$cart->products->quantity}}
                                    <select>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </p>
                            </div>

                            <div class="col-sm-12  text-center ">
                                <a href="{{route('deleteItem',$cart->id)}}">
                                    <button>
                                        <i class="far fa-times-circle"></i>
                                        مسح
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-sm-12  text-center ">

                        <a href={{Route('newOrder')}} >
                            <button class="cartitem">

                                ارسال الطلب

                            </button>
                        </a></div>



                </div>
            </div>
        </div>
    </section>
@endsection