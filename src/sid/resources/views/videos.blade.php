@extends('layouts.application', ['title' => trans('home.video')])
@section('content')
<div class="pages">
  <div data-page="videos" class="page no-toolbar no-navbar">
    <div class="page-content">
    @include('layouts/langue')	
     <div id="pages_maincontent">
      
          <h2 class="page_title">VIDEOS</h2>
          
              <div class="page_single layout_fullwidth_padding">
                   
                    <div class="videocontainer">
                   <iframe width="100%" height="180" src="https://www.youtube.com/embed/5kmtpTrDjyQ" frameborder="0" allowfullscreen></iframe>
                    </div>
		 <h3 class="page_subtitle">Zamil Steel Buildings Vietnam</h3>
                   
                    <div class="videocontainer">
                    <iframe width="100%" height="180" src="https://www.youtube.com/embed/V0iiILpJjH4" frameborder="0" allowfullscreen></iframe>
                    </div>
		 <h3 class="page_subtitle">MaxSEAM Roof System</h3>
                    
              </div>
      
      </div>
      
      
    </div>
  </div>
</div>
@endsection