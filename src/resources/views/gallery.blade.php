@extends('layouts.application', ['title' => trans('home.title')])
@section('content')
<div class="pages">
    <div data-page="photos" class="page no-toolbar no-navbar">
        <div class="page-content">

            @include('layouts/langue')

            <div class="bottombarpages">
                <div class="gallery_switch">
                    <a href="#" id="view13" class="switcher active"><img src="public/images/switch_13_active.png" alt="Grid"></a>
                    <a href="#" id="view12" class="switcher"><img src="public/images/switch_12.png" alt="Grid"></a>
                    <a href="#" id="view11" class="switcher"><img src="public/images/switch_11.png" alt="List"></a>
                </div>
            </div>

            <div id="pages_maincontent">

                <h2 class="page_title">PROJECTS GALLERY</h2>

                <div class="page_single layout_fullwidth">

                    <div class="photo-categories">
                        <a href="#tab1p" class="tab-link active category-link">SS</a>
                        <a href="#tab2p" class="tab-link category-link">PEB</a>
                        <a href="#tab3p" class="tab-link category-link">Flowers</a>
                    </div>


                    <div class="tabs-animated-wrap photos_tabs">
                        <div class="tabs">
                            <div id="tab1p" class="tab active">
                                <ul id="photoslist" class="photo_gallery_13">
                                    <li><a rel="gallery-3" href="https://www.zamilsteel.com.vn/wp-content/uploads/2017/11/ZR-0028-Photo-1.jpg" title="Photo title" class="swipebox"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/11/ZR-0028-Photo-1.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="https://www.zamilsteel.com.vn/wp-content/uploads/2016/09/charpente_metalique-1.jpg" title="Photo title" class="swipebox"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2016/09/charpente_metalique-1.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="https://www.zamilsteel.com.vn/wp-content/uploads/2017/11/ZR-0027-Golden-Bay-Terminal-in-Manila-Philippines.03-1.jpg" title="Photo title" class="swipebox"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/11/ZR-0027-Golden-Bay-Terminal-in-Manila-Philippines.03-1.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="https://www.zamilsteel.com.vn/wp-content/uploads/2017/11/IMG_1003-1.jpg" title="Photo title" class="swipebox"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/11/IMG_1003-1.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="https://www.zamilsteel.com.vn/wp-content/uploads/2017/11/ZR-0018-Nui-Phao-Mining-Project-in-Thai-Nguyen-Province-Vietnam.11jpg.jpg" title="Photo title" class="swipebox"><img src="https://www.zamilsteel.com.vn/wp-content/uploads/2017/11/ZR-0018-Nui-Phao-Mining-Project-in-Thai-Nguyen-Province-Vietnam.11jpg.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo6.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo6.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo7.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo7.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo8.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo8.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo9.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo9.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo10.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo10.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo11.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo11.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo12.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo12.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo13.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo13.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo14.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo14.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo15.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo15.jpg" alt="image"/></a></li>
                                    <div class="clearleft"></div>
                                </ul>
                            </div>

                            <div id="tab2p" class="tab">
                                <ul id="photoslist" class="photo_gallery_13">
                                    <li><a rel="gallery-3" href="public/images/photos/photo7.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo7.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo8.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo8.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo9.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo9.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo10.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo10.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo11.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo11.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo12.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo12.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo13.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo13.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo14.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo14.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo15.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo15.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo1.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo1.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo2.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo2.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo3.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo3.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo4.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo4.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo5.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo5.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo6.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo6.jpg" alt="image"/></a></li>

                                    <div class="clearleft"></div>
                                </ul>
                            </div>

                            <div id="tab3p" class="tab">
                                <ul id="photoslist" class="photo_gallery_13">
                                    <li><a rel="gallery-3" href="public/images/photos/photo13.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo13.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo14.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo14.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo15.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo15.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo7.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo7.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo8.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo8.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo9.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo9.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo10.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo10.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo1.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo1.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo2.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo2.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo3.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo3.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo4.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo4.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo5.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo5.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo6.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo6.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo11.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo11.jpg" alt="image"/></a></li>
                                    <li><a rel="gallery-3" href="public/images/photos/photo12.jpg" title="Photo title" class="swipebox"><img src="public/images/photos/photo12.jpg" alt="image"/></a></li>

                                    <div class="clearleft"></div>
                                </ul>
                            </div>

                        </div>
                    </div>


                </div>




                <div class="clearleft"></div>
            </div>
        </div>
    </div>
    @endsection
