@extends('layouts.application', ['title' => trans('Blog')])
@section('content')
<div class="pages">
  <div data-page="blog" class="page no-toolbar no-navbar">
    <div class="page-content">
    @include('layouts/langue')
	
     <div id="pages_maincontent">
      
      <h2 class="page_title">{{ trans('blog.page_title') }}</h2>
     <div class="page_single layout_fullwidth_padding">  
   
            <div class="list-block">
              <ul class="posts">

                  <li class="swipeout">
                  <div class="swipeout-content item-content">
                    <div class="post_entry">
                        <div class="post_thumb"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/06/IMG_1661-1200x900.jpg" alt="" title="" /></div>
                            <div class="post_details">
                                <div class="post_category"><a href="thailand-architect17-exhibition">{{ trans('blog.p1_title') }}</a></div>
		                    </div>
                    </div>
                  </div>
                </li>

                  <li class="swipeout">
                      <div class="swipeout-content item-content">
                          <div class="post_entry">
                              <div class="post_thumb"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/04/Cambodia-Goes-Campus-8-1024x435.jpg" alt="" title="" /></div>
                              <div class="post_details">
                                  <div class="post_category"><a href="cambodia-campus-17">{{ trans('blog.p2_title') }}</a></div>
                              </div>
                          </div>
                      </div>
                  </li>

                  <li class="swipeout">
                      <div class="swipeout-content item-content">
                          <div class="post_entry">
                              <div class="post_thumb"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/04/golden-dragon-1200x675.jpg" alt="" title="" /></div>
                              <div class="post_details">
                                  <div class="post_category"><a href="vietnam-awards-16">{{ trans('blog.p3_title') }}</a></div>
                              </div>
                          </div>
                      </div>
                  </li>

                  <li class="swipeout">
                      <div class="swipeout-content item-content">
                          <div class="post_entry">
                              <div class="post_thumb"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/04/ESC_0437-1200x800.jpg" alt="" title="" /></div>
                              <div class="post_details">
                                  <div class="post_category"><a href="indochina-airport-17">{{ trans('blog.p4_title') }}</a></div>
                              </div>
                          </div>
                      </div>
                  </li>

                  <li class="swipeout">
                      <div class="swipeout-content item-content">
                          <div class="post_entry">
                              <div class="post_thumb"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/03/15.jpg" alt="" title="" /></div>
                              <div class="post_details">
                                  <div class="post_category"><a href="bci-equinox-17">{{ trans('blog.p5_title') }}</a></div>
                              </div>
                          </div>
                      </div>
                  </li>

                  <li class="swipeout">
                      <div class="swipeout-content item-content">
                          <div class="post_entry">
                              <div class="post_thumb"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2016/10/SSSS-1200x1684-1.jpg" alt="" title="" /></div>
                              <div class="post_details">
                                  <div class="post_category"><a href="s1-certificate">{{ trans('blog.p6_title') }}</a></div>
                              </div>
                          </div>
                      </div>
                  </li>

                  <li class="swipeout">
                      <div class="swipeout-content item-content">
                          <div class="post_entry">
                              <div class="post_thumb"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2016/10/Banner-chuan.jpg" alt="" title="" /></div>
                              <div class="post_details">
                                  <div class="post_category"><a href="indonesia-campus-16">{{ trans('blog.p7_title') }}</a></div>
                              </div>
                          </div>
                      </div>
                  </li>

                   <li class="swipeout">
                      <div class="swipeout-content item-content">
                          <div class="post_entry">
                              <div class="post_thumb"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2016/06/American-Institute-of-Steel-Construction-1200x929.jpg" alt="" title="" /></div>
                              <div class="post_details">
                                  <div class="post_category"><a href="thailand-architect17-exhibition">{{ trans('blog.p8_title') }}</a></div>
                              </div>
                          </div>
                      </div>
                  </li>

                  <li class="swipeout">
                      <div class="swipeout-content item-content">
                          <div class="post_entry">
                              <div class="post_thumb"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2016/07/sua-01.jpg" alt="" title="" /></div>
                              <div class="post_details">
                                  <div class="post_category"><a href="phil-construct-visayas-16">{{ trans('blog.p9_title') }}</a></div>
                              </div>
                          </div>
                      </div>
                  </li>


                  <li class="swipeout">
                      <div class="swipeout-content item-content">
                          <div class="post_entry">
                              <div class="post_thumb"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/07/L1-4785-Canon-Electronic-Vietnam-in-Hung-Yen-Province.jpg" alt="" title="" /></div>
                              <div class="post_details">
                                  <div class="post_category"><a href="canon-factory">{{ trans('blog.p10_title') }}</a></div>
                              </div>
                          </div>
                      </div>
                  </li>


              </ul>
            </div>
			
       </div>		
      
      </div>
      
      
    </div>
  </div>
</div>
@endsection