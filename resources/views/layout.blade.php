<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('mehr::component.seo')
    @if(!empty(setting('google.analytics')))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{setting('google.analytics')}}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', "{{setting('google.analytics')}}");
        </script>
    @endif
<!-- Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{Storage::url('theme/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{Storage::url('theme/apple-icon-60x60.png')}}" >
    <link rel="apple-touch-icon" sizes="72x72"  href="{{Storage::url('theme/apple-icon-72x72.png')}}" >
    <link rel="apple-touch-icon" sizes="76x76" href="{{Storage::url('theme/apple-icon-76x76.png')}}" >
    <link rel="apple-touch-icon" sizes="114x114" href="{{Storage::url('theme/apple-icon-114x114.png')}}" >
    <link rel="apple-touch-icon" sizes="120x120" href="{{Storage::url('theme/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{Storage::url('theme/apple-icon-144x144.png')}}" >
    <link rel="apple-touch-icon" sizes="152x152" href="{{Storage::url('theme/apple-icon-152x152.png')}}" >
    <link rel="apple-touch-icon" sizes="180x180" href="{{Storage::url('theme/apple-icon-180x180.png')}}">
    <link rel="shortcut icon" type="image/png" sizes="192x192"  href="{{Storage::url('theme/android-icon-192x192.png')}} ">
    <link rel="shortcut icon" type="image/png" sizes="32x32" href="{{Storage::url('theme/favicon-32x32.png')}}  ">
    <link rel="shortcut icon" type="image/png" sizes="96x96" href="{{Storage::url('theme/favicon-96x96.png')}} ">
{{--    <link rel="shortcut icon" href="{{Storage::url('theme/fav.png')}}" type="image/x-icon">--}}
    {{--<link rel="shortcut icon" href="content/university/images/favicon.ico">--}}
{{--    <link rel="manifest" href="{{theme_directory}}/assets/img/manifest.json">--}}

    <!-- BASE CSS -->
    <link rel="stylesheet" href="{{asset('/vendor/mehr4-theme-dpeac/css/assets/css/app.css')}}">
    <link href="{{mix('app.css','vendor/mehr4-theme-dpeac')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/vendor/mehr4-theme-dpeac/assets/css/revolution.addon.beforeafter.css')}}">
    <link rel="stylesheet" href="{{asset('/vendor/mehr4-theme-dpeac/assets/css/revolution.addon.particles.css')}}">
    <link rel="stylesheet" href="{{asset('/vendor/mehr4-theme-dpeac/assets/css/revolution.addon.particles.css')}}">
    <link rel="stylesheet" href="{{asset('/vendor/mehr4-theme-dpeac/assets/css/settings.css')}}">

    @yield('head')
</head>
<body class="@yield('class-body')">
<main class="main">
    <section class="packege">
    </section>
</main>


@include("mehr4-theme-dpeac::component.footer")
<!--/footer-->
<!-- COMMON SCRIPTS -->


{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/assets/js/jquery.min.js)}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/what-input.min.js')}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.min.js')}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/app.js')}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/jquery.lazy.min.js')}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/assets/js/jquery.easy-autocomplete.min.js')}}"></script>--}}
{{--{% include "dpeac/commons/app-js.twig" %}--}}
@yield('footer')
@include('sweet::alert')
</body>
</html>
