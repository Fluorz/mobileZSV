@extends('layouts.application', ['title' => trans('Vietnam – “BCI Equinox 2017”')])
@section('content')
    <div class="pages">
        <div data-page="blogsingle" class="page no-toolbar no-navbar">
            <div class="page-content">
                @include('layouts/langue')

                <div id="pages_maincontent">

                    <a href="blog" class="backto"><img src="public/images/icons/black/back.png" alt="" title="" /></a>
                    <h2 class="blog_title">{{ trans('bci-equinox-17.blog_title') }}</h2>

                    <!-- Slider -->
                    <div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/03/15.jpg" alt="" title="" />
                            </div>
                        </div>
                    </div>
                    <div class="page_single layout_fullwidth_padding">
                        <div class="post_single">
                            <p>
                                <strong><strong>{{ trans('bci-equinox-17.txt_1') }}</strong></strong>
                            <p>&nbsp;</p>
                            {{ trans('bci-equinox-17.txt_2') }}
                            <p>&nbsp;</p>
                          
                            {{ trans('bci-equinox-17.txt_3') }}
                            <p>&nbsp;</p>
                            <p>
                                {{ trans('bci-equinox-17.txt_4') }}
                            </p>
                            <span class="post_date">{{ trans('bci-equinox-17.date') }}</span>
                            <span class="post_author"> <a href="#">ZamilSteel Vietnam</a></span>
                        </div>
                        <a href="blog" class="button_full btmint "> {{ trans('bci-equinox-17.more') }}</a>



                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
