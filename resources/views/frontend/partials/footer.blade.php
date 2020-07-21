<footer class="footer">
        <div class="container">
            <div class="col-md-4">
                <div class="logo">
                    <img src="{{ asset('images/logo_ft.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <h2>{{$setting->$get_name}}</h2>
                <p>{{trans('home.address')}}: {{$setting->$get_address}}</p>
                <p>Email: {{$setting->email}}</p>
                <p>Hotline: {{$setting->hotline}}</p>
            </div>
        </div>
</footer>