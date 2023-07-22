@extends('web.layouts.app')
@section('main-body')
@include('web.component.slider')
@include('web.component.category')
{{-- @include('web.component.brands') --}}
@include('web.component.recent-sold-items')
{{-- <div class="section promo-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="promo-img"><a href="{{ asset('assets/web') }}/#"><img
                          src="{{ asset('assets/web') }}/images/promo/home/03.jpg" alt="promo"></a></div>
            </div>
        </div>
    </div>
</div>
@include('web.component.featured-items')
<section class="section countdown-part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto">
                <div class="countdown-content">
                    <h3>special discount offer for vegetable items</h3>
                    <p>Reprehenderit sed quod autem molestiae aut modi minus veritatis iste dolorum suscipit quis
                        voluptatum fugiat mollitia quia minima</p>
                    <div class="countdown countdown-clock" data-countdown="2022/12/22"><span
                          class="countdown-time"><span>00</span><small>days</small></span><span
                          class="countdown-time"><span>00</span><small>hours</small></span><span
                          class="countdown-time"><span>00</span><small>minutes</small></span><span
                          class="countdown-time"><span>00</span><small>seconds</small></span></div><a
                      href="{{ asset('assets/web') }}/shop-4column.html" class="btn btn-inline"><i
                          class="fas fa-shopping-basket"></i><span>shop now</span></a>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="countdown-img"><img src="{{ asset('assets/web') }}/images/countdown.png" alt="countdown">
                    <div class="countdown-off"><span>20%</span><span>off</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('web.component.new-items')
<div class="section promo-part">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                <div class="promo-img"><a href="{{ asset('assets/web') }}/#"><img
                          src="{{ asset('assets/web') }}/images/promo/home/01.jpg" alt="promo"></a></div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                <div class="promo-img"><a href="{{ asset('assets/web') }}/#"><img
                          src="{{ asset('assets/web') }}/images/promo/home/02.jpg" alt="promo"></a></div>
            </div>
        </div>
    </div>
</div>
@include('web.component.top-niche')
@include('web.component.testimonial')
@include('web.component.blog')
<section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 col-xl-7">
                <div class="news-text">
                    <h2>Get 20% Discount for Subscriber</h2>
                    <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 col-xl-5">
                <form class="news-form"><input type="text" placeholder="Enter Your Email Address"><button><span><i
                              class="icofont-ui-email"></i>Subscribe</span></button></form>
            </div>
        </div>
    </div>
</section>
<section class="intro-part">
    <div class="container">
        <div class="row intro-content">
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-truck"></i></div>
                    <div class="intro-content">
                        <h5>free home delivery</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                    <div class="intro-content">
                        <h5>instant return policy</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-headset"></i></div>
                    <div class="intro-content">
                        <h5>quick support system</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-lock"></i></div>
                    <div class="intro-content">
                        <h5>secure payment way</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
