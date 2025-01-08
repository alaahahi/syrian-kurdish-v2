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
                    <h2>أهداف الشبكة الإخبارية</h2>
                    <p>
                        تسعى شبكتنا الإخبارية إلى تقديم تغطية شاملة وموثوقة للأحداث الجارية محلياً ودولياً، 
                        مع التركيز على المصداقية والشفافية. نحن نهدف إلى أن نكون المصدر الأول للأخبار لكل من 
                        يبحث عن المعلومة الدقيقة والتحليل العميق.
                    </p>
                    <p>
                        نلتزم بتقديم محتوى إخباري متوازن يعكس تنوع وجهات النظر، ونعمل على تعزيز الوعي العام 
                        عبر تقارير وتحليلات معمقة تلبي احتياجات جميع فئات المجتمع.
                    </p>
                    <p>
                        من خلال فريق عملنا المحترف وشبكة مراسلينا المنتشرين حول العالم، نضمن نقل الأحداث مباشرة 
                        وتوفير أحدث الأخبار لحظة بلحظة.
                    </p>
                    <div class="service-dtls-btn">
                        <a href="contact.html" class="default-btn">تواصل معنا</a>
                    </div>
                    <div class="pager-area">
                        <ul class="pager">
                            <li class="previous"><a href="#">السابق</a></li>
                            <li class="next"><a href="#">التالي</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="common-catagory">
                    <h3>خدمات الشبكة الإخبارية</h3>
                    <ul class="catagory">
                        <li>
                            <a href="#">تغطية مباشرة للأحداث <i class='bx bx-plus'></i></a>
                        </li>
                        <li>
                            <a href="#">تقارير وتحقيقات إخبارية <i class='bx bx-plus'></i></a>
                        </li>
                        <li>
                            <a href="#">تحليلات سياسية واقتصادية <i class='bx bx-plus'></i></a>
                        </li>
                        <li>
                            <a href="#">نشرات إخبارية يومية <i class='bx bx-plus'></i></a>
                        </li>
                        <li>
                            <a href="#">خدمات بث مباشر <i class='bx bx-plus'></i></a>
                        </li>
                        <li>
                            <a href="#">مقابلات حصرية مع صناع القرار <i class='bx bx-plus'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Dtls End -->





@endsection
