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
        <script type="text/javascript">
            !function(){function g(){var g=document.createElement("script"),s="https://www.goftino.com/widget/l10H5N";g.type="text/javascript", g.async=!0,g.src=localStorage.getItem("goftino")?s+"?o="+localStorage.getItem("goftino"):s;var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(g, e);}
                var a = window;"complete" === document.readyState ? g() : a.attachEvent ? a.attachEvent("onload", g) : a.addEventListener("load", g, !1);}();
        </script>
    @endif
    <meta name="enamad" content="{{setting('enemad')}}">
    <meta name="enamad" content="{{setting('samandehi')}}">
    <!-- Favicons-->
    <link rel="shortcut icon" type="image/x-icon"    href="{{Storage::url('theme/favicon.png')}} ">
    <!-- BASE CSS -->
    @yield('head')
    <link rel="stylesheet" href="{{asset('/vendor/mehr4-theme-dpeac/fonts/font.css')}}">
    <link href="{{mix('app.css','vendor/mehr4-theme-dpeac')}}" rel="stylesheet">
</head>
<body >
@include('mehr4-theme-dpeac::component.header')
<main class="main">
   @yield('main')
</main>
@include("mehr4-theme-dpeac::component.footer")
@yield('script')
<!--/footer-->
<!-- COMMON SCRIPTS -->
<script src="{{mix('app.js','vendor/mehr4-theme-dpeac')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/jquery.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/app.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/jquery.lazy.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/jquery.plugins.js')}}"></script>
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.tabs.js')}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.core.js')}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.util.keyboard.js')}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.util.touch.js')}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.util.triggers.js')}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.util.mediaQuery.js')}}"></script>--}}
{{--<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.util.motion.js')}}"></script>--}}
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.addon.beforeafter.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.addon.particles.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/sweetalert.min.js')}}"></script>
<script>
    function myfunction(){
    jQuery(document).foundation();
        $('#exampleModal1').foundation('open');



    }
   </script>
<script>
$(document).ready(function(){
setTimeout(
function()
{
//do something special
$('#exampleModal1').foundation('reveal', 'open')
}, 10000);
});
</script>
<script type="text/javascript">
    function setREVStartSize(e) {
        try {
            var i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[
                    0] ||
                e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c) jQuery.each(c, function (e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset
                        .length > 0 ?
                        u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset &&
                        e.fullScreenOffset
                            .length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f
            })
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    };
</script>
<!-- END REVOLUTION SLIDER -->
<script type="text/javascript">
    function setREVStartSize(e) {
        try {
            var i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c) jQuery.each(c, function(e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f
            })
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    };

</script>
<script type="text/javascript">
    var revapi13,
        tpj = jQuery;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_13_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_13_1");
        } else {
            revapi13 = tpj("#rev_slider_13_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "http://dpe.ac/theme/dpeac/assets/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                particles: {
                    startSlide: "first",
                    endSlide: "last",
                    zIndex: "1",
                    particles: {
                        number: {
                            value: 80
                        },
                        color: {
                            value: "#ffffff"
                        },
                        shape: {
                            type: "circle",
                            stroke: {
                                width: 0,
                                color: "#ffffff",
                                opacity: 1
                            },
                            image: {
                                src: ""
                            }
                        },
                        opacity: {
                            value: 0.5,
                            random: true,
                            min: 0.25,
                            anim: {
                                enable: false,
                                speed: 3,
                                opacity_min: 0,
                                sync: false
                            }
                        },
                        size: {
                            value: 2,
                            random: true,
                            min: 0.5,
                            anim: {
                                enable: false,
                                speed: 40,
                                size_min: 1,
                                sync: false
                            }
                        },
                        line_linked: {
                            enable: false,
                            distance: 150,
                            color: "#ffffff",
                            opacity: 0.4,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 1,
                            direction: "none",
                            random: true,
                            min_speed: 1,
                            straight: false,
                            out_mode: "out"
                        }
                    },
                    interactivity: {
                        events: {
                            onhover: {
                                enable: false,
                                mode: "repulse"
                            },
                            onclick: {
                                enable: false,
                                mode: "repulse"
                            }
                        },
                        modes: {
                            grab: {
                                distance: 400,
                                line_linked: {
                                    opacity: 0.5
                                }
                            },
                            bubble: {
                                distance: 400,
                                size: 40,
                                opacity: 0.4
                            },
                            repulse: {
                                distance: 200
                            }
                        }
                    }
                },
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    arrows: {
                        style: "gyges",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: -20,
                            v_offset: 0
                        },
                        right: {
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 20,
                            v_offset: 0
                        }
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1200,
                gridheight: 500,
                lazyType: "none",
                minHeight: "500",
                parallax: {
                    type: "mouse+scroll",
                    origo: "slidercenter",
                    speed: 400,
                    speedbg: 0,
                    speedls: 0,
                    levels: [1, 2, 3, 4, 5, 6, 7, 8, 12, 16, 47, 48, 49, 50, 51, 55],
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv:11./) || ('CSS' in window && 'supports' in window.CSS && !window.CSS.supports('mix-blend-mode', 'screen'))) {

                var bgColor = 'rgba(245, 245, 245, 0.5)';
                //jQuery('.rev_slider .tp-caption[data-blendmode]').removeAttr('data-blendmode').css('background', bgColor);
                jQuery('.rev_slider .tp-caption.tp-blendvideo[data-blendmode]').remove();
            }
        }

        RsParticlesAddOn(revapi13);

        RevSliderBeforeAfter(tpj, revapi13, {
            arrowStyles: {
                leftIcon: "fa-icon-caret-left",
                rightIcon: "fa-icon-caret-right",
                topIcon: "fa-icon-caret-up",
                bottomIcon: "fa-icon-caret-down",
                size: "35",
                color: "#ffffff",
                bgColor: "transparent",
                spacing: "10",
                padding: "0",
                borderRadius: "0"
            },
            dividerStyles: {
                width: "1",
                color: "rgba(255, 255, 255, 0.5)"
            },
            onClick: {
                time: "500",
                easing: "Power2.easeOut",
            },
            cursor: "move",
            carousel: false
        });
    });
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
@yield('footer')
@include('sweet::alert')
</body>
</html>
