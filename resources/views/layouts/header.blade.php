<!doctype html>
<?php $select_lang = app()->getLocale() ?? 'ar';
setcookie('selectedlang', $select_lang, time() + 60 * 24 * 30, '/');
?>
<html lang="<?= $select_lang ?>" @if ($select_lang == 'ar')
dir="rtl"
@endif>

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if ($select_lang == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    @endif
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
<!-- Animate Min CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
<!-- Boxicons CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
<!-- Flaticon CSS -->
<link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
<!-- Meanmenu CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<!-- Theme Dark CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">

@if ($select_lang == 'ar')
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
@endif

<!-- Title -->
<title>{{ trans('text.syrian_kurdish_journalists_network') }}</title>


   <meta name="description" content="{{ trans('text.site_description') }}">

   <meta name="keywords" content="شبكة الصحفيين الكُرد  السوريين, أخبار, إعلام, صحافة, حرية التعبير">

   <meta name="robots" content="index, follow">

   <meta property="og:title" content="{{ trans('text.syrian_kurdish_journalists_network') }}">
   <meta property="og:description" content="{{ trans('text.site_description') }}">
   <meta property="og:image" content="{{ asset('images/logo.png') }}">
   <meta property="og:url" content="{{ url()->current() }}">
   <meta property="og:type" content="website">

   <meta name="twitter:card" content="summary_large_image">
   <meta name="twitter:title" content="{{ trans('text.syrian_kurdish_journalists_network') }}">
   <meta name="twitter:description" content="{{ trans('text.site_description') }}">
   <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

   <link rel="canonical" href="{{ url()->current() }}">

 
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

</head>

<body>
    <!-- Start Preloader -->
    <div class="preloader">
        <div class="preloader-wave"></div>
    </div>
    <!-- End Preloader -->
    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="/" class="logo">
                <img src="{{ asset('assets/img/logo.png') }}" class="logo-one" alt="Logo">
                <img src="{{ asset('assets/img/sticky-logo.png') }}" class="logo-two" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                    </a>
                    <a class="navbar-brand-sticky" href="/">
                        <img src="{{ asset('assets/img/sticky-logo.png') }}" alt="Logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link active">
                                    {{ trans('text.News') }}
                                </a>
                            </li>
                             <li class="nav-item">
                                <a href="{{ route('services') }}" class="nav-link">
                                    {{ trans('text.press_freedoms_h') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.structure') }}" class="nav-link">
                                    {{ trans('text.administrative_structure') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('membership') }}" class="nav-link">
                                    {{ trans('text.membership') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link">
                                    {{ trans('text.about_network') }}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">
                                    {{ trans('text.contact') }}
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="languageDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ app()->getLocale() === 'ar' ? 'AR' : (app()->getLocale() === 'en' ? 'EN' : 'KU') }}
                                    <i class='bx bxs-chevron-right'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" style="min-width: 100px;"
                                    aria-labelledby="languageDropdown">
                                    <li class="nav-item">
                                        <a href="{{ route('lang.switch', 'en') }}"
                                            class="dropdown-item {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                                            🇺🇸 English
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('lang.switch', 'ku') }}"
                                            class="dropdown-item {{ app()->getLocale() === 'ku' ? 'active' : '' }}">
                                            KR الكُرد ية
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('lang.switch', 'ar') }}"
                                            class="dropdown-item {{ app()->getLocale() === 'ar' ? 'active' : '' }}">
                                            🇸🇦 العربية
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('lang.switch', 'de') }}"
                                            class="dropdown-item {{ app()->getLocale() === 'de' ? 'active' : '' }}">
                                            🇩🇪 الالمانية
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                        <div class="menu-btn">
                            <a href="{{ route('membership.request') }}"
                                class="seo-btn">{{ trans('text.membership_request') }} </a>
                        </div>
                    </div>



                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
