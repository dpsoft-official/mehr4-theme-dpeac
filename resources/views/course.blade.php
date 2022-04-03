@extends("mehr4-theme-dpeac::layout")
@if($course->courses->count()>0)
@section('main')
    <style>
        header.header nav.menu-header ul > li ul li ul {
            margin: 0 !important;
        }

        header.header nav.menu-header ul > li ul li {
            display: block;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
            width: 100%;
        }

        .dropdown.menu > li.is-dropdown-submenu-parent > a:after {
            display: inline-block !important;
            width: 0;
            height: 0;
            border: 0;
            content: "\f105";
            border-bottom-width: 0;
            border-top-style: solid;
            border-color: #ffae00 transparent transparent !important;
            left: 10px !important;
            font: normal normal normal 14px/1 FontAwesome;
            right: auto;
            margin-top: 2px !important;
            color: #ffae00;
            transform: rotate(90deg);
        }

        .is-dropdown-submenu .is-dropdown-submenu-parent.opens-left > a:after {
            display: inline-block !important;
            width: 0;
            height: 0;
            border: 0;
            content: "\f105";
            border-bottom-width: 0;
            border-top-style: solid;
            border-color: #ffae00 transparent transparent !important;
            left: 10px !important;
            font: normal normal normal 14px/1 FontAwesome;
            right: auto;
            margin-top: 5px !important;
            color: #ffae00;
            transform: rotate(180deg);
        }

        .good-teachers .header-tabs .tabs .tabs-title.is-active img {
            border: 6px solid #00a6bc;
            border-radius: 100%;
        }

        .navbar-active {
            border-radius: 2px;
            border-bottom: 3px solid #ffb900;
            transition: all ease-in-out .3s;
        }

        header.header nav.menu-header ul > li:hover {
            border: none;
            border-radius: 2px;
            border-bottom: 3px solid #ffb900;
            transition: all ease-in-out .3s;
        }

        .dropdown.menu a {
            padding: 5px 10px !important;

        }

        .dropdown.menu li {
            margin-top: 10px;

        }

        header.header nav.menu-header ul > li ul {
            background: #fff;
            box-shadow: 0px 0px 6px -2px #000;
            z-index: 999999;
            margin-top: 3px;
            border-radius: 3px;
            border: none;
        }
    </style>
    <!-- #Slider Package -->
    <section class="slider-main" style="position:relative" typeof="Course">
        <img style="height:  560px;" id="course-image" src="{{Storage::url($course->image)}}" alt="{{$course->title}}">
        <!-- Gride Start -->
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="title-caption">
                    <h1 id="course-title" property="name"
                        style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 4px 3px;">{{$course->title}}</h1>
                    <p id="course-description" property="description"
                       style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 2px 3px;">{{$course->excerpt}}
                </div>
                <p style="text-align:  left;float:  left;display:block;margin: 0 auto 0 0;position:  relative;">
                <p>
                    <button data-toggle="animatedModal10">
                        <img class="video-graphic" src="{{Storage::url('theme/axasy.gif')}}" alt="{{$course->title}}">
                    </button>
                </p>
            </div>
            <div class="large reveal" id="animatedModal10" data-reveal data-close-on-click="true"
                 data-animation-in="spin-in" data-animation-out="spin-out">
                @if (isset($course->meta['video']))
                    {!!$course->meta['video']!!}
                @else
                    <style>.h_iframe-aparat_embed_frame {
                            position: relative;
                        }

                        .h_iframe-aparat_embed_frame .ratio {
                            display: block;
                            width: 100%;
                            height: auto;
                        }

                        .h_iframe-aparat_embed_frame iframe {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                        }</style>
                    <div class="h_iframe-aparat_embed_frame"><span style="display: block;padding-top: 57%"></span>
                        <iframe src="https://www.aparat.com/video/video/embed/videohash/6gPjh/vt/frame"
                                allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                    </div>
                @endif
                {{--                {{\MehrLock::lessonUrl($lesson)}}--}}
                <button class="close-button" data-close aria-label="Close reveal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </section>
    <!-- #Info Package -->
    <section class="info-course-graphic" typeof="Course">
        <style>
            section.info-course-graphic ul li {
                list-style: none;
                display: -ms-inline-grid;
                display: inline-grid;
                padding: 10px 25px !important;
                text-align: center;
            }
        </style>
        <!-- Gride Start -->
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-6">
                    <ul>
                        <li>
                            <img src="/vendor/mehr4-theme-dpeac/images/time.png" alt="{{$course->title}}">
                            <b>ساعت دوره:
                            </b>
                            <span property="timeRequired">{{isset($course['meta']['learn_time_houre']) ? $course['meta']['learn_time_houre']  : '112'}}  ساعت </span>
                        </li>
                        <li>
                            <img src="/vendor/mehr4-theme-dpeac/images/icon-saat.png" alt="{{$course->title}}">
                            <b>طول دوره:
                            </b>
                            <span property="timeRequired">   {{isset($course['meta']['learn_time_day']) ? $course['meta']['learn_time_day']  : '20'}}  روز </span>
                        </li>
                        <li>
                            <img src="/vendor/mehr4-theme-dpeac/images/user-course.png" alt="{{$course->title}}">
                            <b>
                                کاربران:
                            </b>
                            <span property="interactionStatistic">
                                  {{$course->maximum_students}} +</span>
                        </li>
                        <li>
                            <img src="/vendor/mehr4-theme-dpeac/images/price-course.png" alt="{{$course->title}}">
                            <b>قیمت:
                            </b>
                            <div rel="offers" typeof="Offer">
                                <span> {{number_format($course->price/10)}} تومان </span>


                                <meta content="نوین دانش پژوهان" property="provider">
                            </div>
                        </li>
                    </ul>
                    <a href="{{\Mehr4Payment::courseBuyUrl($course)}}" property="url" class="btn-graphic-sell">ثبت نام
                        آنلاین</a>
                </div>
            </div>
        </div>
    </section>
    <!-- #Description Packge -->
    <section class="info-courses-graphic">
        <!-- Gride Start -->
        <div class="grid-x grid-padding-x">
            <div class="medium-10 small-12 sticky-container" data-sticky-container="data-sticky-container"
                 data-animate="fade-in fade-out" style="height: 0px;">
                <div class="stiky-menu sticky is-anchored is-at-top" data-sticky="data-sticky" data-stick-to="top"
                     data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky" data-resize="f8m58d-sticky"
                     data-mutate="f8m58d-sticky" data-e="7ob48p-e" data-events="resize"
                     style="max-width: 1527.48px; margin-top: 0px; bottom: auto; top: 0px;">
                    <ul class="des-side-info">
                        <img src="{{Storage::url($course->avatar)}}" alt="{{$course->title}}">
                        <p>{{$course->title}}</p>
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span itemprop="timeRequired"> {{isset($course['meta']['learn_time_houre ']) ? $course['meta']['learn_time_houre ']  : '112'}} ساعت </span>
                        </li>
                        <li>
                            <i class="fa fa-history" aria-hidden="true"></i>
                            <span itemprop="timeRequired">{{isset($course['meta']['learn_time_day ']) ? $course['meta']['learn_time_day']  : '20'}} روز
                    </span>
                        </li>
                        <li>
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <span dir="ltr">
                        {{$course->id*date('m')+(date('d')*2)}} +</span>
                        </li>
                        <li>
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <span>{{number_format($course->price/10)}}
                        تومان</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="medium-2 small-12 sticky-container" data-sticky-container="data-sticky-container"
                 style="height: 0px;">
                <div class="stiky-menu-btn sticky is-anchored is-at-top" data-sticky="data-sticky" data-stick-to="top"
                     data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky" data-resize="2bfw0z-sticky"
                     data-mutate="2bfw0z-sticky" data-e="q26jw4-e" data-events="resize"
                     style="max-width: 305.5px; margin-top: 0px; bottom: auto; top: 0px;">
                    <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">ثبت نام آنلاین دوره</a>
                </div>
            </div>
        </div>
        <div class="menu-mobile-cert">
            <p>{{$course->title}}</p>
            <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">ثبت نام آنلاین</a>
        </div>
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
            </div>
            <div id="toping"></div>
            <div id="start-menu-stiky"></div>
            <div class="medium-12 cell">
                <div class="content-course-graphic">
                    <p>
                        {!!$course->description!!}
                    </p>
                </div>
            </div>
            <div id="foo"></div>
        </div>
    </section>
    @php($teacherIDs=$course->teachers->pluck('id')->toArray())
    <!-- #Package Courses -->
    @if($course->courses()->count()>0)
        <section class="section-graphics">
            <div class="grid-container">
                <ul>
                    <h2>مدت دوره در برنامه هوشمند</h2>
                    @foreach($course->courses as $pc)
                        @php($teacherIDs=array_merge($teacherIDs,$pc->teachers->pluck('id')->toArray()))
                        <li>
                            <div class="grid-x grid-padding-x">
                                <div class="section-boxes-img medium-3"
                                     data-content="{{isset($pc['meta']['learn_time_day']) ? $pc['meta']['learn_time_day']  : '20'}} روز">
                                    <img
                                            src="{{Storage::url($pc->avatar)}}"
                                            alt="{{$pc->title}}">
                                    <h5>{{$pc->title}}</h5>
                                    <center><p
                                                style="margin-top:  -46px;color: #fc9000;">{{$pc->teachers->first()->name??''}}</p>
                                    </center>

                                </div>
                                <div class="section-boxes-sec medium-9">
                                    <b>سرفصل ها</b>
                                    <div class="grid-x grid-padding-x">
                                        <ul id="course-plan-detail" style="overflow-y: hidden; max-height: none;">
                                            @foreach($pc->sections as $index=>$section)
                                                {{--                                            @foreach($section->lessons as $lesson)--}}
                                                <li>{{$section->title}}</li>
                                                {{--                                            @endforeach--}}
                                            @endforeach
                                        </ul>
                                    </div>
                                    <a href="{{$pc->url}}"
                                       class="btn-section-boxes">مشاهده جزئیات دوره</a>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </section>
    @endif
    <!-- #Certificate Packages -->
    <section class="teacher-course">
        <div class="header hide-for-small-only show-for-medium" id="myHeader">
            <div class="medium-12 small-12 sticky-container">
                <div class="" style="bottom: auto; top: 0px;margin-bottom: 0;">
                    <ul class="des-side-info" style="margin-bottom: 0;">
                        <img
                                src="{{$course->image? Storage::url($course->image):Storage::url('theme/head.jpg')}}"
                                alt="{{$course->title}}"
                                style="width: 5%;margin-top: 14px;margin-bottom: -10px;float: right;display: block;">
                        <p style="color:black;display: inline-block;margin-top: 18px;margin-right: 30px;">{{$course->title}}</p>
                        <li style="display: inline-flex;padding: 10px 35px !important;color: black;">

                        </li>
                        <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                            <i class="fa fa-clock-o" aria-hidden="true" style="margin-left: 5px;"></i>
                            <span itemprop="timeRequired"> {{isset($course['meta']['learn_time_houre ']) ? $course['meta']['learn_time_houre ']  : '112'}}  ساعت </span>
                        </li>
                        <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                            <i class="fa fa-history" aria-hidden="true" style="margin-left: 5px;"></i>
                            <span itemprop="timeRequired">{{isset($course['meta']['learn_time_day']) ? $course['meta']['learn_time_day']  : '20'}} روز </span>
                        </li>
                        <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                            <i class="fa fa-graduation-cap" aria-hidden="true" style="margin-left: 5px;"> </i>
                            <span itemprop="timeRequired"
                                  style="color: black;"> {{$course->maximum_students}}  +</span>
                        </li>
                        <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                            <i class="fa fa-money" aria-hidden="true" style="margin-left: 5px;"></i>
                            <span itemprop="timeRequired"
                                  style="color: black;"> {{number_format($course->price/10)}} تومان </span>
                        </li>
                        <li style="float:left;display: inline-flex;padding: 10px 35px !important;color: black;">
                            <a style="animation-name: flash;
