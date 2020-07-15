@extends("mehr4-theme-dpeac::layout")
@section('main')
    <main class="main">
        <!-- #Slider -->

        <article class="content">


            <div id="rev_slider_13_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                 data-alias="beforeafterslider14" data-source="gallery"
                 style="margin:0px auto;background:#252525;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.6.3 auto mode -->
                <div id="rev_slider_13_1" class="rev_slider fullwidthabanner" style="display:none;"
                     data-version="5.4.6.3">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-36" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                            data-hideslideonmobile="off"
                            data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb=""
                            data-rotate="0" data-saveperformance="off"
                            data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7=""
                            data-param8="" data-param9="" data-param10="" data-description=""
                            data-beforeafter='{"moveto":"50%|50%|50%|50%","bgColor":"#3cd3fe","bgType":"solid","bgImage":"","bgFit":"cover","bgPos":"center center","bgRepeat":"no-repeat","direction":"horizontal","easing":"Power2.easeInOut","delay":"500","time":"750","out":"fade","carousel":false,"bounceArrows":"infinite","bounceType":"repel","bounceAmount":"5","bounceSpeed":"1500","bounceEasing":"ease-in-out","bounceDelay":"750","shiftOffset":"10","shiftTiming":"300","shiftEasing":"ease","shiftDelay":"250"}'>
                            <!-- MAIN IMAGE -->
                            <img src="{{Storage::url('theme/transparent.png')}}" data-bgcolor='#ffb900'
                                 style='background:#ffb900' data-bgposition="center center"
                                 data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                                 alt="{{setting('site.name')}}" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption   tp-resizeme" id="slide-36-layer-63" data-x="" data-y="-115"
                                 data-width="['none','none','none','none']"
                                 data-height="['none','none','none','none']" data-type="image" data-beforeafter="before"
                                 data-responsive_offset="on"
                                 data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;">
                                <img src="{{Storage::url('theme/ee920-SLIDER-site-FINAl1.png')}}" data-ww="auto"
                                     alt="{{setting('site.name')}}" data-hh="auto" data-no-retina></div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme" id="slide-36-layer-64" data-x="1" data-y="-113"
                                 data-width="['none','none','none','none']"
                                 data-height="['none','none','none','none']" data-type="image" data-beforeafter="after"
                                 data-responsive_offset="on"
                                 data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                 data-paddingright="[0,0,0,0]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;">
                                <img src="{{Storage::url('theme/ee920-SLIDER-site-FINAL2.png')}}" alt="{{setting('site.name')}}"
                                     data-ww="auto" data-hh="auto" data-no-retina></div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </article>

        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="row medium-8 small-12">
                    <div class="search-head">
                        <form  role="search" action="{{route('course-list')}}">
                            <input id="search_course" type="search" name="q" value="{{request('q')}}" id="search-input-field"
                                   class="search__input" placeholder="جستجوی دوره">
                            <button type="send" class="search-btn">جستجو کن</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <!-- #Packege 0-100 -->

        <section class="packege">
            <div class="head-packege">
                <h3>پکیج های صفر تا صد</h3>
                <hr>
            </div>
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    @foreach($categories->take(6) as $category)
                        <div class="medium-4">
                            <a href="{{$category->courses_url}}">
                <span class="dpe-dep-box">
                    <img src="{{Storage::url($category->image)}}" alt="{{$category->title}}">
                    <p>{{($category->title)}}</p>
                </span>
                            </a>
                        </div>
                    @endforeach
                    @foreach(\Dpsoft\Mehr\Models\Course::withAnyTags(['پکیج'])->get() as $course)
                        <div class="medium-4">
                            <a href="{{$course->courses_url}}">
                <span class="dpe-dep-box">
                    <img src="{{Storage::url($course->image)}}" alt="{{$course->title}}">
                    <p>{{($course->title)}}</p>
                </span>
                            </a>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>

        <!-- #Good Teachers -->
        <section class="good-teachers">
            <div class="header-tabs">
                <!-- Gride Start -->
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="head-packege-light">
                            <h3>برترین اساتید کشور در دانش پژوهان</h3>
                            <hr>
                        </div>
                        <ul class="tabs" data-tabs="" id="teacher-tabs" role="tablist" data-e="ds568c-e">
                            <li class="tabs-title is-active" role="presentation">
                                <img src="{{Storage::url('theme/teacher1.png')}}" class="teacher-avatar" width="100px"
                                     alt="{{setting('teacher1.name')}}">
                                <a data-tabs-target="teacher-1" href="#teacher-1" role="tab"
                                   aria-controls="teacher-22143" aria-selected="false" id="teacher-22143-label"
                                   tabindex="-1">{{setting('teacher1.name')}}</a>
                            </li>
                            <li class="tabs-title" role="presentation">
                                <img src="{{Storage::url('theme/teacher2.png')}}" class="teacher-avatar" width="100px"
                                     alt="{{setting('teacher2.name')}}">
                                <a data-tabs-target="teacher-2" href="#teacher-2" role="tab"
                                   aria-controls="teacher-19776" aria-selected="false" id="teacher-19776-label"
                                   tabindex="-1">{{setting('teacher2.name')}}</a>
                            </li>
                            <li class="tabs-title" role="presentation">
                                <img src="{{Storage::url('theme/teacher3.png')}}" class="teacher-avatar" width="100px"
                                     alt="{{setting('teacher3.name')}}">
                                <a data-tabs-target="teacher-3" href="#teacher-3" role="tab"
                                   aria-controls="teacher-19253" aria-selected="false" id="teacher-19253-label"
                                   tabindex="-1">{{setting('teacher3.name')}}</a>
                            </li>
                            <li class="tabs-title " role="presentation">
                                <img src="{{Storage::url('theme/teacher4.png')}}" class="teacher-avatar" width="100px"
                                     alt="{{setting('teacher4.name')}}">
                                <a data-tabs-target="teacher-4" href="#teacher-4" role="tab"
                                   aria-controls="teacher-18742" aria-selected="true" id="teacher-18742-label"
                                   tabindex="0">{{setting('teacher4.name')}}</a>
                            </li>
                            <li class="tabs-title " role="presentation">
                                <img src="{{Storage::url('theme/teacher5.png')}}" class="teacher-avatar" width="100px"
                                     alt="{{setting('teacher5.name')}}">
                                <a data-tabs-target="teacher-5" href="#teacher-5" role="tab"
                                   aria-controls="teacher-18684" aria-selected="false" id="teacher-18684-label"
                                   tabindex="-1">{{setting('teacher5.name')}}</a>
                            </li>
                            <li class="tabs-title " role="presentation">
                                <img src="{{Storage::url('theme/teacher6.png')}}" class="teacher-avatar" width="100px"
                                     alt="{{setting('teacher6.name')}}">
                                <a data-tabs-target="teacher-6" href="#teacher-6" role="tab"
                                   aria-controls="teacher-18683" aria-selected="false" id="teacher-18683-label"
                                   tabindex="-1">{{setting('teacher6.name')}}</a>
                            </li>
                            <li class="tabs-title " role="presentation">
                                <img src="{{Storage::url('theme/teacher7.png')}}" class="teacher-avatar" width="100px"
                                     alt="{{setting('teacher7.name')}}">
                                <a data-tabs-target="teacher-7" href="#teacher-7" role="tab"
                                   aria-controls="teacher-18682" aria-selected="false" id="teacher-18682-label"
                                   tabindex="-1">{{setting('teacher7.name')}}</a>
                            </li>
                            <li class="tabs-title " role="presentation">
                                <img src="{{Storage::url('theme/teacher8.png')}}" class="teacher-avatar" width="100px"
                                     alt="{{setting('teacher8.name')}}">
                                <a data-tabs-target="teacher-8" href="#teacher-8" role="tab"
                                   aria-controls="teacher-18578" aria-selected="false" id="teacher-18578-label"
                                   tabindex="-1">{{setting('teacher8.name')}}</a>
                            </li>
                            <li class="tabs-title " role="presentation">
                                <img src="{{Storage::url('theme/teacher9.png')}}" class="teacher-avatar" width="100px"
                                     alt="{{setting('teacher9.name')}}">
                                <a data-tabs-target="teacher-9" href="#teacher-9" role="tab"
                                   aria-controls="teacher-16093" aria-selected="false" id="teacher-16093-label"
                                   tabindex="-1">{{setting('teacher9.name')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                <div class="tabs-panel is-active" id="teacher-1">
                    <div class="good-teacher-tab-box">
                        <div class="grid-container">
                            <div class="info-teacher">
                                <img width="100%" style="height:454px!important;position: relative;" class="lazy"
                                     data-src="{{Storage::url('theme/teacher1-bg.jpg')}}"
                                     alt="{{setting('teacher1.name')}}">
                                <div class="grid-x grid-padding-x top">
                                    <div class="medium-6  ">
                                    </div>
                                    <div class="medium-6  small-12 ">
                                        <h3>{{setting('teacher1.name')}}</h3>
                                        <span>{{setting('exp1.teacher1.name')}}</span>
                                        <span>{{setting('exp2.teacher1.name')}}</span>
                                        <span>{{setting('exp3.teacher1.name')}}</span>
                                        <span>{{setting('exp4.teacher1.name')}}</span>
                                        <span>{{setting('exp5.teacher1.name')}}</span>
                                        <span>{{setting('exp6.teacher1.name')}}</span>
                                        <a href="" class="profile-teacher-btn">پروفایل استاد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                <div class="tabs-panel " id="teacher-2">
                    <div class="good-teacher-tab-box">
                        <div class="grid-container">
                            <div class="info-teacher">
                                <img width="100%" style="height:454px!important;position: relative;" class="lazy"
                                     data-src="{{Storage::url('theme/teacher2-bg.jpg')}}"
                                     alt="{{setting('teacher2.name')}}">
                                <div class="grid-x grid-padding-x top">
                                    <div class="medium-6  ">
                                    </div>
                                    <div class="medium-6  small-12 ">
                                        <h3>{{setting('teacher2.name')}}</h3>

                                        <span>{{setting('exp1.teacher2.name')}}</span>
                                        <span>{{setting('exp2.teacher2.name')}}</span>
                                        <span>{{setting('exp3.teacher2.name')}}</span>
                                        <span>{{setting('exp4.teacher2.name')}}</span>
                                        <span>{{setting('exp5.teacher2.name')}}</span>
                                        <span>{{setting('exp6.teacher2.name')}}</span>
                                        <a href="" class="profile-teacher-btn">پروفایل استاد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                <div class="tabs-panel " id="teacher-3">
                    <div class="good-teacher-tab-box">
                        <div class="grid-container">
                            <div class="info-teacher">
                                <img width="100%" style="height:454px!important;position: relative;" class="lazy"
                                     data-src="{{Storage::url('theme/teacher3-bg.jpg')}}"
                                     alt="{{setting('teacher3.name')}}">
                                <div class="grid-x grid-padding-x top">
                                    <div class="medium-6  ">
                                    </div>
                                    <div class="medium-6  small-12 ">
                                        <h3>{{setting('teacher3.name')}}</h3>

                                        <span>{{setting('exp1.teacher3.name')}}</span>
                                        <span>{{setting('exp2.teacher3.name')}}</span>
                                        <span>{{setting('exp3.teacher3.name')}}</span>
                                        <span>{{setting('exp4.teacher3.name')}}</span>
                                        <span>{{setting('exp5.teacher3.name')}}</span>
                                        <span>{{setting('exp6.teacher3.name')}}</span>
                                        <a href="" class="profile-teacher-btn">پروفایل استاد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                <div class="tabs-panel " id="teacher-4">
                    <div class="good-teacher-tab-box">
                        <div class="grid-container">
                            <div class="info-teacher">
                                <img width="100%" style="height:454px!important;position: relative;" class="lazy"
                                     data-src="{{Storage::url('theme/teacher4-bg.jpg')}}"
                                     alt="{{setting('teacher4.name')}}">
                                <div class="grid-x grid-padding-x top">
                                    <div class="medium-6  ">
                                    </div>
                                    <div class="medium-6  small-12 ">
                                        <h3>{{setting('teacher4.name')}}</h3>
                                        <span>{{setting('exp1.teacher4.name')}}</span>
                                        <span>{{setting('exp2.teacher4.name')}}</span>
                                        <span>{{setting('exp3.teacher4.name')}}</span>
                                        <span>{{setting('exp4.teacher4.name')}}</span>
                                        <span>{{setting('exp5.teacher4.name')}}</span>
                                        <span>{{setting('exp6.teacher4.name')}}</span>
                                        <a href="" class="profile-teacher-btn">پروفایل استاد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                <div class="tabs-panel " id="teacher-5">
                    <div class="good-teacher-tab-box">
                        <div class="grid-container">
                            <div class="info-teacher">
                                <img width="100%" style="height:454px!important;position: relative;" class="lazy"
                                     data-src="{{Storage::url('theme/teacher5-bg.jpg')}}"
                                     alt="{{setting('teacher5.name')}}">
                                <div class="grid-x grid-padding-x top">
                                    <div class="medium-6  ">
                                    </div>
                                    <div class="medium-6  small-12 ">
                                        <h3>{{setting('teacher5.name')}}</h3>
                                        <span>{{setting('exp1.teacher5.name')}}</span>
                                        <span>{{setting('exp2.teacher5.name')}}</span>
                                        <span>{{setting('exp3.teacher5.name')}}</span>
                                        <span>{{setting('exp4.teacher5.name')}}</span>
                                        <span>{{setting('exp5.teacher5.name')}}</span>
                                        <span>{{setting('exp6.teacher5.name')}}</span>
                                        <a href="" class="profile-teacher-btn">پروفایل استاد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                <div class="tabs-panel " id="teacher-6">
                    <div class="good-teacher-tab-box">
                        <div class="grid-container">
                            <div class="info-teacher">
                                <img width="100%" style="height:454px!important;position: relative;" class="lazy"
                                     data-src="{{Storage::url('theme/teacher6-bg.jpg')}}"
                                     alt="{{setting('teacher6.name')}}">
                                <div class="grid-x grid-padding-x top">
                                    <div class="medium-6  ">
                                    </div>
                                    <div class="medium-6  small-12 ">
                                        <h3>{{setting('teacher6.name')}}</h3>
                                        <span>{{setting('exp1.teacher6.name')}}</span>
                                        <span>{{setting('exp2.teacher6.name')}}</span>
                                        <span>{{setting('exp3.teacher6.name')}}</span>
                                        <span>{{setting('exp4.teacher6.name')}}</span>
                                        <span>{{setting('exp5.teacher6.name')}}</span>
                                        <span>{{setting('exp6.teacher6.name')}}</span>
                                        <a href="" class="profile-teacher-btn">پروفایل استاد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                <div class="tabs-panel " id="teacher-7">
                    <div class="good-teacher-tab-box">
                        <div class="grid-container">
                            <div class="info-teacher">
                                <img width="100%" style="height:454px!important;position: relative;" class="lazy"
                                     data-src="{{Storage::url('theme/teacher7-bg.jpg')}}"
                                     alt="{{setting('teacher7.name')}}">
                                <div class="grid-x grid-padding-x top">
                                    <div class="medium-6  ">
                                    </div>
                                    <div class="medium-6  small-12 ">
                                        <h3>{{setting('teacher7.name')}}</h3>

                                        <span>{{setting('exp1.teacher7.name')}}</span>
                                        <span>{{setting('exp2.teacher7.name')}}</span>
                                        <span>{{setting('exp3.teacher7.name')}}</span>
                                        <span>{{setting('exp4.teacher7.name')}}</span>
                                        <span>{{setting('exp5.teacher7.name')}}</span>
                                        <span>{{setting('exp6.teacher7.name')}}</span>
                                        <a href="" class="profile-teacher-btn">پروفایل استاد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
            <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                <div class="tabs-panel " id="teacher-8">
                    <div class="good-teacher-tab-box">
                        <div class="grid-container">
                            <div class="info-teacher">
                                <img width="100%" style="height:454px!important;position: relative;" class="lazy"
                                     data-src="{{Storage::url('theme/teacher8-bg.jpg')}}"
                                     alt="{{setting('teacher8.name')}}">
                                <div class="grid-x grid-padding-x top">
                                    <div class="medium-6  ">
                                    </div>
                                    <div class="medium-6  small-12 ">
                                        {{setting('teacher8.name')}}
                                        <span>{{setting('exp1.teacher8.name')}}</span>
                                        <span>{{setting('exp2.teacher8.name')}}</span>
                                        <span>{{setting('exp3.teacher8.name')}}</span>
                                        <span>{{setting('exp4.teacher8.name')}}</span>
                                        <span>{{setting('exp5.teacher8.name')}}</span>
                                        <span>{{setting('exp6.teacher8.name')}}</span>
                                        <a href="" class="profile-teacher-btn">پروفایل استاد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                <div class="tabs-panel " id="teacher-9">
                    <div class="good-teacher-tab-box">
                        <div class="grid-container">
                            <div class="info-teacher">
                                <img width="100%" style="height:454px!important;position: relative;" class="lazy"
                                     data-src="{{Storage::url('theme/teacher9-bg.jpg')}}"
                                     alt="{{setting('teacher9.name')}}">
                                <div class="grid-x grid-padding-x top">
                                    <div class="medium-6  ">
                                    </div>
                                    <div class="medium-6  small-12 ">
                                        <h3>{{setting('teacher9.name')}}</h3>

                                        <span>{{setting('exp1.teacher9.name')}}</span>
                                        <span>{{setting('exp2.teacher9.name')}}</span>
                                        <span>{{setting('exp3.teacher9.name')}}</span>
                                        <span>{{setting('exp4.teacher9.name')}}</span>
                                        <span>{{setting('exp5.teacher9.name')}}</span>
                                        <span>{{setting('exp6.teacher9.name')}}</span>
                                        <a href="" class="profile-teacher-btn">پروفایل استاد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #Department -->
        <section class="department">
            <div class="head-packege">
                <h3>دپارتمان ها</h3>
                <hr>
            </div>
            <!-- Gride Start -->
            {{--            <div class="grid-container">--}}
            {{--                <div class="grid-x grid-padding-x dep-section">--}}
            {{--                    @foreach($categories as $category)--}}
            {{--                    <div class="department-crt red">--}}
            {{--                        <img src="http://dpe.ac/api/file/download/5b8fbdaa2483e/icon-koochak-department-of-management-daneshpazhou_pre.png" width="176" alt="مدیریت ، فروش ، بازاریابی">--}}
            {{--                        <h5>مدیریت ، فروش ، بازاریابی</h5>--}}
            {{--                        <p>مدیریت را یاد بگیر تجربیاتتو ثبت کن</p>--}}
            {{--                        <a href="http://dpe.ac/%D8%AF%D9%BE%D8%A7%D8%B1%D8%AA%D9%85%D8%A7%D9%86/5/%D9%85%D8%AF%DB%8C%D8%B1%DB%8C%D8%AA-%D8%8C-%D9%81%D8%B1%D9%88%D8%B4-%D8%8C-%D8%A8%D8%A7%D8%B2%D8%A7%D8%B1%DB%8C%D8%A7%D8%A8%DB%8C/1" class="dep-crt-btn">مشاهده کل دوره ها</a>--}}
            {{--                    </div>--}}

            {{--                    <div class="post4">--}}
            {{--                        <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/389/%D8%A7%D8%B1%D8%B2%D9%87%D8%A7%DB%8C-%D8%AF%DB%8C%D8%AC%DB%8C%D8%AA%D8%A7%D9%84-%D9%88-%D8%B3%D8%B1%D9%85%D8%A7%DB%8C%D9%87-%DA%AF%D8%B0%D8%A7%D8%B1%DB%8C-%D8%AF%D8%B1-%DA%A9%D8%B3%D8%A8-%D9%88-%DA%A9%D8%A7%D8%B1%D9%87%D8%A7%DB%8C-%D8%AF%DB%8C%D8%AC%DB%8C%D8%AA%D8%A7%D9%84">--}}
            {{--                            <img src="http://dpe.ac/api/file/download/5b8fbdaa59282/moarefi-dore-arzhaye-digital-box-dore-daneshpazhou_pre.jpg" alt="ارزهای دیجیتال و سرمایه گذاری در کسب و کارهای دیجیتال">--}}
            {{--                            <h3>ارزهای دیجیتال و سرمایه گذاری در کسب و کارهای دیجیتال</h3>--}}
            {{--                            <span></span>--}}
            {{--                            <ins>959,000 تومان</ins>--}}
            {{--                        </a>--}}
            {{--                    </div>--}}


            {{--                </div>--}}
            {{--                @endforeach--}}

            {{--                @if($categories!=null)--}}
            {{--                <div class="grid-x grid-padding-x dep-section">--}}
            {{--                    @foreach($categories as $category)--}}
            {{--                    <div class="department-crt red">--}}
            {{--                            <img  src="" width="176" alt="">--}}
            {{--                            <p></p>--}}
            {{--                            <a href="" class="dep-crt-btn">مشاهده کل دوره ها</a>--}}
            {{--                        </div>--}}

            {{--                </div>--}}
            {{--                @endforeach--}}
            {{--                @endif--}}
            {{--            </div>--}}

            <div class="grid-container">
                @foreach($categories as $r=>$category)
                       <div class="grid-x grid-padding-x dep-section" >
                            <div class="department-crt department-crt{{$r}} " id="color{{$r}}" >
                            <img src="" width="176" alt="">
                            <H5>{{$category->title}}</H5>
                            <p>مشخصات</p>
                            <a href="{{$category->url}}"
                               class="dep-crt-btn">مشاهده کل دوره ها</a>
                        </div>

                        @if($category->courses() !=null)
                            @foreach($category->courses as $i=>$course)
                                @if($i<4)
                                <div class="post4" >
                                    <a href="{{$course->url}}">
                                        <img id="course-image" src="{{$course->image}}" alt="{{$course->title}}">
                                        <h3 id="course-title">{{$course->title}}</h3>
                                        <span></span>
                                        <ins> </ins>
                                    </a>
                                </div>
                                @endif
                            @endforeach
                        @endif
                    </div>

                @endforeach

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
                                <h1 class="timer count-title before-numb count-number" data-to="{{setting('num1')}}"
                                    data-speed="1500"></h1>
                                <b>{{setting('title1')}}</b>
                            </div>
                        </div>
                        <div class="medium-3 small-6">
                            <div class="graph-des">
                                <h1 class="timer count-title before-numb count-number" data-to="{{setting('num2')}}"
                                    data-speed="1500"></h1>
                                <b>{{setting('title2')}}</b>
                            </div>
                        </div>
                        <div class="medium-3 small-6">
                            <div class="graph-des">
                                <h1 class="timer count-title before-numb count-number" data-to="{{setting('num3')}}"
                                    data-speed="1500"></h1>
                                <b>{{setting('title3')}}</b>
                            </div>
                        </div>
                        <div class="medium-3 small-6">
                            <div class="graph-des">
                                <h1 class="timer count-title before-numb count-number" data-to="{{setting('num4')}}"
                                    data-speed="1000"></h1>
                                <b>{{setting('title4')}}</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-style">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="row medium-12 cell">
                            {{--                            <video width="100%" height="auto" id="video" preload="none" controls poster="{{Storage::url('')}}">--}}
                            {{--                                --}}{{--                                <source src="{{home_video.url}}">--}}
                            {{--                            </video>--}}
                            <video width="100%" height="auto" id="video" preload="none" controls=""
                                   poster="{{Storage::url('theme/video-poster.jpg')}}">
                                <source src="">
                            </video>


                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- #Blog -->
        <section class="newsbar" style="margin-top:303px !important;">
            <div class="grid-container">
                <h2>
                    آخرین مطالب وبلاگ
                </h2>
                <hr>
                <div class="grid-x grid-padding-x">
                    @foreach($posts->take(4) as $post)
                        <div class="medium-6">
                            <section class="thumbpost">
                                <div>
                                    <img src="{{Storage::url($post->image)}}" alt="آیا زمان تغییر شغل فرا رسیده است؟">
                                </div>
                                <a itemprop="url" href="{{$post->url}}">
                                    <h4>{{$post->title}}
                                    </h4>
                                    <p itemprop="description">

                                        {!! \Illuminate\Support\Str::limit(strip_tags($post->description),120,'...') !!}
                                    </p>
                                </a>

                                <a href="{{$post->url}}">  <span>ادامه مطلب » </span></a>


                            </section>
                        </div>
                    @endforeach


                </div>
                <div style="text-align: center;">
                <a href="{{route('blog')}}" class="hollow button secondary"
                   style="padding: 10px 50px;border-radius: 3px;margin: 64px auto 20px;">اخبار بیشتر</a>
                </div>
            </div>

        </section>
    </main>

@endsection


