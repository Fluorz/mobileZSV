   @extends('layouts.application', ['title' => trans('Products')])
   @section('content')
       <div class="pages">
           <div data-page="team" class="page no-toolbar no-navbar">
               <div class="page-content">
                   @include('layouts/langue')
                   <div id="pages_maincontent">

                       <h2 class="page_title">{{ trans('categories.page_title') }}</h2>


                       <div class="page_single layout_fullwidth_padding">

                           <ul class="features_list_detailed">

                               <li>
                                   <div class="feat_small_icon"><a href="peb"><img src="public/images/icons/icon-peb.png" alt="" title=""></a></div>
                                   <div class="feat_small_details">
                                       <h4 ><a href="peb">{{ trans('categories.peb') }}</a></h4>
                                   </div>
                               </li>

                               <li>
                                   <div class="feat_small_icon"><a href="ss"><img src="public/images/icons/icon-ss.png" alt="" title=""></a></div>
                                   <div class="feat_small_details">
                                       <h4 ><a href="ss">{{ trans('categories.ss') }}</a></h4>
                                   </div>
                               </li>

                               <li>
                                   <div class="feat_small_icon"><a href="maxseam"><img src="public/images/icons/icon-roof.png" alt="" title=""></a></div>
                                   <div class="feat_small_details">
                                       <h4 ><a href="maxseam">{{ trans('categories.roof') }}</a></h4>
                                   </div>
                               </li>

                               <li>
                                   <div class="feat_small_icon"><a href="components"><img src="public/images/icons/icon-component.png" alt="" title=""></a></div>
                                   <div class="feat_small_details">
                                       <h4><a href="components">{{ trans('categories.component') }}</a></h4>
                                   </div>
                               </li>

                           </ul>
                       </div>

                   </div>


               </div>
           </div>
       </div>
   @endsection
