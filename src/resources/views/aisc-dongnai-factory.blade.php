@extends('layouts.application', ['title' => trans('Vietnam – AISC Certification for Dong Nai Factory')])
@section('content')
    <div class="pages">
        <div data-page="blogsingle" class="page no-toolbar no-navbar">
            <div class="page-content">
                @include('layouts/langue')

                <div id="pages_maincontent">

                    <a href="blog" class="backto"><img src="public/images/icons/black/back.png" alt="" title="" /></a>
                    <h2 class="blog_title">{{ trans('aisc-dongnai-factory.blog_title') }}</h2>

                    <!-- Slider -->
                    <div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://www.zamilsteel.com.vn/wp-content/uploads/2016/06/American-Institute-of-Steel-Construction-1200x929.jpg" alt="" title="" />
                            </div>
                        </div>
                    </div>
                    <div class="page_single layout_fullwidth_padding">
                        <div class="post_single">
                            <p><strong><strong>{{ trans('aisc-dongnai-factory.txt_1') }}</strong></strong></p>
                            <p>&nbsp;</p>
                            <h5><strong><strong><u>{{ trans('aisc-dongnai-factory.q_1') }}</u></strong></strong></h5>
                            <p>{{ trans('aisc-dongnai-factory.a_1') }}</p>
                            <p>&nbsp;</p>
                            <h5><strong><strong><u>{{ trans('aisc-dongnai-factory.q_2') }}</u></strong></strong></h5>
                            <p>{{ trans('aisc-dongnai-factory.a_2') }}</p>
                            <p>&nbsp;</p>
                            <h5><strong><strong><u>{{ trans('aisc-dongnai-factory.q_3') }}</u></strong></strong></h5>
                            <p>{{ trans('aisc-dongnai-factory.a_3') }}</p>
                            <p>&nbsp;</p>
                            <h5><strong><strong><u>{{ trans('aisc-dongnai-factory.q_4') }}</u></strong></strong></h5>
                            <p>{{ trans('aisc-dongnai-factory.a_4') }}</p>
                            <p>&nbsp;</p>
                            <span class="post_date">{{ trans('aisc-dongnai-factory.date') }}</span>
                            <span class="post_author"> <a href="#">ZamilSteel Vietnam</a></span>
                        </div>
                        <a href="blog" class="button_full btmint "> {{ trans('aisc-dongnai-factory.more') }}</a>



                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
