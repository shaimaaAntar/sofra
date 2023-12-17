@extends('layouts.index')
@section('content')

    <!-- --------------------------------------my account------------------------------------------------------- -->
    <section class="contactus">
        <div class="container ">
            @if(\Illuminate\Support\Facades\Session::has('message'))

                <div class="col-sm-6 alert-success text-center offset-3 alert">
                    <h4> {{ \Illuminate\Support\Facades\Session::get('message') }} </h4>
                </div>
            @endif
            <div class="row">

                <form action="{{route('updateProfile')}}" enctype="multipart/form-data" method="post" class="col-sm-6 offset-3 text-center">
                    @csrf

                    <div class="div my_account ">

                        {{--<span class="myaccounticon "> <i class="fas fa-user-circle"></i></span>--}}
                        <br>
                        <div  style="cursor: pointer;">
                            <img src="{{asset("images/products/".$user->img)}}" id="upfile1" style="cursor:pointer; width: 20%; margin-bottom: 20px;
                             border:#dddddd 1px solid;box-shadow: #dddddd 1px 1px;"/>
                            <input required type="file" id="file1" name="img" style="display:none"
                                   class="addofferinput"/>
                        </div>
                        <br>
                        <input type="text" name="name" value="{{$user->name}}">
                        <input hidden  name="id" value="{{Auth::id()}}">
                        <br>
                        <input type="email" name="email" value="{{$user->email}}">
                        <br>
                        <input type="tel" name="phone" value=" {{$user->phone}}">
                        <br>
                        <input type="text" placeholder=" البلد  ">
                        <br>
                        <input type="text" placeholder=" المحافظه  ">
                        <br>
                        <input name="address" type="text"  placeholder="العنوان" value="{{$user->address}}">
                        {{--<textarea name="address" id="" rows="5" placeholder="{{$user->address}}"></textarea>--}}
                        <br>
                        <button type="submit">احفظ التعديلات</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


@endsection