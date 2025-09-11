@extends('layouts.content')
@section('content')

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg1">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ trans('text.about_us') }}</h3>
                    <ul>
                        <li>
                            <a href="/">{{ trans('text.homepage') }}</a>
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

                            <!-- Network Information Section -->
                            <div class="network-info-section mt-5">
                                <div class="info-card">
                                    <h4 class="info-title">{{ trans('text.network_definition') }}</h4>
                                    <p class="info-text">{{ trans('text.network_definition_text') }}</p>
                                </div>

                                

                                <div class="info-card">
                                    <h4 class="info-title">{{ trans('text.network_vision_title') }}</h4>
                                    <p class="info-text">{{ trans('text.network_vision_text') }}</p>
                                </div>

                                <div class="info-card">
                                    <h4 class="info-title">{{ trans('text.network_message_title') }}</h4>
                                    <p class="info-text">{{ trans('text.network_message_text') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->

        <!-- Counter Area 
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
        Counter Area End -->

       <!-- Client Area-
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
        - Client Area End -->
        <!-- Network Principles Area -->
        <section class="network-principles-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>{{ trans('text.network_principles_title') }}</span>
                    <h2>{{ trans('text.network_principles_and_goals') }}</h2>
                    <p>{{ trans('text.network_goals_desc') }}</p>
                </div>

                <div class="principles-grid">
                    <div class="principle-card">
                        <div class="principle-icon">
                            <i class='bx bx-shield-check'></i>
                        </div>
                        <div class="principle-content">
                            <h3>{{ trans('text.network_principles_and_goals_1') }}</h3>
                            <p>{{ trans('text.network_principles_and_goals_11') }}</p>
                        </div>
                    </div>

                    <div class="principle-card">
                        <div class="principle-icon">
                            <i class='bx bx-group'></i>
                        </div>
                        <div class="principle-content">
                            <h3>{{ trans('text.network_principles_and_goals_2') }}</h3>
                            <p>{{ trans('text.network_principles_and_goals_21') }}</p>
                        </div>
                    </div>

                    <div class="principle-card">
                        <div class="principle-icon">
                            <i class='bx bx-world'></i>
                        </div>
                        <div class="principle-content">
                            <h3>{{ trans('text.network_principles_and_goals_3') }}</h3>
                            <p>{{ trans('text.network_principles_and_goals_31') }}</p>
                        </div>
                    </div>

                    <div class="principle-card">
                        <div class="principle-icon">
                            <i class='bx bx-award'></i>
                        </div>
                        <div class="principle-content">
                            <h3>{{ trans('text.network_principles_and_goals_4') }}</h3>
                            <p>{{ trans('text.network_principles_and_goals_41') }}</p>
                        </div>
                    </div>

                    <div class="principle-card">
                        <div class="principle-icon">
                            <i class='bx bx-heart'></i>
                        </div>
                        <div class="principle-content">
                            <h3>{{ trans('text.network_principles_and_goals_5') }}</h3>
                            <p>{{ trans('text.network_principles_and_goals_51') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<style>
    
/* Network Info Section Styles */
.network-info-section {
    margin-top: 40px;
}

.info-card {
    background: #fff;
    border-radius: 10px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border-left: 4px solid #007bff;
    transition: transform 0.3s ease;
}

.info-card:hover {
    transform: translateY(-3px);
}

.info-title {
    color: #007bff;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 15px;
    border-bottom: 2px solid #f8f9fa;
    padding-bottom: 10px;
}

.info-text {
    color: #666;
    line-height: 1.8;
    font-size: 16px;
    margin: 0;
}

.principles-list {
    margin-top: 15px;
}

.principle-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 12px;
    padding: 12px;
    background: #f8f9fa;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

.principle-item:hover {
    background: #e9ecef;
}

.principle-number {
    background: #007bff;
    color: #fff;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 14px;
    margin-right: 12px;
    flex-shrink: 0;
}

.principle-text {
    color: #333;
    font-size: 15px;
    line-height: 1.6;
    flex: 1;
}

/* Network Principles Grid Styles */
.network-principles-area {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.principles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.principle-card {
    background: #fff;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    border: 1px solid #e9ecef;
}

.principle-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #007bff, #0056b3);
}

.principle-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.principle-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #007bff, #0056b3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    position: relative;
    transition: all 0.3s ease;
}

.principle-icon i {
    font-size: 32px;
    color: #fff;
}

.principle-card:hover .principle-icon {
    transform: scale(1.1);
    background: linear-gradient(135deg, #0056b3, #004085);
}

.principle-content h3 {
    color: #333;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 15px;
    line-height: 1.3;
}

.principle-content p {
    color: #666;
    font-size: 15px;
    line-height: 1.6;
    margin: 0;
}

@media (max-width: 768px) {
    .info-card {
        padding: 20px;
        margin-bottom: 20px;
    }
    
    .info-title {
        font-size: 18px;
    }
    
    .info-text {
        font-size: 14px;
    }
    
    .principle-item {
        padding: 10px;
    }
    
    .principle-number {
        width: 22px;
        height: 22px;
        font-size: 12px;
        margin-right: 10px;
    }
    
    .principle-text {
        font-size: 14px;
    }
    
    .principles-grid {
        grid-template-columns: 1fr;
        gap: 20px;
        margin-top: 30px;
    }
    
    .principle-card {
        padding: 25px;
    }
    
    .principle-icon {
        width: 70px;
        height: 70px;
        margin-bottom: 15px;
    }
    
    .principle-icon i {
        font-size: 28px;
    }
    
    .principle-content h3 {
        font-size: 18px;
        margin-bottom: 12px;
    }
    
    .principle-content p {
        font-size: 14px;
    }
}
</style>
@endsection
