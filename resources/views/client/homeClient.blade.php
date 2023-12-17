@extends('layouts.index')
@section('title')
    <title>Sofra</title>
@endsection
@section('content')
    <!----------------------------------------header-------------------------------------------------------->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 headerlogo">
                    <p>
                        سفره
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 headertitle">
                    بتشترى .. بتبيع ؟ كله عند سفرة
                </div>
            </div>
            @guest
            <div class="row">
                <div class="col-12 headerbutton">
                    <button>
                        سجل الان
                        <img src="{{asset('/img/dish.png')}}" alt="">
                    </button>
                </div>
            </div>
                   @endguest
        </div>
    </header>
    <!----------------------------------------search resturant-------------------------------------------------------->
    <section class="searchresturant">
        <h1>ابحث عن مطعمك المفضل</h1>
        <div class="container">
            <div class="row searchresturantrow">
                <div class="col-6">
                    <select name="" id="">
                        <option value="">اختر المدينه</option>
                        <option value="">القاهره</option>
                        <option value="">الاسكندريه</option>
                        <option value="">القليوبيه</option>
                        <option value="">السويس</option>
                        <option value="">المنيا</option>
                    </select>
                </div>
                <div class="col-6">
                    <select name="" id="">
                        <option value=""> ابحث عن مطعمك المفضل</option>
                        <option value="">كنتاكى</option>
                        <option value="">كوك دور</option>
                        <option value="">ماكدونالز</option>
                        <option value="">البرج</option>
                        <option value="">الجزيره</option>
                    </select>
                </div>
            </div>
            <div class="row ">
                @foreach ($restaurants as $restaurant)
                <div class="col-sm-6  ">

                    <div class="searchresturantitem">
                        <div class="row ">
                            <div class="col-sm-5">
                                <img src="assets/img/res-img.png" alt="">
                            </div>
                            <div class="col-sm-5 resturantdetail">
                                <a href={{route('rest',$restaurant->id)}}>
                                    <h3>{{$restaurant->name}}</h3></a>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <p>الحد الادنى للطلب : 60ريال</p>
                                <p> رسوم التوصيل : 10ريال</p>
                            </div>
                            <div class="col-sm-2 openresturant">
                                <a href="#"> <i class="fas fa-circle"></i></a>
                                مفتوح
                            </div>
                        </div>
                    </div>

</div>
                    @endforeach

            </div>
        </div>

    </section>
    <!-- ---------------------------------------offer------------------------------------------------------ -->
    <section class="offer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <img src="assets/img/Group 1036.png" alt="">
                </div>
                <div class="col-sm-7 offertext">
                    <p>
                        نقدم فى سفره افضل العروض لكل انواع المطاعم والاكلات الشهيه المهلبيه ماذا تنتظر ابدا الاستمتاع
                        بالعروض
                    </p>
                    <button>
                        شاهد العروض
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------download------------------------------------------------------ -->
    <section class="downloadapp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1> قم بتحميل التطبيق الخاص بنا الان</h1>

                </div>
                <div class="col-sm-7 text-center">
                    <button>حمل الان
                        <i class="fab fa-android"></i>

                    </button>
                </div>
                <div class="col-sm-5">
                    <img src="assets/img/app mockup.png" alt="">
                </div>
            </div>
        </div>
    </section>

@endsection






