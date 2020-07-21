@extends('frontend.partials.master')
@section('title', trans('home.datban'))
@section('content')
<form action="{{ route('post_contact') }}" method="Post" >
@csrf
        <div class="booking" style="background: url(images/banner5.png) no-repeat;background-size: 100%;">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-6 col-sm-4">
                    <div class="dathang">
                        <input type="text" name="name" class="form-control" placeholder="{{trans('home.hoten')}}" required="">
                        <input type="text" name="phone"  class="form-control" placeholder="{{trans('home.phone')}}" required="">
                        <input type="text" name="title"  class="form-control" placeholder="{{trans('home.gio')}}" required="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-8">
                    <div class="content">
                        <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="{{trans('home.noidung')}}"></textarea>
                    </div>
                </div>
            </div>
            <div class="gui col-md-12 ">
                <button type="submit" name="save"  class="btn bts">{{trans('home.dat')}}</button>
            </div>
        </div>
        </form>
        <div style="clear: both;"></div>
@endsection