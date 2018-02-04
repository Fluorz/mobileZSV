@extends('layouts.application', ['title' => trans('home.title')])
@section('content')
<div class="pages">
  <div data-page="contact" class="page no-toolbar no-navbar">
    <div class="page-content">

	    @include('layouts/langue')

     <div id="pages_maincontent">

      <h2 class="page_title" class=".item-title">{{ trans('contact.page_title') }}</h2>

     <div class="page_single layout_fullwidth_padding">

            <h2 id="Note"></h2>
            <div class="contactform">
            <form class="cmxform" id="ContactForm" method="post" action="">
            <label>{{ trans('contact.name') }}</label>
            <input type="text" name="ContactName" id="ContactName" value="" class="form_input required" />
            <label>{{ trans('contact.email') }}</label>
            <input type="text" name="ContactEmail" id="ContactEmail" value="" class="form_input required email" />
            <label>{{ trans('contact.message') }}</label>
            <textarea name="ContactComment" id="ContactComment" class="form_textarea textarea required" rows="" cols=""></textarea>
            <input type="submit" name="submit" class="form_submit" id="submit" value="{{ trans('contact.send') }}" />
            <input class="" type="hidden" name="to"  value="youremail@yourwebsite.com" />
            <input class="" type="hidden" name="subject" value="Contacf form message" />
            <label id="loader" style="display:none;"><img src="public/images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>
            </form>
            </div>

      <h3>{{ trans('contact.location') }}</h3>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119093.00099622764!2d105.72652932791213!3d21.126265307292627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab54dec46deb%3A0xbaf68b7445271469!2sC%C3%B4ng+ty+Th%C3%A9p+Zamil+Steel!5e0!3m2!1sfr!2s!4v1511645748098" width="100%" height="200" frameborder="0" style="border:0"></iframe>

      <blockquote>
      <strong>{{ trans('contact.adress') }}</strong>&nbsp;{{ trans('contact.blockquote_adress') }}<br/>
      <strong>{{ trans('contact.mobile') }}</strong>&nbsp;{{ trans('contact.blockquote_mobile') }}
      </blockquote>



      <div class="clear"></div>
         <p>&nbsp;</p>
      </div>

      </div>
        <div class="bottombarpages">
            <a href="tel: +842438378522" class="button_full btyellow external">{{ trans('contact.call') }}</a>
        </div>
    </div>
   </div>
</div>
@endsection
