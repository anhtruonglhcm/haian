@extends('frontend.partials.master')
@section('title', trans('home.lienhe'))
@section('content')
        <div  class="container lienhe">
            <div class="row fd">
                <div class="col-md-4 ">
                    <div class="img">
                        <img src="images/lienhe1.png" alt="">
                    </div>
                    <div class="noidung">
                        <h2>
                            D'art Coffee
                        </h2>
                        <i>{{trans('home.address')}}: Tầng 1, 54 Vincom Nguyễn Chí Thanh, Hà Nội.
                            <br>
                            {{trans('home.phone')}}: 098 585 99 11
                         <br>
                            {{trans('home.giomocua')}}: 07:00 - 23:00
                            <br>
                            Gmail: dartbistrocafeandrestaurant@gmail.com
                    </i>
                    </div>
                </div>
                <div class="col-md-4 right">
                    <div class="img1">
                        <img src="images/lienhe2.png" alt="">
                    </div>
                    <div class="noidung2">
                        <h2>
                            D'art Bistro Coffee & Restaurant
                        </h2>
                        <i>{{trans('home.address')}}: Tầng 1, 54 Vincom Plaza Skylake Phạm Hùng, Hà Nội.
                            <br>
                            {{trans('home.phone')}}: 098 585 99 11
                         <br>
                            {{trans('home.giomocua')}}: 07:00 - 23:00
                            <br>
                            Gmail: dartbistrocafeandrestaurant@gmail.com
                    </i>
                    </div>
                </div>
            </div>
        </div>
            <div style="clear: both;"></div>

@endsection