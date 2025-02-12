@extends('layouts.content')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title text-center">
                <h3>{{ trans('text.press_freedoms') }}</h3>
                <ul>
                    <li>
                        <a href="{{ route('/') }}">{{ trans('text.homepage') }}</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>{{ trans('text.press_freedoms') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <section class="service-area pb-70 mt-5">
        <div class="container">
            <div class="section-title text-center">
                <span>{{ trans('text.press_freedoms') }}</span>
                <h2>{{ trans('text.latest_documented_reports') }}</h2>
                <p>
                    {{ trans('text.press_freedom_description') }}
                </p>
            </div>

            <div class="service-slider owl-carousel owl-theme pt-45">
                <!-- التقرير 1 -->
                <div class="service-card">
                    <a href="#">
                        <img src="assets/img/press/1.png" alt="Images">
                    </a>
                    <div class="report-content">
                        <p><strong>📅</strong> {{ trans('text.report_date_1') }}</p>
                        <p><strong>🔹</strong> {{ trans('text.arbitrary_arrest') }}</p>
                        <p><strong>📝</strong> {{ trans('text.report_1_description') }}</p>
                    </div>
                </div>

                <!-- التقرير 2 -->
                <div class="service-card">
                    <a href="#">
                        <img src="assets/img/press/2.png" alt="Images">
                    </a>
                    <div class="report-content">
                        <p><strong>📅</strong> {{ trans('text.report_date_2') }}</p>
                        <p><strong>🔹</strong> {{ trans('text.equipment_confiscation') }}</p>
                        <p><strong>📝</strong> {{ trans('text.report_2_description') }}</p>
                    </div>
                </div>

                <!-- التقرير 3 -->
                <div class="service-card">
                    <a href="#">
                        <img src="assets/img/press/3.png" alt="Images">
                    </a>
                    <div class="report-content">
                        <p><strong>📅</strong> {{ trans('text.report_date_3') }}</p>
                        <p><strong>🔹</strong> {{ trans('text.direct_threats') }}</p>
                        <p><strong>📝</strong> {{ trans('text.report_3_description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <div class="faq-bg">
    <div class="faq-bg-into pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-content">
                        <span>{{ trans('text.press_freedoms') }}</span>
                        <h2>{{ trans('text.role_of_free_press_in_democracy') }}</h2>
                        <p>
                            {{ trans('text.press_freedom_description') }}
                        </p>
                    </div>

                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.why_is_press_freedom_necessary') }}
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        {{ trans('text.press_freedom_ensures_information_flow') }}
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.what_challenges_do_journalists_face') }}
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        {{ trans('text.journalists_face_arbitrary_arrest') }}
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.how_can_journalists_be_protected') }}
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        {{ trans('text.protecting_journalists_through_laws') }}
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.international_efforts_to_protect_journalists') }}
                                </a>

                                <div class="accordion-content show">
                                    <p>
                                        {{ trans('text.international_organizations_support') }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="faq-img-2">
                        <img src="assets/img/blog/9.webp" alt="{{ trans('text.press_freedoms') }}">
                    </div>
                    <div class="faq-content-text">
                        <p>
                            {{ trans('text.press_freedom_violations_increase') }}
                            <a href="#">{{ trans('text.view_more') }}</a>
                        </p>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-md-4">
                                <div class="single-counter">
                                    <h3 class="color-black"><span class="counter">150</span>+</h3>
                                    <p class="color-black font-size">{{ trans('text.arbitrary_arrest_cases') }}</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 col-md-4">
                                <div class="single-counter">
                                    <h3 class="color-black"><span class="counter">300</span>+</h3>
                                    <p class="color-black font-size">{{ trans('text.equipment_confiscation_cases') }}</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12 col-md-4">
                                <div class="single-counter">
                                    <h3 class="color-black"><span class="counter">500</span>+</h3>
                                    <p class="color-black font-size">{{ trans('text.direct_threats_to_journalists') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="press-freedom pb-90 mt-5">
    <div class="container">

        <div class="card shadow-sm p-4">
            <div class="row">
                <!-- نموذج توثيق الانتهاكات -->
                <div class="col-lg-6">
                    <div class="report-form">
                        <h3>{{ trans('text.report_violation') }}</h3>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">{{ trans('text.journalist_name') }}</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="violation-type">{{ trans('text.violation_type') }}</label>
                                <select id="violation-type" name="violation-type" class="form-control" required>
                                    <option value="اعتقال">{{ trans('text.arbitrary_arrest') }}</option>
                                    <option value="منع تغطية">{{ trans('text.coverage_restriction') }}</option>
                                    <option value="مصادرة معدات">{{ trans('text.equipment_confiscation') }}</option>
                                    <option value="تهديد">{{ trans('text.threat') }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="details">{{ trans('text.details') }}</label>
                                <textarea id="details" name="details" class="form-control" rows="4" required></textarea>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn default-btn">{{ trans('text.submit_report') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
