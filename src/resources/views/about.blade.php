@extends('layouts.application', ['title' => trans('home.about')])
@section('content')
<div class="pages">
  <div data-page="about" class="page no-toolbar no-navbar">
    <div class="page-content">
@include('layouts/langue')
     <div id="pages_maincontent">

          <h2 class="page_title">{{ trans('about.page_title') }}</h2>

                  <!-- Slider -->
                 <div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination" data-next-button=".swiper-button-next" data-prev-button=".swiper-button-prev">
                    <div class="swiper-wrapper">

                      <div class="swiper-slide">
			<img src="public/images/page_photo.jpg" alt="" title="" />
                       </div>
                      <div class="swiper-slide">
			<img src="public/images/page_photo2.jpg" alt="" title="" />
                       </div>
                      <div class="swiper-slide">
			<img src="public/images/page_photo3.jpg" alt="" title="" />
                       </div>

                    </div>
                    <div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
                  </div>

	<div class="page_single layout_fullwidth_padding">

              <blockquote>
                  <strong>{{ trans('about.name') }}</strong> &nbsp; {{ trans('about.description') }} &nbsp;  <strong>{{ trans('about.name') }}</strong>
              </blockquote>


        <p>&nbsp;</p>
        <h3 style="text-align: center; background: #2e6da4; color: white; padding: 5%">{{ trans('about.timeline') }}</h3>

        <p>&nbsp;</p>

        <div class="timeline">

            <div class="container left">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.1993') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.1993-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.1993-txt') }}</p>
                </div>
            </div>

            <div class="container right">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.1997') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.1997-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.1997-txt') }}</p>
                </div>
            </div>

            <div class="container left">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.1999') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.1999-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.1999-txt') }}</p>
                </div>
            </div>

            <div class="container right">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2001') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2001-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2001-txt') }}</p>
                </div>
            </div>

            <div class="container left">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2003') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2003-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2003-txt') }}</p>
                </div>
            </div>

            <div class="container right">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2004-1') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2004-1-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2004-1-txt') }}</p>
                </div>
            </div>

            <div class="container left">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2004-2') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2004-2-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2004-2-txt') }}</p>
                </div>
            </div>

            <div class="container right">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2004-3') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2004-3-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2004-3-txt') }}</p>
                </div>
            </div>

            <div class="container left">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2005') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2005-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2005-txt') }}</p>
                </div>
            </div>

            <div class="container right">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2006') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2006-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2006-txt') }}</p>
                </div>
            </div>

            <div class="container left">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2007') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2007-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2007-txt') }}</p>
                </div>
            </div>

            <div class="container right">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2008-1') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2008-1-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2008-1-txt') }}</p>
                </div>
            </div>

            <div class="container left">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2008-2') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2008-2-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2008-2-txt') }}</p>
                </div>
            </div>

            <div class="container right">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2009') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2009-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2009-txt') }}</p>
                </div>
            </div>

            <div class="container left">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2010') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2010-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2010-txt') }}</p>
                </div>
            </div>

            <div class="container right">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2013') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2013-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2013-txt') }}</p>
                </div>
            </div>

            <div class="container left">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2014') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2014-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2014-txt') }}</p>
                </div>
            </div>

            <div class="container right">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2015') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2015-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2015-txt') }}</p>
                </div>
            </div>

            <div class="container left">
                <div class="content">
                    <h2 style="color: white">{{ trans('timeline.2016') }}</h2>
                    <h6 style="color: black"><strong><strong>{{ trans('timeline.2016-title') }}</strong></strong></h6>
                    <p>{{ trans('timeline.2016-txt') }}</p>
                </div>
            </div>

        </div>


    </div>
  </div>
</div>
  </div>
</div>
@endsection
