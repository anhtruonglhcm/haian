@extends('frontend.partials.master')
@section('title', $intro->$get_name)
@section('content')

<section>
    <div class="bg">
        <img src="{{ asset($intro->image) }}" alt="">
    </div>
    <div class="container">
        <div class="gioithieu">
            <p>{!!$intro->$get_des!!}</p>
        </div>
    </div>
</section>

        
@endsection