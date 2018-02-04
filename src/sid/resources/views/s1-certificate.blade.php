@extends('layouts.application', ['title' => trans('Vietnam – S1 Certificate of Accreditation for Hanoi & Dong Nai Factories')])
@section('content')
    <div class="pages">
        <div data-page="blogsingle" class="page no-toolbar no-navbar">
            <div class="page-content">
                @include('layouts/langue')

                <div id="pages_maincontent">

                    <a href="blog" class="backto"><img src="public/images/icons/black/back.png" alt="" title="" /></a>
                    <h2 class="blog_title">{{ trans('s1-certificate.blog_title') }}</h2>

                    <!-- Slider -->
                    <div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://www.zamilsteel.com.vn/wp-content/uploads/2016/10/SSSS-1200x1684-1.jpg" alt="" title="" />
                            </div>
                        </div>
                    </div>
                    <div class="page_single layout_fullwidth_padding">
                        <div class="post_single">
                            <p>
                                <strong><strong>{{ trans('s1-certificate.txt_1') }}</strong></strong>
                            <p>&nbsp;</p>
                            {{ trans('s1-certificate.txt_2') }}
                            <p>&nbsp;</p>
                          
                            {{ trans('s1-certificate.txt_3') }}
                            <p>&nbsp;</p>
                            <p>
                                {{ trans('s1-certificate.txt_4') }}
                            </p>
                            <span class="post_date">{{ trans('s1-certificate.date') }}</span>
                            <span class="post_author"> <a href="#">ZamilSteel Vietnam</a></span>
                        </div>
                        <a href="blog" class="button_full btmint "> {{ trans('s1-certificate.more') }}</a>



                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
