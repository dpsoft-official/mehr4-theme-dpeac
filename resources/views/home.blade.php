@extends("mehr4-theme-dpeac::layout")
@section('main')
    <main class="main">
        <!-- #Slider -->
{{--        <section class="slider-main">--}}
{{--            <article class="content">--}}


{{--                <div id="rev_slider_13_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="beforeafterslider14" data-source="gallery"--}}
{{--                     style="margin:0px auto;background:#252525;padding:0px;margin-top:0px;margin-bottom:0px;">--}}
{{--                    <!-- START REVOLUTION SLIDER 5.4.6.3 auto mode -->--}}
{{--                    <div id="rev_slider_13_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">--}}
{{--                        <ul>--}}
{{--                            <!-- SLIDE  -->--}}
{{--                            <li data-index="rs-36" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"--}}
{{--                                data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off"--}}
{{--                                data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7=""--}}
{{--                                data-param8="" data-param9="" data-param10="" data-description="" data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"#3cd3fe","bgType":"solid","bgImage":"","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false,"bounceArrows":"infinite","bounceType":"repel","bounceAmount":"5","bounceSpeed":"1500","bounceEasing":"ease-in-out","bounceDelay":"750","shiftOffset":"10","shiftTiming":"300","shiftEasing":"ease","shiftDelay":"250"}'>--}}
{{--                                <!-- MAIN IMAGE -->--}}
{{--                                <img src="{{Storage::url('theme/transparent.png')}}" data-bgcolor='#ffb900' style='background:#ffb900'  data-bgposition="center center"--}}
{{--                                     data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" alt="دانش پژوهان" data-no-retina>--}}
{{--                                <!-- LAYERS -->--}}

{{--                                <!-- LAYER NR. 1 -->--}}
{{--                                <div class="tp-caption   tp-resizeme" id="slide-36-layer-63" data-x="" data-y="-115" data-width="['none','none','none','none']"--}}
{{--                                     data-height="['none','none','none','none']" data-type="image" data-beforeafter="before" data-responsive_offset="on"--}}
{{--                                     data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'--}}
{{--                                     data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"--}}
{{--                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;">--}}
{{--                                    <img src="{{Storage::url('theme/ee920-SLIDER-site-FINAl1.png')}}"  data-ww="auto" alt="دانش پژوهان"  data-hh="auto" data-no-retina> </div>--}}

{{--                                <!-- LAYER NR. 2 -->--}}
{{--                                <div class="tp-caption   tp-resizeme" id="slide-36-layer-64" data-x="1" data-y="-113" data-width="['none','none','none','none']"--}}
{{--                                     data-height="['none','none','none','none']" data-type="image" data-beforeafter="after" data-responsive_offset="on"--}}
{{--                                     data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'--}}
{{--                                     data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"--}}
{{--                                     data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;">--}}
{{--                                    <img src="{{Storage::url('theme/ee920-SLIDER-site-FINAL2.png')}}"  alt="دانش پژوهان"  data-ww="auto" data-hh="auto" data-no-retina> </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END REVOLUTION SLIDER -->--}}
{{--            </article>--}}
{{--            <div class="grid-container">--}}
{{--                <div class="grid-x grid-padding-x">--}}
{{--                    <div class="row medium-8 small-12">--}}
{{--                        <div class="search-head">--}}
{{--                            <form action="" name="course-search">--}}
{{--                                <input id="search_course" type="text" name="course_name" value="" id="search-input-field" class="search__input" placeholder=" جستجو کنید...">--}}
{{--                                <button type="send" class="search-btn">جستجو کن</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <!-- #Packege 0-100 -->
        <section class="packege">
            <div class="head-packege">
                <h3>پکیج های صفر تا صد</h3>
                <hr>
            </div>
            <!-- Gride Start -->
{{--            {% include "dpeac/pages/home/home-packege.twig" %}--}}
            <!-- End Gride -->
        </section>

        <!-- #Good Teachers -->
        <section class="good-teachers">
{{--            {% include "dpeac/pages/home/home-good-teachers-header-tab.twig" %} {% include "dpeac/pages/home/home-good-teachers-tab-content.twig"--}}

            <!-- End Gride -->
        </section>

        <!-- #Department -->
        <section class="department">
{{--            {% include "dpeac/pages/home/home-department-header.twig" %}--}}
            <!-- Gride Start -->
{{--            {% include "dpeac/pages/home/home-department-card.twig" %}--}}
        </section>

        <!-- #DaneshPajohaniShavid -->
        <section class="dpe" id="dpe">
            <div class="head-packege-light">
                <h3>دانش پژوهانی شوید</h3>
                <hr>
            </div>
            <div class="charts-mg">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-3  small-6">
                            <div class="graph-des">
                                <h1 class="timer count-title before-numb count-number" data-to="400000" data-speed="5500"></h1>
                                <b>دانش پذیران</b>
                            </div>
                        </div>
                        <div class="medium-3 small-6">
                            <div class="graph-des">
                                <h1 class="timer count-title before-numb count-number" data-to="525" data-speed="1500"></h1>
                                <b>ساعت تولید محتوا</b>
                            </div>
                        </div>
                        <div class="medium-3 small-6">
                            <div class="graph-des">
                                <h1 class="timer count-title before-numb count-number" data-to="70" data-speed="1500"></h1>
                                <b>استادان</b>
                            </div>
                        </div>
                        <div class="medium-3 small-6">
                            <div class="graph-des">
                                <h1 class="timer count-title before-numb count-number" data-to="120" data-speed="1500"></h1>
                                <b>دوره ها</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-style">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="row medium-12 cell">
                            <video width="100%" height="auto" id="video" preload="none" controls poster="">
{{--                                <source src="{{home_video.url}}">--}}
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Honors -->
        <!--
        <div class="honors">
            <div class="info-teacher">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-6 ">
                        </div>
                        <div class="medium-6  small-12">
                            <h2> مجوزات و افتخارات</h2>
                            <span>کارشناسی مهندس صنایع</span>
                            <span>کارشناسی ارشد را در دو رشته مدیریت استراتژیک و مدیریت بازاریابی در دانشگاه METU آنکارا</span>
                            <span>دکترای مدیریت اجرایی کسب و کار (DBA) از دانشگاه University of Southern California در دور مشترک در
                                کمپس American University of Dubai امارات تمرکز اصلی وی در آغاز فعالیت هایش بر حوزه لجستیک و مدیریت
                                یکپارچه زنجیره تامین بوده و همچنان نیز به فعالیت های اجرایی، پژوهشی و آموزشی حرفه ای در این زمینه
                                می پردازد. </span>
                            <span>برای مشاهده ی رزومه ی کامل، دوره ه وویدئوها وارد پروفایل استاد شوید</span>
                            <a href="#" class="profile-teacher-btn">مشاهده </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

        <!-- #Blog -->
        <section class="newsbar" style="margin-top:303px !important;">
{{--            {% include "dpeac/pages/home/home-newsbar.twig" %}--}}

        </section>

    </main>
@endsection


