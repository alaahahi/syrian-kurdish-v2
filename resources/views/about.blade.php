@extends('layouts.content')
@section('content')

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg1">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ trans('text.about_us') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ trans('text.homepage') }}</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>{{ trans('text.about_us') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- About Area -->
        <div class="about-area about-max pt-100 pb-70">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xxl-6">
                        <div class="about-img about-ml">
                            <img src="assets/img/logo-syria.jpg" alt="About Images">
                        </div>
                    </div>

                    <div class="col-lg-7 col-xxl-6">
                        <div class="about-content about-width">
                            <span>{{ trans('text.about_us') }}</span>
                            <h2>{{trans('text.about_title_1')}}</h2>
                            <p>
                               {{ trans('text.about_desc_1') }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->

        <!-- Counter Area -->
        <div class="counter-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-success'></i>
                            <h3><span class="counter">15</span></h3>
                            <p>{{ trans('text.Media_History') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-launch'></i>
                            <h3><span class="counter">900</span>+</h3>
                            <p>{{ trans('text.Press_Coverage') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-customer'></i>
                            <h3><span class="counter">800</span>+</h3>
                            <p>{{ trans('text.views') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-counter">
                            <i class='flaticon-team-building'></i>
                            <h3><span class="counter">25</span>+</h3>
                            <p>{{ trans('text.Expert_Members') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End -->

       <!-- Client Area -->
<div class="client-area pt-100 pb-70">
    <div class="container-fluid p-0">
        <div class="section-title text-center">
            <span>{{ trans('text.Testimonial') }}</span>
            <h2>{{ trans('text.Client_tit_1') }}</h2>
            <p>{{ trans('text.Client_desc_1') }}</p>
        </div>

        <div class="client-slider owl-carousel owl-theme">
            <div class="client-item">
                <div class="client-item-img">
                    <img src="assets/img/testimonial/pic-1.png" alt="Testimonial Images">
                </div>
                <h3>{{ trans('text.Client_name_1') }}</h3>
                <p>
                {{ trans('text.Client_desc_2') }}
                </p>
            </div>

            <div class="client-item">
                <div class="client-item-img">
                    <img src="assets/img/testimonial/pic-4.png" alt="Testimonial Images">
                </div>
                <h3>{{ trans('text.Client_name_2') }}</h3>
                <p>
                {{ trans('text.Client_desc_3') }}
                </p>
            </div>

            <div class="client-item">
                <div class="client-item-img">
                    <img src="assets/img/testimonial/testimonial-2.jpg" alt="Testimonial Images">
                </div>
                <h3>{{ trans('text.Client_name_3') }}</h3>
                <p>
                 {{ trans('text.Client_desc_4') }}
                </p>
            </div>

            <div class="client-item">
                <div class="client-item-img">
                    <img src="assets/img/testimonial/pic-3.png" alt="Testimonial Images">
                </div>
                <h3>{{ trans('text.Client_name_4') }}</h3>
                <p>
                {{ trans('text.Client_desc_5') }}
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Client Area End -->


@endsection