animation-duration: 1s;
animation-timing-function: linear;
text-align: center;
margin: auto;
display: block;
background: #00c621;
color: #fff;
padding: 10px 20px;
border-radius: 3px;" href="{{\Mehr4Payment::courseBuyUrl($course)}}">ثبت نام آنلاین دوره</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #Good Teachers -->
        <section class="good-teachers">
            <div class="header-tabs">
                <!-- Gride Start -->
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="head-packege-light">
                            <h3>اساتید این دوره</h3>
                            <hr>
                        </div>
                        <ul class="tabs" data-tabs="" id="teacher-tabs" role="tablist" data-e="ds568c-e">
                            @foreach(\App\User::whereIn('id',$teacherIDs)->get() as $teacher)
                                <li class="tabs-title {{$loop->first?'is-active':''}}" role="presentation">
                                    <img
                                            src="{{$teacher->avatar}}"
                                            class="teacher-avatar"
                                            width="100"
                                            alt="{{$teacher->name}}">
                                    <a data-tabs-target="teacher-{{$loop->index}}" href="#teacher-{{$loop->index}}"
                                       role="tab"
                                       aria-controls="teacher-{{$loop->index}}" aria-selected="false"
                                       id="teacher-{{$loop->index}}-label"
                                       tabindex="-1">{{$teacher->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @foreach(\App\User::whereIn('id',$teacherIDs)->get() as $teacher)
                <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                    <div class="tabs-panel {{$loop->first?'is-active':''}}" id="teacher-{{$loop->index}}">
                        <div class="good-teacher-tab-box">
                            <div class="grid-container">
                                <div class="info-teacher">
                                    <img width="100%" style="height:454px!important;position: relative;" class="lazy"
                                         src="{{isset($teacher['meta']['background']) ? Storage::url($teacher['meta']['background']) : 'https://dpe.ac/storage-dpe-ac_mehrlms_ir/theme/slider movaghat baraye doreha (1).jpg'}}"
                                         alt="{{$teacher->name}}">
                                    <div class="grid-x grid-padding-x top">
                                        <div class="medium-6  ">
                                        </div>
                                        <div class="medium-6  small-12 ">
                                            <h3>{{$teacher->name}}</h3>
                                            {!! $teacher['meta']['expertises']??null !!}
                                            {{--                                    <a href="" class="profile-teacher-btn">پروفایل استاد</a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
        <!-- #Department -->


    </section>
    <!-- #Geatting Us Packages -->
    <section class="getting-us">
        <!-- Gride Start -->
        <div class="grid-container">
            <h2>آنچه از ما دریافت می کنید</h2>
            <div class="grid-x grid-padding-x">
                <div class="medium-4">
                    <img src="{{Storage::url('theme/service1.png')}}" alt="{{setting('title1cat')}}">
                    <p>{{setting('title1cat')}}</p>
                </div>
                <div class="medium-4">
                    <img src="{{Storage::url('theme/service2.png')}}" alt="{{setting('title2cat')}}">
                    <p>{{setting('title2cat')}}</p>
                </div>
                <div class="medium-4">
                    <img src="{{Storage::url('theme/service5.png')}}" alt="{{setting('title3cat')}}">
                    <p>{{setting('title3cat')}}</p>
                </div>
                <div class="medium-4">
                    <img src="{{Storage::url('theme/service4.png')}}" alt="alt="{{setting('title4cat')}}">
                    <p>{{setting('title4cat')}}</p>
                </div>
                <div class="medium-4">
                    <img src="{{Storage::url('theme/service3.png')}}" alt="alt="{{setting('title5cat')}}">
                    <p>{{setting('title5cat')}}</p>
                </div>
                <div class="medium-4">
                    <img src="{{Storage::url('theme/service6.png')}}" alt="alt="{{setting('title6cat')}}">
                    <p>{{setting('title6cat')}}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- #varanty Packages -->
    <section class="varanty">
        <div class="grid-container">
            <img src="{{Storage::url('theme/guarantee.jpg')}}" alt="گارانتی">
        </div>
    </section>
    <!-- #Price Packages -->
    <section class="reg-sellers">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-6 float-center">
                    <div class="offering-box">
                        <del>  {{number_format($course->price/10)}} تومان</del>
                        <br>
                        <ins>  {{number_format($course->price/10)}} تومان</ins>
                    </div>
                </div>
                <div class="medium-12">
                    <a href="{{\Mehr4Payment::courseBuyUrl($course)}}" class="btn-reg-sellers">ثبت نام آنلاین با
                        تخفیف</a>
                </div>
            </div>
        </div>
    </section>
    <!-- #Post Package -->
    <section class="post-send">
        <div class="grid-container">
            <img src="{{Storage::url('theme/post.png')}}" alt="{{setting('site.name')}}">
            <h4>{{setting('post-content')}}</h4>
        </div>
    </section>
    <!-- #Comments Packages -->


    <br>
    <br>
    <br>
    <br>  <br>
    <br>
    <br>
    <br>
@endsection
@else
@section('main')
    <!-- #Slider -->
    <section class="slider-course">
        <div class="back-header">
            <img src="{{$course->image? Storage::url($course->image):Storage::url('theme/head.jpg')}}">
        </div>
        <div class="title-course">
            <h2 id="course-title"
                style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 4px 3px;">{{$course->title}}</h2>
            <p id="course-description"
               style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 2px 3px;">{{$course->excerpt}}</p>
        </div>
    </section>
    <!-- #Info Course  -->
    <section class="info-course">
        <!-- Gride Start -->
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-6 small-12">
                    <div class="info-learning">
                        @if (isset($course->meta['gains']))
                            <h3>آنچه می آموزید</h3>
                            <ul class="learning-course">
                                {!! $course->meta['gains']??'' !!}
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="medium-6 small-12">
                    <div class="info-video">
                        <button data-toggle="animatedModal10">
                            <a class="video-embed-course" data-open="video-head-course" data-video="video-22049107"
                               aria-controls="video-head-course" aria-haspopup="true" tabindex="0">
                                <img src="{{Storage::url('theme/video-poster.jpg')}}" alt="{{$course->name}}">
                            </a>
                        </button>
                    </div>
                    <div class="grid-container">
                        <div class="large reveal" id="animatedModal10" data-reveal data-close-on-click="true"
                             data-animation-in="spin-in" data-animation-out="spin-out">
                            @if (isset($course->meta['video']))
                                {!!$course->meta['video']!!}
                            @else
                                {!!setting('video')!!}
                            @endif
                            <button class="close-button" data-close aria-label="Close reveal" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- #Description Course -->
    <section class="description-course">
        <!-- Gride Start -->
        <style>
            .stiky-menu ul li {
                display: -ms-inline-flexbox;
                display: inline-flex;
                padding: 10px 35px !important;
                border-left: 1px solid #ddd;
            }
        </style>
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-3 small-12 sticky-container" data-sticky-container="" style="height: 504.4px;">
                    <div id="example2"></div>
                    <div class="des-side sticky is-anchored is-at-top" data-sticky="" data-top-anchor="example2:top"
                         data-btm-anchor="foo:bottom" data-resize="pialxj-sticky" data-mutate="pialxj-sticky"
                         data-e="u5acoh-e" style="max-width: 300px; margin-top: 0px; bottom: auto; top: 0px;"
                         data-events="mutate">
                        <img src="{{Storage::url($course->avatar)}}" alt="{{$course->title}}">

                        <div class="des-side-info">
                            <b>{{$course->title}}</b>
                            <p>
                                <i class="fa fa-clock-o" aria-hidden="true"></i> ساعت آموزشی:
                                <span> {{isset($course['meta']['learn_time_houre']) ? $course['meta']['learn_time_houre']  : '112'}}   ساعت</span>
                            </p>
                            <p>
                                <i class="fa fa-history" aria-hidden="true"></i> طول دوره:
                                <span>  {{isset($course['meta']['learn_time_day']) ? $course['meta']['learn_time_day']  : '20'}} روز</span>
                            </p>
                            <p>
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>کاربران:
                                <span dir="ltr"> + {{$course->maximum_students}} </span>
                            </p>
                            <p>
                                <i class="fa fa-money" aria-hidden="true"></i> قیمت:
                                <span> {{number_format($course->price/10)}} تومان </span>
                            </p>
                            <a href="{{\Mehr4Payment::courseBuyUrl($course)}}" class="des-side-info-btn">ثبت نام
                                آنلاین </a>
                        </div>
                    </div>
                </div>
                <div class="medium-9 small-12">
                    <div class="des-content">
                        <div class="des-content-par">
                            <h4>توضیحات</h4>
                            <p style="font-size: 1.2rem;">
                                {!! $course->description !!}
                            </p>
                        </div>

                        @if($course->sections->count()>0)
                            <div class="des-content-learning">
                                <h4>سر فصل های دوره</h4>
                                <ul class="accordion" data-accordion role="tablist">
                                    @foreach($course->sections as $index=> $section)

                                        <li class="accordion-item " data-accordion-item>
                                            <a href="#collapse{{$index}}" role="tab" class="accordion-title"
                                               id="collapse{{$index}}-heading"
                                               style="font-size: 1rem;color: black">{{$section->title}}</a>
                                            <div id="collapse{{$index}}" class="accordion-content" role="tabpanel"
                                                 data-tab-content aria-labelledby="panel1d-heading" data-tab-content>
                                                <ul>
                                                    @foreach($section->lessons as $lesson)
                                                        <li style="list-style: none;padding-top:1%;font-size: 0.9rem;color:black;">
                                                            <a target="_blank"
                                                               href="{{\MehrLock::lessonUrl($lesson)}}">
                                                                <div class="download-detail"
                                                                     style="color: #000000d6;"
                                                                     @if($lesson->preview==false ) data-toggle="tooltip"
                                                                     data-placement="right"
                                                                     title="برای مشاهده این ویدیو باید دوره را خریداری نمایید!"@endif>
                                                                    <i class="fa fa-angle-left"
                                                                       aria-hidden="true"></i> {{$lesson->title}}
                                                                    <div class="time"
                                                                         style="float: left">
                                                                        @if($lesson->preview==true)
                                                                            {{$lesson->duration_read}}
                                                                        @else
                                                                            <i class="fa fa-lock"
                                                                               style="color:#808080bd;"></i>
                                                                        @endif
                                                                    </div>

                                                                </div>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                {{--                            <div id="course-lessons"><h2 class="section-title">جلسات دوره</h2>--}}
                                <div id="accordion">
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div id="foo"></div>
        </div>
        </div>
        <div id="start-menu-stiky"></div>
    </section>
    <!-- #Teachers Course -->
    <section class="teacher-course">
        <!-- Gride Start -->
        <div class="grid-x grid-padding-x">
            <div class="medium-10 small-12 sticky-container" data-sticky-container="" data-animate="fade-in fade-out"
                 style="height: 0px;">
                <div class="stiky-menu sticky is-anchored is-at-top" data-sticky="" data-stick-to="top"
                     data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky" data-resize="910o5i-sticky"
                     data-mutate="910o5i-sticky" data-e="ipomjr-e" data-events="resize"
                     style="max-width: 1124.16px; margin-top: 0px; bottom: auto; top: 0px;">
                    <ul class="des-side-info">
                        <img src="{{Storage::url($course->image)}}" alt="{{('$course->title')}}">
                        <p>{{$course->name}}</p>
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span itemprop="timeRequired"> ساعت</span>
                        </li>
                        <li>
                            <i class="fa fa-history" aria-hidden="true"></i>
                            <span itemprop="timeRequired"> روز</span>
                        </li>
                        <li>
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <span dir="ltr">  {{$course->id*date('m')+(date('d')*2)}} +</span>
                        </li>
                        <li>
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <span> {{number_format($course->price/10)}} تومان </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="medium-2 small-12 sticky-container" data-sticky-container="" style="height: 0px;">
                <div class="stiky-menu-btn sticky is-anchored is-at-top" data-sticky="" data-stick-to="top"
                     data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky" data-resize="n0r1af-sticky"
                     data-mutate="n0r1af-sticky" data-e="139100-e" data-events="resize"
                     style="max-width: 224.828px; margin-top: 0px; bottom: auto; top: 0px;width:100%;">
                    <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">ثبت نام آنلاین دوره</a>
                </div>
            </div>
        </div>
        @if($course->teachers)
            <section class="good-teachers">
                <div class="header-tabs">
                    <!-- Gride Start -->
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x">
                            <div class="head-packege-light">
                                <h3>اساتید این دوره</h3>
                                <hr>
                            </div>
                            <ul class="tabs" data-tabs="" id="teacher-tabs" role="tablist" data-e="ds568c-e">
                                @foreach($course->teachers as $teacher)
                                    <li class="tabs-title {{$loop->first?'is-active':''}}" role="presentation">
                                        <img
                                                src="{{$teacher->avatar}}"
                                                class="teacher-avatar"
                                                width="100px"
                                                alt="{{$teacher->name}}">
                                        <a data-tabs-target="teacher-{{$loop->index}}" href="#teacher-{{$loop->index}}"
                                           role="tab"
                                           aria-controls="teacher-{{$loop->index}}" aria-selected="false"
                                           id="teacher-{{$loop->index}}-label"
                                           tabindex="-1">{{$teacher->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @foreach($course->teachers as $teacher)
                    <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                        <div class="tabs-panel {{$loop->first?'is-active':''}}" id="teacher-{{$loop->index}}">
                            <div class="good-teacher-tab-box">
                                <div class="grid-container">
                                    <div class="info-teacher">
                                        <img width="100%" style="height:454px!important;position: relative;"
                                             class="lazy"
                                             src="{{isset($teacher['meta']['background']) ? Storage::url($teacher['meta']['background']) : 'https://dpe.ac/storage-dpe-ac_mehrlms_ir/theme/slider movaghat baraye doreha (1).jpg'}}"
                                             alt="{{$teacher->name}}">
                                        <div class="grid-x grid-padding-x top">
                                            <div class="medium-6  ">
                                            </div>
                                            <div class="medium-6  small-12 ">
                                                <h3>{{$teacher->name}}</h3>
                                                {!! $teacher['meta']['expertises']??null !!}
                                                {{--                                    <a href="" class="profile-teacher-btn">پروفایل استاد</a>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        @endif
    </section>
    @php($similarCourses=\Dpsoft\Mehr\Models\Course::whereHas('categories',function ($q) use ($course)
{
$q->whereIn('categories.id',$course->categories->pluck('id')->toArray());
})->where('status','published')->distinct()->get())
    <!-- #Comments -->
    @if($course->commentable==true)
        <section class="comments-course">
            <h3>نظرات</h3>
            <!-- Gride Start -->
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="medium-4 small-12">
                        <div class="comments-course-form">
                            <h2>ارسال دیدگاه</h2>
                            @include('mehr4-theme-dpeac::component.comment-creat',['parent'=>'course' ,'parent_id'=>$course->id])
                        </div>
                    </div>
                    @if($course->comments->count()>0)
                        <div class="medium-8 small-12" itemscope="itemscope" itemprop="http://schema.org/Comment">
                            @foreach($course->comments as $comment)
                                <section class="comments-course-box">
                                    <article style="overflow: hidden; max-height: none;">
                                        <b itemprop="author"><a>{{$comment->creator ? $comment->creator->name:"نظر دهنده"}}
                                            </a></b>
                                        <p itemprop="description">
                                            {{$comment->body}}
                                        </p>
                                    </article>
                                </section>
                            @endforeach
                        </div>
                    @endif

                    {{--                        <div class="medium-4 small-12">--}}
                    {{--                        <div class="comment">--}}
                    {{--                            <h5>اولین فرد مشارکت کننده باشید...</h5>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                </div>
            </div>
        </section>
    @endif
    <br>
    <!-- #Register Course -->
    <section class="register-course" style="background:url('{{Storage::url('theme/course-bg.png')}}');">
        <h5>برای ثبت نام این دوره کلیک کنید</h5>
        <a href="{{\Mehr4Payment::courseBuyUrl($course)}}" class="register-course-btn">ثبت نام آنلاین
        </a>
        <div class="menu-mobile-cert">
            <p>{{$course->title}}</p>
            <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">ثبت نام آنلاین</a>
        </div>
    </section>

    <!-- #Department -->
    @if($similarCourses->count()>0)
        <section class="course-card">
            <div class="head-packege">
                <h3>سایر دوره های مشابه</h3>
            </div>
            <div class="grid-container">
                <div class="grid-x grid-padding-x dep-section">
                    @foreach($similarCourses->take(4) as $similarCourse)
                        <div class="post4 ">
                            <a href="{{$similarCourse->url}}" style="height: 300px;">
                                <img
                                        src="{{$similarCourse->avatar? Storage::url($similarCourse->avatar):Storage::url('theme/similar.jpg')}}">
                                <h3>{{$similarCourse->title}}</h3>
                            </a>
                            <ins>{{number_format($similarCourse->price/10)}} تومان</ins>
                            {{--                            <span style="text-align: right;">   </span>--}}
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <br>
    <br>
    <br>
@endsection

@endif


@section('script')
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function () {
            myFunction()
        };

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
                document.getElementById("myHeader").style.display = "block";
            } else {
                header.classList.remove("sticky");
                document.getElementById("myHeader").style.display = "none";

            }
        }
    </script>
@endsection

