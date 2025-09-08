@extends('layouts.content')
@php
    // البحث عن ترجمة العنوان والـ slug بلغة التطبيق الحالية
    $locale = app()->getLocale();
    $translations = $post->translations->whereIn('column_name', ['title', 'slug','content'])->where('locale', $locale);
    // استخراج الترجمة إن وجدت
    $translatedTitle = optional($translations->where('column_name', 'title')->first())->value ?? $post->title;
    $translatedSlug = optional($translations->where('column_name', 'slug')->first())->value ?? $post->slug;
    $translatedContent = optional($translations->where('column_name', 'content')->first())->value ?? $post->content;

@endphp
@section('content')
        <!-- Inner Banner -->
        <div class="inner-banner inner-bg5">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>{{$translatedTitle  ?? ''}}</h3>
                    <ul>
                        <li>
                            <a href="/">{{ trans('text.homepage') }}</a>
                        </li>
                        <li>
                            <i class='bx bxs-chevrons-right'></i>
                        </li>
                        <li>{{$translatedTitle ?? ''}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <div class="blog-dtls ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-dtls-content">
                            <div class="blog-dtls-img">
                                <img src="{{ env('APP_URL') }}/storage/{{ $post->image ?? '' }}" alt="Blog Images">
                            </div>
                            <div class="blog-text">
                                <h2>{{$translatedTitle  ?? ''}}</h2>
                                {!! $translatedContent ?? '' !!}
                            </div>
                            <div class="row bolg-gallery">
                                @php
                                $gallery = is_string($post->gallery) ? json_decode($post->gallery, true) : $post->gallery;
                                @endphp
                                
                                @if (!empty($gallery) && is_array($gallery))
                                    @foreach ($gallery as $image)
                                        <div class="bolg-gallery-item">
                                            <img src="{{ env('APP_URL'). '/storage/' . str_replace('\\', '/', $image) }}" alt="Blog Images">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        
                            <div class="article-footer">
								<div class="article-tags">
									<span><i class='bx bx-share-alt'></i></span>
									<a href="#">{{ trans('text.share') }}</a>
								</div>

								<div class="article-share">
									<ul class="social">
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
												<i class='bx bxl-linkedin'></i>
											</a>
										</li>
										<li>
											<a href="#" target="_blank">
												<i class='bx bxl-pinterest-alt'></i>
											</a>
										</li>
										
									</ul>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-area">
                            <!-- Search Widget -->
                            <div class="widget widget_search">
                                <h3 class="widget-title">{{ trans('text.search_now') }}</h3>
                                <div class="post-wrap">
                                    <form class="search-form">
                                        <label>
                                            <span class="screen-reader-text">{{ trans('text.search_for') }}</span>
                                            <input type="search" class="search-field" placeholder="{{ trans('text.search') }}...">
                                        </label>
                                        <button type="submit"><i class='bx bx-search'></i></button>
                                    </form>
                                </div>
                            </div>
                    
                            <!-- Popular Posts Widget -->
                            <section class="widget widget-popular-post">
                                <h3 class="widget-title">{{ trans('text.popular_posts') }}</h3>
                                @foreach ($posts as $post)
                                @php
                                    $translationTitle = $post->translations->where('column_name', 'title')
                                                      ->where('locale', app()->getLocale())->first();
                                    $translationSlug = $post->translations->where('column_name', 'slug')
                                                      ->where('locale', app()->getLocale())->first();
                            
                                    $translatedTitle = $translationTitle ? $translationTitle->value : $post->title;
                                    $translatedSlug = $translationSlug ? $translationSlug->value : $post->slug;

                                    $dateParts = explode('-', $post->published_at); // تقسيم التاريخ إلى [السنة, الشهر, اليوم]
                                    $year = $dateParts[0] ?? '';
                                    $month = date('M', mktime(0, 0, 0, $dateParts[1] ?? 1, 10)); // تحويل الرقم إلى اسم الشهر
                                @endphp
                                <div class="post-wrap">
                                    <article class="item">
                                        <a href="{{ trans('text.blogs') }}/{{ $translatedSlug }}/" class="thumb">
                                            <span class="fullimage cover bg1" role="img"></span>
                                        </a>
                                        <div class="info">
                                            <time datetime="2025-02-10">{{ $month }}, {{ $year }}</time>
                                            <h4 class="title usmall">
                                                <a href="{{ trans('text.blogs') }}/{{ $translatedSlug }}/">
                                                    {{ $translatedTitle }}
                                                </a>
                                            </h4>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                            </section>
                    
                            <!-- Archives Widget -->
                            <section class="widget widget_categories">
                                <h3 class="widget-title">{{ trans('text.archives') }}</h3>
                                <div class="post-wrap">
                                    <ul>
                                        <li><a href="#">January <span>2025</span></a></li>
                                        <li><a href="#">February <span>2025</span></a></li>
                                    </ul>
                                </div>
                            </section>
                    
                            <!-- Categories Widget -->
                            <section class="widget widget_categories">
                                <h3 class="widget-title">{{ trans('text.categories') }}</h3>
                                <div class="post-wrap">
                                    <ul>
                                        <li><a href="#">{{ trans('text.data_analysis') }} <span>(10)</span></a></li>
                                        <li><a href="#">{{ trans('text.data_research') }} <span>(07)</span></a></li>
                                    </ul>
                                </div>
                            </section>
                    
                            <!-- Tags Widget -->
                            <section class="widget widget_tag">
                                <h3 class="widget-title">{{ trans('text.tags') }}</h3>
                                <div class="post-wrap">
                                    <ul>
                                        <li><a href="#">{{ trans('text.seo') }}</a></li>
                                        <li><a href="#">{{ trans('text.marketing') }}</a></li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


@endsection