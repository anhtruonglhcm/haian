<header class="header">
    <nav class="nav-hd">
        <div class="col-md-6 top">
            <ul>
               
            <li>
                 <form class="form1" action="{{ route('postSearch') }}" method="get">
            @csrf
                <input class="form-control" type="text" name="search" placeholder="{{trans('home.timkiem')}}" required="">
                <button class="btsr fa fa-search"></button>
                </form>
            </li>
            
        
                
                <li class="tha"><a href="#"><img src="{{ asset('images/icon_fb.png') }}" alt=""></a></li>
                <li><a href="{{ url('language/en') }}">Eng</a></li>
                <li><a href="{{ url('language/vi') }}">Vie</a></li>
            </ul>
        </div>
    </nav>
    <div style="clear: both;"></div>
    <section class="container header-bot">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('images/Logo.png') }}" alt=""></a>
                </div>
            </div>
                
    
        <div class="menu">
        <nav id='flexmenu'>
        <div id="mobile-toggle" class="button"></div>
        <ul id="main-menu">
            <li><a href="{{ route('index') }}">{{trans('home.home')}}</a></li>
            @php
                $intro = DB::table('intros')->where('status', 1)->orderBy('position','DESC')->get();
            @endphp
            @foreach ($intro as $row)
                <li><a href="{{ route('intro',$row->slug) }}">{{$row->$get_name}}</a></li>
            @endforeach
            <li><a href="{{ route('datban') }}">{{trans('home.datban')}}</a></li>
            <li><a href="{{ route('list_post')}}">{{trans('home.tintuc')}}</a></li>
            <li><a href="{{ route('contact') }}">{{trans('home.lienhe')}}</a></li>
        </ul>
    </nav>
</div>
    </section>
</header>
    <div style="clear: both;"></div>

