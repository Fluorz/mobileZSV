<!DOCTYPE html>
<html>
    <head>
        <title>{{ trans('home.title') }}</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>

      <p></p>
      &nbsp
        <a href="{{ url('setlocale/fr') }}">French</a> |
        <a href="{{ url('setlocale/en') }}">English</a> |
        <a href="{{ url('setlocale/vn') }}">Vietnamese</a>
      <hr></hr>

        <ul>
            <li>{{ trans('messages.welcome') }}</li>
            <li>{{ trans('messages.about') }}</li>
            <li>{{ trans('messages.services') }}</li>
            <li>{{ trans('messages.contact') }}</li>
        </ul>

    </body>

</html>
