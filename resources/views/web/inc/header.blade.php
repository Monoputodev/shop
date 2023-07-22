@php
$settings=DB::table('settings')->get();

@endphp

<div class="backdrop"></div>
<a class="backtop fas fa-arrow-up" href="{{ asset('assets/web') }}/#"></a>
<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group"><button class="header-user"><img
                      src="{{ asset('assets/web') }}/images/user.png" alt="user"></button><a
                  href="{{ route('home') }}"><img
                      src="@foreach($settings as $data) {{ asset('') }}{{$data->logo}} @endforeach"
                      alt="logo"></a><button class="header-src"><i class="fas fa-search"></i></button></div>
            <a href="{{ route('home') }}" class="header-logo"><img
                  src="@foreach($settings as $data) {{ asset('') }}{{$data->logo}} @endforeach" alt="logo"></a><a
              href="{{ route('login') }}" class="header-widget" title="My Account"><img
                  src="{{ asset('assets/web') }}/images/user.png" alt="user"><span>join</span></a>
            <form class="header-form"><input type="text" placeholder="Search anything..."><button><i
                      class="fas fa-search"></i></button></form>
            <div class="header-widget-group"><a href="{{ asset('assets/web') }}/compare.html" class="header-widget"
                  title="Compare List"><i class="fas fa-random"></i><sup>0</sup></a><a
                  href="{{ asset('assets/web') }}/wishlist.html" class="header-widget" title="Wishlist"><i
                      class="fas fa-heart"></i><sup>0</sup></a><button class="header-widget header-cart"
                  title="Cartlist"><i class="fas fa-shopping-basket"></i><sup>9+</sup><span>total
                        price<small>$345.00</small></span></button>
            </div>
        </div>
    </div>
</header>