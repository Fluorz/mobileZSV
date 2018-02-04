@extends('layouts.application', ['title' => trans('home.about')])
@section('content')
<div class="pages">
  <div data-page="team" class="page no-toolbar no-navbar">
    <div class="page-content">
    @include('layouts/langue')
     <div id="pages_maincontent">

         <h2 class="page_title">{{ trans('team.page_title') }}</h2>


		 <div class="page_single layout_fullwidth_padding">

			 <ul class="features_list_detailed">

				 <li>
					 <div class="feat_small_icon"><img src="public/images/icons/icon-leadership.png" alt="" title=""></div>
					 <div class="feat_small_details">
						 <h4 style="color:#0068b3">{{ trans('team.leadership') }}</a></h4>
						 <a href="#">{{ trans('team.leadership_txt') }}</a>
					 </div>
				 </li>

				 <li>
					 <div class="feat_small_icon"><img src="public/images/icons/icon-innovation.png" alt="" title=""></div>
					 <div class="feat_small_details">
						 <h4 style="color:#0068b3">{{ trans('team.innovation') }}</h4>
						 <a href="#">{{ trans('team.innovation_txt') }}</a>
					 </div>
				 </li>

				 <li>
					 <div class="feat_small_icon"><img src="public/images/icons/icon-customer.png" alt="" title=""></div>
					 <div class="feat_small_details">
						 <h4 style="color:#0068b3">{{ trans('team.customer') }}</a></h4>
						 <a href="#">{{ trans('team.customer_txt') }}</a>
					 </div>
				 </li>

				 <li>
					 <div class="feat_small_icon"><img src="public/images/icons/icon-honesty.png" alt="" title=""></div>
					 <div class="feat_small_details">
						 <h4 style="color:#0068b3">{{ trans('team.honesty') }}</a></h4>
						 <a href="#">{{ trans('team.honesty_txt') }}</a>
					 </div>
				 </li>

			 </ul>
		 </div>

      </div>


    </div>
  </div>
</div>
@endsection
