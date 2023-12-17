@extends('layouts.index')
@section('content')
    <!----------------------------------------header-------------------------------------------------------->
    <section class="addoffer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center ">
                    <p>
                        اضافه منتج جديد
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------------------- add new product page-------------------------------------------------------->
    <section class="">
        <div class="container">
            <div class="row ">
                <div class="col-sm-8 offset-2 addproductpage text-center">

                    <form method="post" action="{{route('addProduct')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="offerimg" style="cursor: pointer;">
                            <img src="{{asset("img/default-image.jpg")}}" id="upfile1" style="cursor:pointer; width: 20%; margin-bottom: 20px;
                             border:#dddddd 1px solid;box-shadow: #dddddd 1px 1px;"/>
                            <input required type="file" id="file1" name="img" style="display:none"
                                   class="addofferinput"/>
                            <p style="cursor: pointer;" id="uploadtext">صوره المنتج</p>
                        </div>
                        @error('name')
                        <p style="color: #38c172 ">  name required</p>
                        @enderror
                        <input required name="name" type="text" placeholder="اسم المنتج" class="addofferinput">
                        <br>
                        <textarea required name="details" id="" cols="40" rows="4" placeholder="وصف مختصر"
                                  class="addofferinput"></textarea>
                        <br>
                        <input name="price" required type="number" placeholder="السعر" class="addofferinput">
                        <br>
                        <input required name="duration" type="text" placeholder="مده التجهيز" class="addofferinput">
                        <input name="restaurant_id" type="hidden" value="{{$id}}" >
                        {{--<input name="restaurant_id" type="hidden" value="{{Auth::user()->id}}" >--}}
                        {{--<input name="restaurant_id" type="hidden" value={{auth('user')->id()}} >--}}
                        <br>
                        <button type="submit">اضافه</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection