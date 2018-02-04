@extends('layouts.application', ['title' => trans('home.about')])
@section('content')
    <div class="pages">
        <div data-page="blogsingle" class="page no-toolbar no-navbar">
            <div class="page-content">
                @include('layouts/langue')

                <div id="pages_maincontent">

                    <a href="blog" class="backto"><img src="public/images/icons/black/back.png" alt="" title="" /></a>
                    <h2 class="blog_title">{{ trans('thailand-architect17-exhibition.blog_title') }}</h2>

                    <!-- Slider -->
                    <div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/06/IMG_1661-1200x900.jpg" alt="" title="" />
                            </div>
                        </div>
                    </div>
                    <div class="page_single layout_fullwidth_padding">
                        <div class="post_single">
                            <p>
                                <strong><strong>{{ trans('thailand-architect17-exhibition.txt_1') }}</strong></strong>
                            <p>&nbsp;</p>
                            {{ trans('thailand-architect17-exhibition.txt_2') }}
                            <p>&nbsp;</p>
                            <!-- Slider -->
                            <div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/06/IMG_1651-1024x768.jpg" alt="" title="" />
                                    </div>
                                </div>
                            </div>
                            {{ trans('thailand-architect17-exhibition.txt_3') }}
                            <p>&nbsp;</p>
                            <p>
                                {{ trans('thailand-architect17-exhibition.txt_4') }}
                            </p>
                            <span class="post_date">14-06-2017</span>
                            <span class="post_author"> <a href="#">ZamilSteel Vietnam</a></span>
                        </div>
                        <a href="blog" class="button_full btmint "> {{ trans('thailand-architect17-exhibition.more') }}</a>



                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
