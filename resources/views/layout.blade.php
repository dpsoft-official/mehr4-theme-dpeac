<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token"
          content="{{ csrf_token() }}">
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
    <meta name="enamad" content="{{setting('enemad')}}">
    <meta name="enamad" content="{{setting('samandehi')}}">
    <!-- Favicons-->
    <link rel="shortcut icon" type="image/x-icon" href="{{Storage::url('theme/favicon.png')}} ">
    <!-- BASE CSS -->
    @yield('head')
    <link rel="stylesheet" href="{{asset('/vendor/mehr4-theme-dpeac/fonts/font.css')}}">
    <link href="{{mix('app.css','vendor/mehr4-theme-dpeac')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/vendor/mehr4-theme-dpeac/custom.css')}}">
    {!! setting('raw_header') !!}
    @livewireStyles
   </head>
<body>
@include('mehr4-theme-dpeac::component.header')
<main class="main">
    @yield('main')
</main>
@include("mehr4-theme-dpeac::component.footer")
<!--/footer-->
<!-- COMMON SCRIPTS -->
@yield('footer')
<script src="{{mix('app.js','vendor/mehr4-theme-dpeac')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/jquery.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/app.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/jquery.plugins.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.addon.beforeafter.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/jquery.themepunch.revolution.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/sweetalert.min.js')}}"></script>
<script>

    </script>


<script>
    $(document).ready(function () {
        $("div.tabs-title.is-active").click(function (e) {
            var a = $('div.tabs-title.is-active').find('img.body');
            var b = $('div.tabs-title.is-active').find('a.body');
            $('div.tabs-title.is-loop').appendTo('.is-active').show('fast');
        });

    });
</script>
<script>
    function refreshPage(){
        location.reload();
    }
</script>
@yield('script')

@yield('footer')
@include('sweet::alert')
{!! setting('raw_footer') !!}
@livewireScripts
</body>
</html>
