@extends('layouts.content')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title text-center">
                <h3>{{ trans('text.principles_of_networking') }}</h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">{{ trans('text.homepage') }}</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>{{ trans('text.principles_of_networking') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Service Area -->
    <section class="service-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>{{ trans('text.principles_of_networking') }}</span>
                <h2>{{ trans('text.network_goal_title') }}</h2>
                <p>
                    {{ trans('text.network_goals_desc') }}
                </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="service-details.html">
                            <img src="assets/img/service-icon/1.png" alt="Images">
                        </a>
                        <a href="service-details.html">
                            <h3>{{ trans('text.network_principles_and_goals_1') }}</h3>
                        </a>
                       
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="service-details.html">
                            <img src="assets/img/service-icon/2.png" alt="Images">
                        </a>
                        <a href="service-details.html">
                            <h3>{{ trans('text.network_principles_and_goals_2') }}</h3>
                        </a>
                        <p>
                           {{ trans('text.network_principles_and_goals_21') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="service-details.html">
                            <img src="assets/img/service-icon/3.png" alt="Images">
                        </a>
                        <a href="service-details.html">
                            <h3>{{ trans('text.network_principles_and_goals_3') }}</h3>
                        </a>
                        <p>
                           {{ trans('text.network_principles_and_goals_31') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="service-details.html">
                            <img src="assets/img/service-icon/4.png" alt="Images">
                        </a>
                        <a href="service-details.html">
                            <h3>{{ trans('text.network_principles_and_goals_4') }}</h3>
                        </a>
                        <p>
                            {{ trans('text.network_principles_and_goals_41') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="service-details.html">
                            <img src="assets/img/service-icon/5.png" alt="Images">
                        </a>
                        <a href="service-details.html">
                            <h3>{{ trans('text.network_principles_and_goals_5') }}</h3>
                        </a>
                        <p>
                           {{ trans('text.network_principles_and_goals_51') }}
                        </p>
                    </div>
                </div>

               

                <div class="col-lg-12">
                    <div class="pagination-area">
                        <nav aria-label="Page navigation example text-center">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link page-links" href="#">
                                        <i class='bx bx-chevrons-left'></i>
                                    </a>
                                </li>
                                <li class="page-item current">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class='bx bx-chevrons-right'></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->
@endsection
