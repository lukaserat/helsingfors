<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>{{ trans('site.name') }} {{trans('site.title_sep')}} Admin</title>

    @yield('before-styles-end')
    {!! HTML::style(elixir('css/backend.css')) !!}
    @yield('after-styles-end')

        <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Icons-->
    <link rel="apple-touch-icon" href="favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    {!! HTML::script("js/vendor/modernizr-2.8.3.min.js") !!}
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container body-wrapper">
    @include('sistema._template.header')
    @yield('content')
    @include('sistema._template.footer')
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery.min.js')}}"><\/script>')</script>
{!! HTML::script('js/vendor/bootstrap.min.js') !!}

@yield('before-scripts-end')
{!! HTML::script(elixir('js/backend.js')) !!}
@yield('after-scripts-end')

@include('includes.javascript-vars')
</body>
</html>
