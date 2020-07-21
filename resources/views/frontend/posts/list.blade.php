@extends('frontend.partials.master')
@section('title', trans('home.tintuc'))
@section('canonical')
{{ URL::current() }}
@stop
@section('content')
<section class="boxtt container">
    @foreach($post as $row)
    <div class="tintuc">
    <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-4">
            <div class="img-tt">
                <img src="{{ asset($row->image) }}" alt="">
            </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-7 right">
            <div class="noidung-tt">
                <b>{{$row->$get_name}}</b>
                <p>{!! $row->$get_des !!}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
   
</section>
@endsection