@extends('layouts.application', ['title' => trans('home.title')])
@section('content')
        <div class="pages">

          <div data-page="index" class="page homepage">
            <div class="page-content">

                <div class="navbarpages whitebg">
                    <div class="navbar_left">
                        <div class="logo_text"><a href="/">Zamil Steel</a></div>
                    </div>
                    <div class="flags">
                        <ul>
                            <li><a href="{{ url('setlocale/en') }}"><img src="https://cdn2.iconfinder.com/data/icons/flags_gosquared/24/United-Kingdom.png" /></a></li>
                            <li><a href="{{ url('setlocale/fr') }}"><img src="https://cdn2.iconfinder.com/data/icons/flags_gosquared/24/France.png" /></a></li>
                            <li><a href="{{ url('setlocale/vn') }}"><img src="https://cdn2.iconfinder.com/data/icons/flags_gosquared/24/Vietnam.png" /></a></li>
                        </ul>
                    </div>
                    <a href="#" data-panel="left" class="open-panel">
                        <div class="navbar_right"><img src="public/images/icons/white/menu.png" alt="" title="" /></div>
                    </a>
                </div>
              <!-- Slider -->
                 <div class="swiper-container slidertoolbar swiper-init" data-effect="slide" data-parallax="true" data-pagination=".swiper-pagination" data-paginationClickable="true">
                    <div class="swiper-wrapper">

                      <div class="swiper-slide" style="background-image:url(public/images/slide1.jpg);">
         <div class="slider_trans">
       <div class="slider-caption">
          <h2 data-swiper-parallax="-100%">{{ trans('index.title-1') }}</h2>
          <p data-swiper-parallax="-30%"><strong>{{ trans('index.text-1') }}</strong></p>
           <a href="peb" class="swiper_read_more"><strong> {{ trans('index.read') }} </strong></a>
       </div>
          </div>
                       </div>
                      <div class="swiper-slide" style="background-image:url(public/images/slide2.jpg);">
      <div class="slider_trans">
        <div class="slider-caption">
        <h2 data-swiper-parallax="-100%">{{ trans('index.title-2') }}</h2>
        <p data-swiper-parallax="-30%"><strong>{{ trans('index.text-2') }}</strong></p>
            <a href="ss" class="swiper_read_more"><strong> {{ trans('index.read') }} </strong></a>
        </div>
      </div>
                      </div>
                        <div class="swiper-slide" style="background-image:url(public/images/slide3.jpg);">
      <div class="slider_trans">
        <div class="slider-caption">
        <h2 data-swiper-parallax="-100%">{{ trans('index.title-3') }}</h2>
        <p data-swiper-parallax="-30%"><strong>{{ trans('index.text-3') }}</strong></p>
            <a href="maxseam" class="swiper_read_more"><strong> {{ trans('index.read') }} </strong></a>
        </div>
                       </div>
       </div>
                    </div>
                    <div class="swiper-pagination"></div>
                     <div class="swiper-button-next"></div>
                  </div>
            </div>


              @include('layouts/sidebar_botom')
          </div>
        </div>
    @endsection
