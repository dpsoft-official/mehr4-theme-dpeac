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
{{--    <link rel="stylesheet" href="{{asset('/vendor/mehr4-theme-dpeac/css/assets/css/app.css')}}">--}}
    <link href="{{mix('app.css','vendor/mehr4-theme-dpeac')}}" rel="stylesheet">
    @yield('head')
</head>
<body >
@include('mehr4-theme-dpeac::component.header')
<main class="main">
    <main>@yield('main')</main>

</main>


@include("mehr4-theme-dpeac::component.footer")
<!--/footer-->
<!-- COMMON SCRIPTS -->

<script src="{{mix('app.js','vendor/mehr4-theme-dpeac')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/jquery.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/what-input.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/foundation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/app.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/jquery.lazy.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/jquery.easy-autocomplete.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.addon.beforeafter.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.addon.particles.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('/vendor/mehr4-theme-dpeac/js/extensions/revolution.extension.video.min.js')}}"></script>
<script>
{{--    //for all pages--}}
{{--    $('.video-embed-teacher-free').click(function() {--}}
{{--        var video_id = $(this).data('video');--}}
{{--        $("#"+video_id)[0].play();--}}
{{--    });--}}
{{--    $('.video-embed-course').click(function() {--}}
{{--        var video_id = $(this).data('video');--}}
{{--        $("#"+video_id)[0].play();--}}
{{--    });--}}
{{--    $('.video-embed-teacher').click(function() {--}}
{{--        var video_id = $(this).data('video');--}}
{{--        $("#"+video_id)[0].play();--}}
{{--    });--}}
{{--    $('body').on('closed.zf.reveal',function () {--}}
{{--        $("video").each(function (key,video) {--}}
{{--            $(video)[0].pause();--}}
{{--        });--}}
{{--    });--}}

{{--    $(function () {--}}
{{--        $("form[name='register-user']").submit(function (e) {--}}
{{--            e.preventDefault();--}}
{{--            var frm = this;--}}
{{--            $('#btn-register-user-submit').attr('disabled', 'disabled').prepend('<i class="fa fa-spinner fa-pulse fa-fw margin-bottom"></i>');--}}
{{--            $(frm).find('div.success').hide('fast');--}}
{{--            $.post("{{ path_for('register-user') }}", $(frm).serialize(), function () {--}}
{{--                $(frm).trigger("reset");--}}
{{--                $(frm).find('div.warning').hide();--}}
{{--                $(frm).find('div.success').show('slow');--}}
{{--                setTimeout(function () {--}}
{{--                    location.reload(false)--}}
{{--                }, 1500);--}}
{{--            }).fail(function (jqXHR, textStatus, errorThrown) {--}}
{{--                console.log(jqXHR, textStatus, errorThrown);--}}
{{--                if (jqXHR.status == 400) {--}}
{{--                    //show csrf error--}}
{{--                    $(frm).find('div.invalid-csrf').show('slow');--}}
{{--                    $('#btn-register-user-submit').find('i').remove();--}}
{{--                } else if (jqXHR.status == 406) {--}}
{{--                    //show invalid user or password--}}
{{--                    $(frm).find('div.warning').show('slow');--}}
{{--                    $('#btn-register-user-submit').find('i').remove();--}}
{{--                } else {--}}
{{--                    //show unknown error--}}

{{--                }--}}
{{--                $(frm).find('div.warning').show('slow');--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--    $("body").on('click', "input#accept-terms", function () {--}}
{{--        $("#btn-register-user-submit").prop('disabled', function (i, v) {--}}
{{--            return !v;--}}
{{--        });--}}
{{--    });--}}
{{--    $(function () {--}}
{{--        $("form[name='login-user']").submit(function (e) {--}}
{{--            e.preventDefault();--}}
{{--            var frm = this;--}}
{{--            $('#btn-login-user-submit').attr('disabled', 'disabled').prepend('<i class="fa fa-spinner fa-pulse fa-fw margin-bottom"></i>');--}}
{{--            $(frm).find('div.success').hide('fast');--}}
{{--            $.post("{{ path_for('login-user') }}", $(frm).serialize(), function () {--}}
{{--                $(frm).trigger("reset");--}}
{{--                $(frm).find('div.warning').hide();--}}
{{--                $(frm).find('div.success').show('slow');--}}
{{--                setTimeout(function () {--}}
{{--                    location.reload(false)--}}
{{--                }, 1500);--}}
{{--            }).fail(function (jqXHR, textStatus, errorThrown) {--}}
{{--                console.log(jqXHR, textStatus, errorThrown);--}}
{{--                if (jqXHR.status == 400) {--}}
{{--                    //show csrf error--}}
{{--                    $(frm).find('div.invalid-csrf').show('slow');--}}
{{--                } else if (jqXHR.status == 401) {--}}
{{--                    //show invalid user or password--}}
{{--                    $(frm).find('div.warning').show('slow');--}}
{{--                } else {--}}
{{--                    //show unknown error--}}
{{--                }--}}
{{--            }).always(function () {--}}
{{--                $('#btn-login-user-submit').removeAttr('disabled').find('i').remove();--}}
{{--            });--}}
{{--        });--}}
{{--        $('#btn-logout-user').click(function (e) {--}}
{{--            e.preventDefault();--}}
{{--            $.get("{{ path_for('logout-user') }}", function () {--}}
{{--                location.reload(false);--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--    $(function () {--}}

{{--        $('form[name="free-contact"]').submit(function (e) {--}}
{{--            e.preventDefault();--}}
{{--            var btn = $(this).find('button');--}}
{{--            btn.attr('disabled','disabled').prepend('<i class="fa fa-spinner fa-pulse fa-fw margin-bottom"></i>');--}}
{{--            $.post('{{path_for('add-crm-user')}}', $(this).serialize())--}}
{{--                .done(--}}
{{--                    function (res) {--}}
{{--                        if (res.ok) {--}}
{{--                            //show success--}}
{{--                            $('#ava-send').foundation('open');--}}
{{--                        } else {--}}
{{--                            //show user exist--}}
{{--                            $('#ava-warning').foundation('open');--}}
{{--                        }--}}
{{--                    })--}}
{{--                .fail(function (jqXHR) {--}}
{{--                    switch (jqXHR.status) {--}}
{{--                        case 400:--}}
{{--                            //show bad input--}}
{{--                            $('#ava-alert').foundation('open');--}}
{{--                            break;--}}
{{--                        case 408:--}}
{{--                            //show error in ava server connecting--}}
{{--                            $('#ava-error').foundation('open');--}}
{{--                            break;--}}
{{--                        default:--}}
{{--                            //show bad input--}}
{{--                            $('#ava-alert').foundation('open');--}}
{{--                            break;--}}
{{--                    }--}}
{{--                })--}}
{{--                .always(function () {--}}
{{--                    btn.removeAttr('disabled').find('i').remove();--}}
{{--                });--}}
{{--        });--}}
{{--    });--}}
{{--    $(document).foundation();--}}

{{--    var copyTextareaBtn = document.querySelector('.js-textareacopybtn');--}}

{{--    copyTextareaBtn.addEventListener('click', function(event) {--}}
{{--        var copyTextarea = document.querySelector('.js-copytextarea');--}}
{{--        copyTextarea.focus();--}}
{{--        copyTextarea.select();--}}

{{--        try {--}}
{{--            var successful = document.execCommand('copy');--}}
{{--            var msg = successful ? 'successful' : 'unsuccessful';--}}
{{--            //alert('لینک ویدئو در سیستم شما ذخیره شد ');--}}

{{--            $('#textareacopybtn').foundation('show');--}}


{{--        } catch (err) {--}}
{{--            alert('خطا لینک در سیستم شما کپی نشد!');--}}
{{--        }--}}
{{--    });--}}
{{--    $("#textareacopybtn").on("mouseleave", function() {--}}
{{--        $(this).foundation("hide");--}}
{{--    });--}}

{{--</script>--}}

{{--<script>--}}
{{--    $(function () {--}}
{{--        $("#search_course").easyAutocomplete({--}}
{{--            url: function (query) {--}}
{{--                return "/api/course/search/" + query;--}}
{{--            },--}}
{{--            getValue: "course_name",--}}
{{--            template: {--}}
{{--                type: "custom",--}}
{{--                method: function (value, course) {--}}
{{--                    return "<img id='search_course' width='32' src='http://dpe.ac/api/file/download/5af2888e63a3b/movaghat_photoshop-box.jpg'><span>" + course.course_name +"</span>";--}}
{{--                }--}}
{{--            },--}}
{{--            list: {--}}
{{--                onClickEvent: function () {--}}
{{--                    var course = $("#search_course").getSelectedItemData();--}}
{{--                    location.assign("/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/" + course.course_id + "/" +--}}
{{--                        encodeURI(course.course_name));--}}
{{--                },--}}
{{--                showAnimation: {--}}
{{--                    type: "slide", //normal|slide|fade--}}
{{--                    time: 400--}}
{{--                },--}}

{{--                hideAnimation: {--}}
{{--                    type: "slide", //normal|slide|fade--}}
{{--                    time: 400--}}
{{--                }--}}
{{--            },--}}
{{--            requestDelay: 300--}}
{{--        });--}}
{{--        $("form[name='course-search']").find('a').click(function (e) {--}}
{{--            e.preventDefault();--}}
{{--            $("form[name='course-search']").submit();--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    function setREVStartSize(e) {--}}
{{--        try {--}}
{{--            var i = jQuery(window).width(),--}}
{{--                t = 9999,--}}
{{--                r = 0,--}}
{{--                n = 0,--}}
{{--                l = 0,--}}
{{--                f = 0,--}}
{{--                s = 0,--}}
{{--                h = 0;--}}
{{--            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {--}}
{{--                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)--}}
{{--            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[--}}
{{--                    0] ||--}}
{{--                e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {--}}
{{--                var u = (e.c.width(), jQuery(window).height());--}}
{{--                if (void 0 != e.fullScreenOffsetContainer) {--}}
{{--                    var c = e.fullScreenOffsetContainer.split(",");--}}
{{--                    if (c) jQuery.each(c, function (e, i) {--}}
{{--                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u--}}
{{--                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset--}}
{{--                        .length > 0 ?--}}
{{--                        u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset &&--}}
{{--                        e.fullScreenOffset--}}
{{--                            .length > 0 && (u -= parseInt(e.fullScreenOffset, 0))--}}
{{--                }--}}
{{--                f = u--}}
{{--            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);--}}
{{--            e.c.closest(".rev_slider_wrapper").css({--}}
{{--                height: f--}}
{{--            })--}}
{{--        } catch (d) {--}}
{{--            console.log("Failure at Presize of Slider:" + d)--}}
{{--        }--}}
{{--    };--}}
{{--</script>--}}
{{--<!-- END REVOLUTION SLIDER -->--}}
{{--<script type="text/javascript">--}}
{{--    function setREVStartSize(e) {--}}
{{--        try {--}}
{{--            var i = jQuery(window).width(),--}}
{{--                t = 9999,--}}
{{--                r = 0,--}}
{{--                n = 0,--}}
{{--                l = 0,--}}
{{--                f = 0,--}}
{{--                s = 0,--}}
{{--                h = 0;--}}
{{--            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {--}}
{{--                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)--}}
{{--            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {--}}
{{--                var u = (e.c.width(), jQuery(window).height());--}}
{{--                if (void 0 != e.fullScreenOffsetContainer) {--}}
{{--                    var c = e.fullScreenOffsetContainer.split(",");--}}
{{--                    if (c) jQuery.each(c, function(e, i) {--}}
{{--                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u--}}
{{--                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))--}}
{{--                }--}}
{{--                f = u--}}
{{--            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);--}}
{{--            e.c.closest(".rev_slider_wrapper").css({--}}
{{--                height: f--}}
{{--            })--}}
{{--        } catch (d) {--}}
{{--            console.log("Failure at Presize of Slider:" + d)--}}
{{--        }--}}
{{--    };--}}

{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    var revapi13,--}}
{{--        tpj = jQuery;--}}
{{--    tpj(document).ready(function() {--}}
{{--        if (tpj("#rev_slider_13_1").revolution == undefined) {--}}
{{--            revslider_showDoubleJqueryError("#rev_slider_13_1");--}}
{{--        } else {--}}
{{--            revapi13 = tpj("#rev_slider_13_1").show().revolution({--}}
{{--                sliderType: "standard",--}}
{{--                jsFileLocation: "../js/",--}}
{{--                sliderLayout: "auto",--}}
{{--                dottedOverlay: "none",--}}
{{--                delay: 9000,--}}
{{--                particles: {--}}
{{--                    startSlide: "first",--}}
{{--                    endSlide: "last",--}}
{{--                    zIndex: "1",--}}
{{--                    particles: {--}}
{{--                        number: {--}}
{{--                            value: 80--}}
{{--                        },--}}
{{--                        color: {--}}
{{--                            value: "#ffffff"--}}
{{--                        },--}}
{{--                        shape: {--}}
{{--                            type: "circle",--}}
{{--                            stroke: {--}}
{{--                                width: 0,--}}
{{--                                color: "#ffffff",--}}
{{--                                opacity: 1--}}
{{--                            },--}}
{{--                            image: {--}}
{{--                                src: ""--}}
{{--                            }--}}
{{--                        },--}}
{{--                        opacity: {--}}
{{--                            value: 0.5,--}}
{{--                            random: true,--}}
{{--                            min: 0.25,--}}
{{--                            anim: {--}}
{{--                                enable: false,--}}
{{--                                speed: 3,--}}
{{--                                opacity_min: 0,--}}
{{--                                sync: false--}}
{{--                            }--}}
{{--                        },--}}
{{--                        size: {--}}
{{--                            value: 2,--}}
{{--                            random: true,--}}
{{--                            min: 0.5,--}}
{{--                            anim: {--}}
{{--                                enable: false,--}}
{{--                                speed: 40,--}}
{{--                                size_min: 1,--}}
{{--                                sync: false--}}
{{--                            }--}}
{{--                        },--}}
{{--                        line_linked: {--}}
{{--                            enable: false,--}}
{{--                            distance: 150,--}}
{{--                            color: "#ffffff",--}}
{{--                            opacity: 0.4,--}}
{{--                            width: 1--}}
{{--                        },--}}
{{--                        move: {--}}
{{--                            enable: true,--}}
{{--                            speed: 1,--}}
{{--                            direction: "none",--}}
{{--                            random: true,--}}
{{--                            min_speed: 1,--}}
{{--                            straight: false,--}}
{{--                            out_mode: "out"--}}
{{--                        }--}}
{{--                    },--}}
{{--                    interactivity: {--}}
{{--                        events: {--}}
{{--                            onhover: {--}}
{{--                                enable: false,--}}
{{--                                mode: "repulse"--}}
{{--                            },--}}
{{--                            onclick: {--}}
{{--                                enable: false,--}}
{{--                                mode: "repulse"--}}
{{--                            }--}}
{{--                        },--}}
{{--                        modes: {--}}
{{--                            grab: {--}}
{{--                                distance: 400,--}}
{{--                                line_linked: {--}}
{{--                                    opacity: 0.5--}}
{{--                                }--}}
{{--                            },--}}
{{--                            bubble: {--}}
{{--                                distance: 400,--}}
{{--                                size: 40,--}}
{{--                                opacity: 0.4--}}
{{--                            },--}}
{{--                            repulse: {--}}
{{--                                distance: 200--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                },--}}
{{--                navigation: {--}}
{{--                    keyboardNavigation: "off",--}}
{{--                    keyboard_direction: "horizontal",--}}
{{--                    mouseScrollNavigation: "off",--}}
{{--                    mouseScrollReverse: "default",--}}
{{--                    onHoverStop: "off",--}}
{{--                    arrows: {--}}
{{--                        style: "gyges",--}}
{{--                        enable: true,--}}
{{--                        hide_onmobile: false,--}}
{{--                        hide_onleave: false,--}}
{{--                        tmp: '',--}}
{{--                        left: {--}}
{{--                            h_align: "center",--}}
{{--                            v_align: "bottom",--}}
{{--                            h_offset: -20,--}}
{{--                            v_offset: 0--}}
{{--                        },--}}
{{--                        right: {--}}
{{--                            h_align: "center",--}}
{{--                            v_align: "bottom",--}}
{{--                            h_offset: 20,--}}
{{--                            v_offset: 0--}}
{{--                        }--}}
{{--                    }--}}
{{--                },--}}
{{--                visibilityLevels: [1240, 1024, 778, 480],--}}
{{--                gridwidth: 1200,--}}
{{--                gridheight: 500,--}}
{{--                lazyType: "none",--}}
{{--                minHeight: "500",--}}
{{--                parallax: {--}}
{{--                    type: "mouse+scroll",--}}
{{--                    origo: "slidercenter",--}}
{{--                    speed: 400,--}}
{{--                    speedbg: 0,--}}
{{--                    speedls: 0,--}}
{{--                    levels: [1, 2, 3, 4, 5, 6, 7, 8, 12, 16, 47, 48, 49, 50, 51, 55],--}}
{{--                },--}}
{{--                shadow: 0,--}}
{{--                spinner: "off",--}}
{{--                stopLoop: "on",--}}
{{--                stopAfterLoops: 0,--}}
{{--                stopAtSlide: 1,--}}
{{--                shuffle: "off",--}}
{{--                autoHeight: "off",--}}
{{--                disableProgressBar: "on",--}}
{{--                hideThumbsOnMobile: "off",--}}
{{--                hideSliderAtLimit: 0,--}}
{{--                hideCaptionAtLimit: 0,--}}
{{--                hideAllCaptionAtLilmit: 0,--}}
{{--                debugMode: false,--}}
{{--                fallbacks: {--}}
{{--                    simplifyAll: "off",--}}
{{--                    nextSlideOnWindowFocus: "off",--}}
{{--                    disableFocusListener: false,--}}
{{--                }--}}
{{--            });--}}
{{--            var ua = window.navigator.userAgent;--}}
{{--            var msie = ua.indexOf("MSIE ");--}}

{{--            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv:11./) || ('CSS' in window && 'supports' in window.CSS && !window.CSS.supports('mix-blend-mode', 'screen'))) {--}}

{{--                var bgColor = 'rgba(245, 245, 245, 0.5)';--}}
{{--                //jQuery('.rev_slider .tp-caption[data-blendmode]').removeAttr('data-blendmode').css('background', bgColor);--}}
{{--                jQuery('.rev_slider .tp-caption.tp-blendvideo[data-blendmode]').remove();--}}
{{--            }--}}
{{--        }--}}

{{--        RsParticlesAddOn(revapi13);--}}

{{--        RevSliderBeforeAfter(tpj, revapi13, {--}}
{{--            arrowStyles: {--}}
{{--                leftIcon: "fa-icon-caret-left",--}}
{{--                rightIcon: "fa-icon-caret-right",--}}
{{--                topIcon: "fa-icon-caret-up",--}}
{{--                bottomIcon: "fa-icon-caret-down",--}}
{{--                size: "35",--}}
{{--                color: "#ffffff",--}}
{{--                bgColor: "transparent",--}}
{{--                spacing: "10",--}}
{{--                padding: "0",--}}
{{--                borderRadius: "0"--}}
{{--            },--}}
{{--            dividerStyles: {--}}
{{--                width: "1",--}}
{{--                color: "rgba(255, 255, 255, 0.5)"--}}
{{--            },--}}
{{--            onClick: {--}}
{{--                time: "500",--}}
{{--                easing: "Power2.easeOut",--}}
{{--            },--}}
{{--            cursor: "move",--}}
{{--            carousel: false--}}
{{--        });--}}
{{--    }); /*ready*/--}}

{{--</script>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $("div.tabs-title.is-active").click(function (e) {--}}
{{--            var a = $('div.tabs-title.is-active').find('img.body');--}}
{{--            var b = $('div.tabs-title.is-active').find('a.body');--}}
{{--            $('div.tabs-title.is-loop').appendTo('.is-active').show('fast');--}}
{{--        });--}}

{{--    });--}}
{{--</script>--}}
@yield('footer')
@include('sweet::alert')
</body>
</html>
