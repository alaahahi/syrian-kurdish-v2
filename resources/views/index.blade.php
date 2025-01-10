@extends('layouts.content')
@section('content')
    <!-- Main Banner -->
    <div class="main-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <span>{{ trans('text.syrian_kurdish_journalists_network') }} </span>
                        <h1>{{ trans('text.independent_media_network') }} </h1>
                        <p>
                            {{ trans('text.network_aims') }}
                        </p>

                        <div class="banner-btn">
                            <a href="{{ route('membership.request') }}"
                                class="default-btn">{{ trans('text.membership_request') }}</a>
                            <a href="{{ route('about') }}" class="default-btn active">{{ trans('text.Show_More') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-img">
                        <img src="assets/img/home1.png" alt="Banner Images">
                    </div>
                </div>
                <div class="banner-shape-1">
                    <img src="assets/img/shape/home1.png" alt="Banner Shape">
                </div>
            </div>
        </div>
        <div class="home-shape">
            <div class="shape1">
                <img src="assets/img/shape/1.png" alt="shape">
            </div>
            <div class="shape2">
                <img src="assets/img/shape/2.png" alt="shape">
            </div>
            <div class="shape3">
                <img src="assets/img/shape/3.png" alt="shape">
            </div>
            <div class="shape4">
                <img src="assets/img/shape/4.png" alt="shape">
            </div>
            <div class="shape5">
                <img src="assets/img/shape/5.png" alt="shape">
            </div>
            <div class="shape6">
                <img src="assets/img/shape/6.png" alt="shape">
            </div>
            <div class="shape7">
                <img src="assets/img/shape/3.png" alt="shape">
            </div>
        </div>
    </div>
    <!-- Main Banner End -->

    <!-- Brand Area -->
    <div class="brand-area brand-bg ptb-100">
        <div class="container">
            <div class="brand-slider owl-carousel owl-theme">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/blog/9.webp" alt="Brand Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/blog/10.jpg" alt="Brand Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/blog/13.jpeg" alt="Brand Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/blog/11.png" alt="Brand Images">
                    </a>
                </div>
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/img/blog/15.jpg" alt="Brand Images">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->

    <!-- About Area -->
    <div class="about-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xxl-6 ps-0">
                    <div class="about-img">
                        <img src="assets/img/about/1.png" alt="About Images">
                    </div>
                </div>

                <div class="col-lg-7 col-xxl-6">
                    <div class="about-content about-width">
                        <span>{{ trans('text.about_us') }}</span>
                        <h2>{{ trans('text.about_tit') }}</h2>
                        <p>
                            {{ trans('text.about_desc') }}
                        </p>


                        <div class="about-btn">
                            <a href="{{ route('about') }}" class="default-btn">{{ trans('text.Show_More') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape">
            <img src="assets/img/shape/right-side.png" alt="Shape Images">
        </div>
    </div>
    <!-- About Area End -->

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
                            <h3 class="truncate-text">{{ trans('text.network_principles_and_goals_1') }}</h3>
                        </a>
                        <p class="truncate-text">
                            {{ trans('text.network_principles_and_goals_11') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="service-card">
                        <a href="service-details.html">
                            <img src="assets/img/service-icon/2.png" alt="Images">
                        </a>
                        <a href="service-details.html">
                            <h3 class="truncate-text">{{ trans('text.network_principles_and_goals_2') }}</h3>
                        </a>
                        <p class="truncate-text">
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
                            <h3 class="truncate-text">{{ trans('text.network_principles_and_goals_3') }}</h3>
                        </a>
                        <p class="truncate-text">
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
                            <h3 class="truncate-text">{{ trans('text.network_principles_and_goals_4') }}</h3>
                        </a>
                        <p class="truncate-text">
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
                            <h3 class="truncate-text">{{ trans('text.network_principles_and_goals_5') }}</h3>
                        </a>
                        <p class="truncate-text">
                            {{ trans('text.network_principles_and_goals_51') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- Faq Area -->
    <div class="faq-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xxl-7">
                    <div class="faq-img">
                        <img src="assets/img/faq/1.png" alt="fAQ Images">
                    </div>
                </div>

                <div class="col-lg-6 col-xxl-5">
                    <div class="faq-content">
                        <span>{{ trans('text.choose_us_tit') }}</span>
                        <h2>{{ trans('text.choose_us_tit1') }}</h2>
                        <p>
                            {{ trans('text.choose_us_desc') }}
                        </p>
                    </div>

                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.choose_us_desc1') }}
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        {{ trans('text.network_principles_and_goals_21') }}

                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.choose_us_desc2') }}
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        {{ trans('text.network_principles_and_goals_21') }}
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.choose_us_desc3') }}
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        {{ trans('text.network_principles_and_goals_21') }}
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.choose_us_desc4') }}
                                </a>

                                <div class="accordion-content show">
                                    <p>
                                        {{ trans('text.network_principles_and_goals_21') }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Area End -->

    <!-- Portfolio Area -->
    <section class="portfolio-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>{{ trans('text.Portfolio') }}</span>
                <h2>{{ trans('text.portfolio_tit') }}</h2>
                <p>
                    {{ trans('text.network_goals_desc') }}

                </p>
            </div>
            <div class="portfolio-slider pt-45 owl-carousel owl-theme">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/17.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>{{ trans('text.portfolio_tit1') }}</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html">
                                <h3>{{ trans('text.portfolio_desc1') }}</h3>
                            </a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/7.jpg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>{{ trans('text.portfolio_tit2') }}</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html">
                                <h3>{{ trans('text.portfolio_desc2') }}</h3>
                            </a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/3.jpeg" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>{{ trans('text.portfolio_tit3') }}</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html">
                                <h3>{{ trans('text.portfolio_desc3') }}</h3>
                            </a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <a href="portfolio.html">
                            <img src="assets/img/portfolio/5.webp" alt="Portfolio Images">
                        </a>
                        <div class="portfolio-tag">
                            <a href="#"><span>{{ trans('text.portfolio_tit4') }}</span></a>
                        </div>
                        <div class="portfolio-content">
                            <a href="portfolio.html">
                                <h3>{{ trans('text.portfolio_desc4') }}</h3>
                            </a>
                            <i class='bx bxs-chevron-right'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->




    <!-- Member Area -->
    <div class="member-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>{{ trans('text.team_tit') }}</span>
                <h2>{{ trans('text.team_desc') }}</h2>
                <p>
                    {{ trans('text.team_desc2') }}

                </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-3 col-sm-6">
                    <div class="member-card">
                        <div class="member-img">
                            <a href="members.html">
                                <img src="assets/img/member/team1.jpg" alt="Member Images">
                            </a>
                            <div class="member-content">
                                <a href="members.html">
                                    <h3>John Doe</h3>
                                </a>
                                <span>{{ trans('text.team_tit1') }}</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-twitter'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="member-card">
                        <div class="member-img">
                            <a href="members.html">
                                <img src="assets/img/member/team2.jpg" alt="Member Images">
                            </a>
                            <div class="member-content">
                                <a href="members.html">
                                    <h3>Knot Doe</h3>
                                </a>
                                <span>{{ trans('text.team_tit2') }}</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-twitter'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="member-card">
                        <div class="member-img">
                            <a href="members.html">
                                <img src="assets/img/member/team3.png" alt="Member Images">
                            </a>
                            <div class="member-content">
                                <a href="members.html">
                                    <h3>Evanaa</h3>
                                </a>
                                <span>{{ trans('text.team_tit3') }}</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-twitter'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="member-card">
                        <div class="member-img">
                            <a href="members.html">
                                <img src="assets/img/member/team4.jpg" alt="Member Images">
                            </a>
                            <div class="member-content">
                                <a href="members.html">
                                    <h3>Knot Doe</h3>
                                </a>
                                <span>{{ trans('text.team_tit4') }}</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-twitter'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class='bx bxl-instagram'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="member-shape">
            <img src="assets/img/shape/member-shape-1.png" alt="Shape">
        </div>
    </div>
    <!-- Member Area End -->

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

    <!-- Testimonial Area -->
    <div class="testimonial-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="section-title text-center">
                <span>{{ trans('text.Testimonial') }}</span>
                <h2>{{ trans('text.Client_tit_1') }}</h2>
                <p>
                    {{ trans('text.Client_desc_1') }}

                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7 col-xxl-6">
                    <div class="testimonial-slider">
                        <div class="testimonial-icon">
                            <i class='bx bxs-quote-alt-right'></i>
                        </div>

                        <div class="testimonial-item-slider owl-carousel owl-theme">
                            <div class="testimonial-item">
                                <div class="testimonial-item-img">
                                    <img src="assets/img/testimonial/pic-1.png" alt="Testimonial Images">
                                </div>
                                <h3>{{ trans('text.Client_name_1') }}</h3>
                                <p>
                                    {{ trans('text.Client_desc_4') }}
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <div class="testimonial-item-img">
                                    <img src="assets/img/testimonial/pic-2.png" alt="Testimonial Images">
                                </div>
                                <h3>{{ trans('text.Client_name_3') }}</h3>
                                <p>
                                    {{ trans('text.Client_desc_3') }}
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <div class="testimonial-item-img">
                                    <img src="assets/img/testimonial/pic-4.png" alt="Testimonial Images">
                                </div>
                                <h3>{{ trans('text.Client_name_2') }}</h3>
                                <p>
                                    {{ trans('text.Client_desc_2') }}

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-xxl-6">
                    <div class="testimonial-img">
                        <img src="assets/img/testimonial/1.png" alt="Testimonial Images">
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-left">
            <img src="assets/img/testimonial/shape-left.png" alt="Images">
        </div>
        <div class="shape-right">
            <img src="assets/img/testimonial/shape-right.png" alt="Images">
        </div>
    </div>
    <!-- Testimonial Area End -->

    <!-- Blog Area -->
    <div class="blog-area pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>{{ trans('text.news') }}</span>
                <h2>{{ trans('text.latest_news') }}</h2>
                <p>
                    {{ trans('text.news_tit') }}

                </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/news3.webp" alt="Blog Images">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag">
                                <a href="#"><span>{{ trans('text.portfolio_tit1') }}</span></a>
                            </div>
                            <a href="blog-details.html">
                                <h3>{{ trans('text.news_tit3') }}</h3>
                            </a>
                            <a href="{{ route('news.details') }}" class="read-btn">{{ trans('text.read_more') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/news2.jpg" alt="Blog Images">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag">
                                <a href="#"><span>{{ trans('text.portfolio_tit2') }}</span></a>
                            </div>
                            <a href="blog-details.html">
                                <h3>{{ trans('text.news_tit2') }}</h3>
                            </a>
                            <a href="{{ route('news.details') }}" class="read-btn">{{ trans('text.read_more') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/news1.jpeg" alt="Blog Images">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-tag">
                                <a href="#"><span>{{ trans('text.portfolio_tit3') }}</span></a>
                            </div>
                            <a href="blog-details.html">
                                <h3>{{ trans('text.news_tit1') }}</h3>
                            </a>
                            <a href="{{ route('news.details') }}" class="read-btn">{{ trans('text.read_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Faq Area -->
    <div class="faq-area-bg pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>{{ trans('text.common_questions') }}</span>
                <h2>{{ trans('text.title') }}</h2>
                <p>{{ trans('text.description') }}</p>
            </div>
            <div class="row align-items-center pt-45">
                <div class="col-lg-6">
                    <div class="faq-accordion faq-accordion-width">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.question1') }}
                                </a>
                                <div class="accordion-content">
                                    <p>{{ trans('text.answer1') }}</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.question2') }}
                                </a>
                                <div class="accordion-content">
                                    <p>{{ trans('text.answer2') }}</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.question3') }}
                                </a>
                                <div class="accordion-content">
                                    <p>{{ trans('text.answer3') }}</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.question4') }}
                                </a>
                                <div class="accordion-content show">
                                    <p>{{ trans('text.answer4') }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-accordion faq-accordion-width">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.question5') }}
                                </a>
                                <div class="accordion-content">
                                    <p>{{ trans('text.answer5') }}</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.question6') }}
                                </a>
                                <div class="accordion-content">
                                    <p>{{ trans('text.answer6') }}</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.question7') }}
                                </a>
                                <div class="accordion-content">
                                    <p>{{ trans('text.answer7') }}</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ trans('text.question8') }}
                                </a>
                                <div class="accordion-content show">
                                    <p>{{ trans('text.answer8') }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Area End -->
@endsection
