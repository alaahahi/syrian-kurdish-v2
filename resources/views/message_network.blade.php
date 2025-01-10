@extends('layouts.content')
@section('content')
<!-- About Area -->
<div class="about-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-5 col-xxl-6 pl-0">
                <div class="about-img-2">
                    <div class="about-man">
                        <img src="assets/img/logo-syria.jpg" alt="{{ trans('text.our_mission') }}">
                    </div>
                    <div class="about-shape1">
                        <img src="assets/img/about/s-1.png" alt="Shape">
                    </div>
                    <div class="about-shape2">
                        <img src="assets/img/about/s-2.png" alt="Shape">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-xxl-6">
                <div class="about-content about-width">
                    <span>{{ trans('text.our_mission') }}</span>
                    <h2>{{ trans('text.our_mission_heading') }}</h2>
                    <p>{{ trans('text.our_mission_paragraph1') }}</p>
                    <p>{{ trans('text.our_mission_paragraph2') }}</p>

                    <div class="about-btn">
                        <a href="#" class="default-btn">{{ trans('text.learn_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-shape-2">
        <img src="assets/img/shape/about-shape1.png" alt="Shape">
    </div>
</div>
<!-- About Area End -->

<!-- Faq Area -->
<div class="faq-bg">
    <div class="faq-bg-into pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="faq-content">
                        <span>{{ trans('text.our_vision') }}</span>
                        <h2>{{ trans('text.our_vision_heading') }}</h2>
                        <p>{{ trans('text.our_vision_paragraph') }}</p>
                    </div>

                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.how_we_work') }}
                                </a>

                                <div class="accordion-content">
                                    <p>{{ trans('text.how_we_work_paragraph') }}</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.our_services') }}
                                </a>

                                <div class="accordion-content">
                                    <p>{{ trans('text.our_services_paragraph') }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="faq-img-2">
                        <img src="assets/img/14-removebg-preview.png" alt="{{ trans('text.our_vision') }}">
                    </div>
                    <div class="faq-content-text">
                        <p>
                            {{ trans('text.our_vision_paragraph') }}
                            <a href="#">{{ trans('text.learn_more') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Faq Area End -->

@endsection
