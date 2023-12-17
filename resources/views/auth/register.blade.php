@extends('layouts.index')
@section('content')
<div class="container">
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('register') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="row mb-3">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

                                {{--@error('name')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row mb-3">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

                                {{--@error('email')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row mb-3">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

                                {{--@error('password')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                {{--@enderror--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row mb-3">--}}
                            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Register') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
<section class="reg-seller">
    <div class="container ">
        <div class="row">


                <form class="col-sm-8 offset-2 text-center" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="sellerusericon">
                    <a href="#">
                        <i class="far fa-user-circle"></i>
                    </a>
                </div>
                <div class="formdetail">
                    <input name="name" type="text" placeholder="الاسم">
                    <br>
                    <input name="email" type="email" placeholder="البريد الالكترونى">
                    <br>
                    <input  name="phone" type="number" placeholder="الجوال">
                    <br>
                    <input name="address" type="text" placeholder="لعنوان">
                    <br>
                    <input type="text" placeholder="الحى">
                    <br>
                    <input name="password" type="password" placeholder="كلمه المرور">
                    <br>
                    <input name="password_confirmation" type="password" placeholder="اعاده كلمه المرور">
                    <br>
                    <div class="marketimg text-left">
                        <p>بانشاء حسابك ان توافق على
                            <a href="#">شروط الاستخدام</a>
                            الخاصه بسفره
                        </p>
                    </div>
                    <br>

                    <button type="submit">دخول</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
