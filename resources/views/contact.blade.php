@extends('layouts.content')
@section('content')

        <!-- Inner Banner -->
        <div class="inner-banner inner-bg6">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{ trans('text.contact_us') }}</h3>
                    <ul>
                        <li>
                           <a href="{{ route('home') }}">{{ trans('text.homepage') }}</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>{{ trans('text.contact_us') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->
        
        <!-- Contact Area -->
        <div class="contact-area pt-100 pb-70">
            <div class="container contact-width">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class='flaticon-call'></i>
                            <ul>
                                <li>
                                    <a href="tel:+1123456789">
                                        +1  1234 56 789
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+19876543210">
                                        +1  9876 543 210
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class="flaticon-paper-plane"></i>
                            <ul>
                                <li>
                                    <a href="mailto:info@bonsa.com">info@bonsa.com</a>
                                </li>
                                <li>
                                    <a href="mailto:hello@bonsa.com" >hello@bonsa.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                        <div class="contact-card">
                            <i class='flaticon-pin'></i>
                            <ul>
                                <li>
                                    28/A Street, New York, USA
                                </li>
                                <li>
                                    48/C Street, New York, USA
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->
        
        <!-- Contact Section -->
        <section class="contact-section pb-100">
            <div class="container">
                <div class="section-title text-center">
                    <span>{{ trans('text.contact_us') }}</span>
                    <h2>{{ trans('text.Drop_A_Message_For_Any_Query') }}</h2>
                  
                </div>
                <div class="contact-wrap pt-45">
                   <div class="contact-wrap-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="{{ trans('text.name') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="{{ trans('text.email') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="{{ trans('text.phone') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="{{ trans('text.subject') }}">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="{{ trans('text.message') }}"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 text-center">
                                    <button type="submit" class="default-btn page-btn text-center">
                                        {{ trans('text.send_message') }}
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                   </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

        <!-- Map Area Section Start -->
        <div class="map-area">
            <div class="container-fluid p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60436.3588348875!2d41.16348885241999!3d37.049079666748185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400a0579690ce791%3A0xcc7364779b0bff3f!2sQamishli%2C%20Syria!5e1!3m2!1sen!2sbd!4v1736476767156!5m2!1sen!2sbd" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- Map Area Section End-->

@endsection
