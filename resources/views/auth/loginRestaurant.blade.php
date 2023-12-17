{{--@extends('layouts.app')--}}
@extends('layouts.index')
@section('content')

    <section class="reg-seller">
        <div class="container ">
            <div class="row">
                <form class="col-sm-8 offset-2 text-center" method="post" action="{{ route('loginRestaurant') }}">
                    @csrf
                    <div class="sellerusericon">
                        <a href="#">
                            <i class="far fa-user-circle"></i>
                        </a>
                    </div>

                    <div class="formdetail regform">
                        <input name="email" type="email" placeholder="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                        <br>
                        <input name="password" type="password" placeholder="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                        <br>
                        <button type="submit">دخول الأدمن </button>
                        <br>
                        {{--<div class="row forgetpass">--}}
                            {{--<div class="col-sm-6 text-left">--}}
                                {{--<a href="#"> مستخدم جديد ؟</a>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6 text-right">--}}
                                {{--<a href="#">نسيت كلمه المرور ؟</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<a style="color: red;" href={{route('register')}}>انشاء حساب الان</a>--}}

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection