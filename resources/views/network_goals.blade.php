@extends('layouts.content')

@section('content')
       <!-- Inner Banner -->
        <div class="inner-banner inner-bg3">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ trans('text.network_goals') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">{{ trans('text.homepage') }}</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>{{ trans('text.network_goals') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

<!-- Service Dtls -->
<div class="service-dtls pt-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-dtls-content">
                    <div class="service-dtls-img">
                        <img src="assets/img/service-icon/8.jpg" alt="Service Image">
                    </div>
                    <h2>{{ trans('text.service_details_heading') }}</h2>
                    <p>
                        {{ trans('text.service_details_paragraph1') }}
                    </p>
                    <p>
                        {{ trans('text.service_details_paragraph2') }}
                    </p>
                    <p>
                        {{ trans('text.service_details_paragraph3') }}
                    </p>
                    <div class="service-dtls-btn">
                        <a href="contact.html" class="default-btn">{{ trans('text.contact_us') }}</a>
                    </div>
                    <div class="pager-area">
                        <ul class="pager">
                            <li class="previous"><a href="#">{{ trans('text.previous') }}</a></li>
                            <li class="next"><a href="#">{{ trans('text.next') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="common-catagory">
                    <h3>{{ trans('text.news_network_services') }}</h3>
                    <ul class="catagory">
                        <li>
                            <a href="#">{{ trans('text.live_coverage') }} <i class='bx bx-plus'></i></a>
                        </li>
                        <li>
                            <a href="#">{{ trans('text.news_reports') }} <i class='bx bx-plus'></i></a>
                        </li>
                        <li>
                            <a href="#">{{ trans('text.political_economic_analysis') }} <i class='bx bx-plus'></i></a>
                        </li>
                        <li>
                            <a href="#">{{ trans('text.daily_newsletters') }} <i class='bx bx-plus'></i></a>
                        </li>
                        <li>
                            <a href="#">{{ trans('text.live_streaming') }} <i class='bx bx-plus'></i></a>
                        </li>
                        <li>
                            <a href="#">{{ trans('text.exclusive_interviews') }} <i class='bx bx-plus'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Dtls End -->






@endsection
