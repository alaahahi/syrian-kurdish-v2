<!doctype html>
<?php $select_lang = app()->getLocale() ?? 'ar';
setcookie('selectedlang', $select_lang, time() + 60 * 24 * 30, '/');
?>
<html lang="<?= $select_lang ?>"  @if($select_lang=='ar') dir="rtl" @endif>
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         @if($select_lang=='ar')
         <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
         @else
         <link rel="stylesheet" href="assets/css/bootstrap.min.css">
         @endif

        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="assets/css/theme-dark.css">
        @if($select_lang=='ar')
        <link rel="stylesheet" href="assets/css/rtl.css">
        @endif
        <!-- Title -->
        <title>{{trans('text.syrian_kurdish_journalists_network')}}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
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
                   <a href="index.html" class="logo">
                       <img src="assets/img/logo.png" class="logo-one" alt="Logo">
                       <img src="assets/img/sticky-logo.png" class="logo-two" alt="Logo">
                   </a>
               </div>

               <!-- Menu For Desktop Device -->
               <div class="main-nav">
                   <div class="container">
                       <nav class="navbar navbar-expand-md navbar-light ">
                           <a class="navbar-brand" href="index.html">
                               <img src="assets/img/logo.png" alt="Logo">
                           </a>
                           <a class="navbar-brand-sticky" href="index.html">
                               <img src="assets/img/sticky-logo.png" alt="Logo">
                           </a>

                           <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                               <ul class="navbar-nav m-auto">
                                   <li class="nav-item">
                                       <a href="{{ route('home') }}" class="nav-link active">
                                           {{trans('text.homepage')}}
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="{{ route('services') }}" class="nav-link">
                                        {{trans('text.principles_of_networking')}}
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="{{ route('network.goals') }}" class="nav-link">
                                        {{trans('text.network_goals')}}
                                        </a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="#" class="nav-link">
                                        {{trans('text.network_message')}}
                                       </a>
                                   </li>
                                   <li class="nav-item">
                                       <a href="{{ route('about') }}" class="nav-link">
                                        {{trans('text.about_network')}}
                                       </a>
                                   </li>

                                   <li class="nav-item">
                                       <a href="{{ route('contact') }}" class="nav-link">
                                        {{trans('text.contact')}}
                                       </a>
                                   </li>
                               </ul>

                               <div class="menu-btn">
                                   <a href="#" class="seo-btn">{{trans('text.membership_request')}}  </a>
                               </div>
                           </div>
                       </nav>
                   </div>
               </div>
           </div>
           <!-- End Navbar Area -->
