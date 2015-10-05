<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>@yield('page-title', trans('site.name'))</title>
    <meta name="description" content="@yield('meta_description', 'Default Description')">
    <meta name="author" content="@yield('author', 'Joseph Lacerna')">
    @yield('meta')

    @yield('before-styles-end')
    <!-- SITE CSS -->
    {!! HTML::style(elixir('css/frontend.css')) !!}
    @yield('after-styles-end')

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery.min.js')}}"><\/script>')</script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    {!! HTML::script('rs-plugin/js/jquery.themepunch.plugins.min.js') !!}
    {!! HTML::script('rs-plugin/js/jquery.themepunch.revolution.min.js') !!}

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    {!! HTML::style('rs-plugin/css/settings.css') !!}

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

    @include('en._template.header')
    @yield('content')
    @include('en._template.footer')

    {!! HTML::script('js/vendor/bootstrap.min.js') !!}
    {!! HTML::script('js/vendor/underscore-min.js') !!}
    {!! HTML::script('js/vendor/moment/moment-with-locales.min.js') !!}


    @yield('before-scripts-end')
    {!! HTML::script(elixir('js/frontend.js')) !!}
    @yield('after-scripts-end')

    @include('includes.javascript-vars')
    @include('includes.ga')
</body>
</html>
