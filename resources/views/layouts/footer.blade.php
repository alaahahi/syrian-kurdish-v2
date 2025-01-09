<!-- Footer Area -->
<footer id="footer" class="footer-area bg-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-single">
                        <div class="footer-single-content">
                            <a href="index.html">
                                <img src="assets/img/sticky-logo.png" alt="Logo">
                            </a>
                            <p> {{ trans('text.about_title_1') }}</p>
                        </div>

                        <div class="newsletter-area">
                            <form class="newsletter-form" data-toggle="validator" method="POST">
                                <input type="email" class="form-control" placeholder="{{ trans('text.Email') }}"
                                    name="EMAIL" required autocomplete="off">
                                <button class="subscribe-btn" type="submit">
                                    {{ trans('text.Subscribe') }}
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-50">
                        <h3>{{ trans('text.Services') }}</h3>
                       <ul>
    <li>
        <i class='bx bxs-chevron-right'></i> 
        <a href="{{ route('network.goals') }}">{{ __('text.direct_coverage') }}</a>
    </li>
    <li>
        <i class='bx bxs-chevron-right'></i>
        <a href="{{ route('network.goals') }}">{{ __('text.news_reports') }}</a>
    </li>
    <li>
        <i class='bx bxs-chevron-right'></i>
        <a href="{{ route('network.goals') }}">{{ __('text.political_economic_analysis') }}</a>
    </li>
    <li>
        <i class='bx bxs-chevron-right'></i>
        <a href="{{ route('network.goals') }}">{{ __('text.daily_newsletters') }}</a>
    </li>
    <li>
        <i class='bx bxs-chevron-right'></i> 
        <a href="{{ route('network.goals') }}">{{ __('text.live_streaming_services') }}</a>
    </li>
    <li>
        <i class='bx bxs-chevron-right'></i>
        <a href="{{ route('network.goals') }}">{{ __('text.exclusive_interviews') }}</a>
    </li>
</ul>

                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-list">
                        <h3>{{ trans('text.Quick_Links') }}</h3>
                        <ul>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="{{ route('home') }}">{{ trans('text.Home') }}</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="{{ route('services') }}">{{ trans('text.Services') }}</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="{{ route('about') }}">{{ trans('text.About_Us') }}</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="{{ route('membership.request') }}">{{ trans('text.membership_request') }}</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="{{ route('news.details') }}">{{ trans('text.News') }}</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="{{ route('contact') }}">{{ trans('text.Contact') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-20">
                        <h3>{{ trans('text.Contact_Us') }}</h3>
                        <ul>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="tel:+1123456789">+1 1234 56 789</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="tel:+19876543210">+1 9876 543 210</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="mailto:info@bonsa.com">info@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="bottom-text text-center">
                        <p>
                            {{ trans('text.Copyright') }} @
                            <script>
                                document.write(new Date().getFullYear())
                            </script>{{ trans('text.reserved_by') }}
                            <a href="#" target="_blank">Alaa's Team</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->


<!-- Jquery Min JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Meanmenu JS -->
<script src="assets/js/meanmenu.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Ajaxchimp Min JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator Min JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact Form JS -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>
</body>

</html>
