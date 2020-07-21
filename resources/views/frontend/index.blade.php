@extends('frontend/partials/master')
@section('title', $setting->$get_name)
@section('title_seo', $setting->title_seo)
@section('meta_key', $setting->meta_key)
@section('meta_des', $setting->meta_des)
@section('content')
<section>
    <div class="col-md-12 bo-pg">
        <div class="banner2">
            <img src="images/banner2.png" alt="">
        </div>
    </div>
    <div class="col-md-6 layer1 bo-pg height">
        <div class="text">
            <h2>{{trans('home.ve')}} D'art</h2>
            <p>D'art là một trong những công ty hàng đầu về thiết kế và thi công nội thất. Bằng tâm huyết, bằng kinh nghiệm sự nhiệt tình và sáng tạo, đội ngũ D'art tự tin mang đến cho khách hàng những phong cách nội thất thẩm mỹ nâng tầm giá trị cho căn nhà của bạn.</p>
            <a href="{{ asset('gioi-thieu/dart') }}">{{trans('home.xemthem')}}</a>
        </div>
    </div>
    <div class="col-md-6 bo-pg height">
        <div class="anh">
            <img src="images/Layer1.png" alt="">
        </div>
    </div>
</section>
<div style="clear: both;"></div>

<section class="container box2">
    <div class="title">
        <h2>{{trans('home.tintuc')}}</h2>
    </div>
    <div class="slider1-1">
        @foreach($post as $row)
    <div class="items">
        <div class="cottrai" style="background: url(images/bannerft.png) center no-repeat;background-size: cover;width:70%;">
            <h2>{{$row->$get_name}}</h2>
            <p>{!! $row->$get_des !!}</p>
        </div>
        <div class="cotphai" style="width:30%;">
            <img src="{{ asset($row->image) }}" alt="">
        </div>
    </div>
    @endforeach


    </div>

    <div class="title2">
        <h2>{{trans('home.denvoi')}}</h2>
        <form action="{{ route('post_contact') }}" class="form-ct" method="post">
            @csrf
            <input name="name" type="text" placeholder="{{trans('home.hoten')}}" class="form-control " required="">
            <input name="phone" type="text" placeholder="{{trans('home.phone')}}" class="form-control " required="">
            <button name="save" type="submit" class="btn btn-primary black">{{trans('home.gui')}}</button>
        </form>
    </div>
</section>
<div style="clear: both;"></div>
@endsection
@section('script')
    <script>
    $('.slider1-1').slick({
        slidesToShow: 1,
        slidesToShow: 1,
        speed: 300,
        arrows: true,
        dots: false,

        // autoplay: true,
        // autoplaySpeed: 1000,

        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false,
                    dots: false
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>
@endsection
