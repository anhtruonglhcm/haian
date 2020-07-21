@extends('frontend.partials.master')
@section('title', 'Sản phẩm')
@section('content')
        
<div class="am-product-banner">
    <div class="banner-2">
        <img src="{{ asset('images/Layer10.png') }}" alt="">
        <div class="am-product-banner-brand">
            <img src="{{ asset('images/Layer15.png') }}" class="am-product-banner-brand__logo am-image">
        </div>
    </div>
</div>
<div class="am-product1 am-content-block am-content-block--ext2">
    <div class="am-product1-text">
        <img class="am-product1-image am-image" src="{{ asset('images/Layer5.png') }}">
        <div>
            <div class="am-img-pro">
                <img src="{{ asset('images/Layer7.png') }}" alt="">
            </div>
            <div class="am-text-pro">
                Is a ready-to-eat energy gel containing <span class="am-bold am-text-x-2">3,000  mg of</span> amino acids, with the main amino acid <span class="am-color-golden am-bold am-text-x-2">BCAAs being</span> more than 50% of all amino acids. Which is 3 kinds of essential amino acids that the body cannot create by themselves, including L-Lucine, L-isolucine and L-Valine, as well as providing<span class="am-bold am-text-x-2"> 110</span>  kilocalories of energy per bag
            </div>
        </div>
    </div>
</div>
<div class="am-product2">
    <div class="am-product2_ie_before" style="display: none;"> </div>
    <div class="am-product2__diagonal"></div>
    <div class="am-product2-diagonal-top"></div>
    <div class="am-product2-block am-content-block am-content-block--ext2">
        <div class="am-product2-text">
            <img class="am-product2-image-desktop am-image" src="{{ asset('images/Layer6.png') }}">
        </div>
        <div class="am-text-pro2">
            Amino VITAL is suitable for endurance sport such as
            running, cycling, triathlon and golfing.
        </div>
    </div>
    <div class="am-product2-diagonal-btm"></div>
    <div class="am-product2-diagonal-btm-hide"></div>
</div>
<div class="am-product3 am-content-block am-content-block--ext2">
    <div class="am-product3-icon1">
        <img class="am-image" src="{{ asset('images/Layer9.png') }}">
    </div>
    <div class="am-product3-text1">
        <p class="am-p">We recommend to drink it 30 minutes before exercise. By
            doing this, the body will absorb it and be ready to exercise
            just in time.

        </p>
    </div>
    <div class="am-product3-icon2">
        <img class="am-image" src="{{ asset('images/Layer8.png') }}">
    </div>
    <div class="am-product3-text2">
        <p class="am-p">In Japan, amino VITAL is the number 1 best selling
            amino energy gel brand. It is also widely used among
            Japanese national athletics and people who exercise.
            Guaranteed by the sales of more than 7 millions pouch
        per year.</p>
    </div>
</div>
        
        
@endsection
