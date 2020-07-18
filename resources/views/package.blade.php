@extends("mehr4-theme-dpeac::layout")

@section('main')
    <main class="main">
        <!-- #Slider Package -->
        <section class="slider-main" style="position:relative" typeof="Course">
            <img style="height:  560px;" id="course-image" src="{{Storage::url('$category->image')}}"
                 alt="{{setting('site.name')}}">
            <!-- Gride Start -->
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="title-caption">
                        <h1 id="course-title" property="name"
                            style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 4px 3px;">{{$category->title}}</h1>
                        <p id="course-description" property="description"
                           style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 2px 3px;">{{$category->description}}</p>
                    </div>
                    <p style="text-align:  left;float:  left;display:block;margin: 0 auto 0 0;position:  relative;">
                        <a class="float-left video-embed-teacher-free" data-open="video-head-course"
                           data-video="video-202343244" aria-controls="video-head-course" aria-haspopup="true"
                           tabindex="0">
                            <img class="video-graphic" src="{{Storage::url('theme/axasy.gif')}}"
                                 alt="{{$category->title}}">
                        </a>
                    </p>
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
                                <img src="{{Storage::url('theme/icon-time.png')}}"
                                     alt="{{$category->title}}">
                                <b>ساعت دوره:
                                </b>
                                @php($duration=0)
                                @foreach($category->courses as $course)
                                    @foreach($course->lessons as $lesson)
                                        @php($duration=+ $lesson->duration)
                                    @endforeach
                                @endforeach

                                <span property="timeRequired">{{number_format($duration/60)}}  ساعت</span>
                            </li>
                            <li>
                                <img src="{{Storage::url('theme/icon-saat.png')}}"
                                     alt="">
                                <b>طول دوره:
                                </b>
                                <span property="timeRequired">{{number_format($duration/(1440))}} روز</span>
                            </li>
                            <li>
                                <img src="{{Storage::url('theme/users.png')}}" alt="{{$course->title}}">
                                <b>
                                    کاربران:
                                </b>
                                <span property="interactionStatistic">+
                        </span>
                            </li>
                            <li>
                                <img src="{{Storage::url('theme/price.png')}}" alt="">
                                <b>قیمت:
                                    {{$category->courses->sum('price')}}
                                </b>
                                <div rel="offers" typeof="Offer">
                                    <span>قیمت دسته بندی</span>
                                </div>
                            </li>
                        </ul>
                        <a href="{{\Mehr4Payment::courseBuyUrl($course)}}" property="url" class="btn-graphic-sell">ثبت
                            نام آنلاین</a>
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
                         data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky" data-resize="wesh9q-sticky"
                         data-mutate="wesh9q-sticky" data-e="8fyukc-e" data-events="resize"
                         style="max-width: 1124.16px; margin-top: 0px; bottom: auto; top: 0px;">
                        <ul class="des-side-info">
                            <img src="{{Storage::url('$category->image')}}" alt="{{$category->title}}">
                            <p>{{$category->title}}</p>
                            <li>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <span itemprop="timeRequired">{{number_format($duration/60)}}  ساعت</span>
                            </li>
                            <li>
                                <i class="fa fa-history" aria-hidden="true"></i>
                                <span itemprop="timeRequired">{{number_format($duration/(1440))}} روز
                    </span>
                            </li>
                            <li>
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span dir="ltr">+
                        100</span>
                            </li>
                            <li>
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span>{{number_format($category->courses->sum('price') )}}ریال
                       </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="medium-2 small-12 sticky-container" data-sticky-container="data-sticky-container"
                     style="height: 0px;">
                    <div class="stiky-menu-btn sticky is-anchored is-at-top" data-sticky="data-sticky"
                         data-stick-to="top" data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky"
                         data-resize="rreshp-sticky" data-mutate="rreshp-sticky" data-e="nqfflu-e" data-events="resize"
                         style="max-width: 224.828px; margin-top: 0px; bottom: auto; top: 0px;">
                        <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">ثبت نام آنلاین دوره</a>
                    </div>
                </div>
            </div>
            <div class="menu-mobile-cert">
                <p>{{$category->title}}</p>
                <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">ثبت نام آنلاین</a>
            </div>
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                </div>
                <div id="toping"></div>
                <div id="start-menu-stiky"></div>
                <div class="medium-12 cell">
                    <div class="content-course-graphic">
                        <h3>توضیحات</h3>
                        <p>
                            {{$category->description}}
                        </p>
                    </div>
                </div>
                <div id="foo"></div>
            </div>
        </section>
        <!-- #Package Courses -->
        <section class="section-graphics">
            <div class="grid-container">
                <ul>
                    <h2>مدت دوره در برنامه هوشمند</h2>
                    @if($category->courses()!=null)
                        @foreach($category->courses as $course)
                            <li>
                                <div class="grid-x grid-padding-x">
                                    <div class="section-boxes-img medium-3" data-content="10 روز">
                                        <img src="{{Storage::url('$course->image')}}" alt="{{$course->title}}">
                                        <h5>{{$course->title}}</h5>
                                        {{--                                    <center><p style="margin-top:  -46px;color: #fc9000;">احمد حلّت</p></center>--}}
                                    </div>
                                    <div class="section-boxes-sec medium-9">
                                        <b>سرفصل ها</b>
                                        <div class="grid-x grid-padding-x">
                                            @foreach($course->sections as $index=> $section)
                                                <ul id="course-plan-detail" style="overflow-y: hidden;">
                                                    <li>
                                                        {{$section->title}}
                                                    </li>
                                                </ul>
                                            @endforeach

                                        </div>
                                        <a href="" class="btn-section-boxes">مشاهده جزئیات دوره</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif

                </ul>
            </div>

        </section>

        <!-- #Video Package Courses
        <section class="video-graphics">
            <div class="grid-container full sec-video grid-margin-x grid-padding-x">
    <div class="grid-container ">
        <br>
        <br>
        <h4 class="text-right" style="color:white;">مشاهده ویدئو های نمونه</h4>
        <br>

        <div class="grid-x">
            <div class="small-12 medium-6 large-6  cell">
                <video width="90%" controls="" preload="none" poster="img/photoshop.jpg">
                    <source src="img/photoshop.mp4" type="video/mp4">
                </video>
            </div>
            <div class="small-12 medium-6 large-6 cell">
                <video width="90%" controls="" preload="none" poster="img/corel.jpg">
                    <source src="img/corel-2.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
    <div class="grid-container ">
        <br>

        <div class="grid-x">
            <div class="small-12 medium-6 large-6  cell">
                <video width="90%" controls="" preload="none" poster="img/akkasi.jpg">
                    <source src="img/3-camera.mp4" type="video/mp4">
                </video>
            </div>
            <div class="small-12 medium-6 large-6  cell">
                <video width="90%" controls="" preload="none" poster="img/kasbokar shakhsi.jpg">
                    <source src="img/4-job.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>        </section>
         -->


        <!-- #Certificate Packages -->
        <section class="teacher-course">
            <div class="header-tabs">
                <!-- Gride Start -->
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="head-packege-light">
                            <h3>اساتید این پکیج</h3>
                            <hr>
                        </div>
{{--                        <ul class="tabs" data-tabs="" id="teacher-tabs" role="tablist" data-e="1qq8yw-e">--}}
{{--                            @foreach($category->courses as $course)--}}
{{--                                @foreach($courses->teachers as $teacher)--}}
{{--                            <li class="tabs-title is-active" role="presentation">--}}
{{--                                <img src="http://dpe.ac/api/file/download/5a7998681a768_dolatkhah.jpg/dolatkhah.jpg"--}}
{{--                                     class="teacher-avatar" width="100px" alt="مهیار دولتخواه">--}}
{{--                                <a data-tabs-target="teacher-18714" href="#teacher-18714" role="tab"--}}
{{--                                   aria-controls="teacher-18714" aria-selected="true" id="teacher-18714-label"--}}
{{--                                   tabindex="0">{{$teacher->name}}</a>--}}
{{--                            </li>--}}
{{--                                @endforeach--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
{{--            <div class="tabs-content float-center" data-tabs-content="teacher-tabs">--}}
{{--                <div class="tabs-panel is-active" id="teacher-18714" role="tabpanel"--}}
{{--                     aria-labelledby="teacher-18714-label">--}}
{{--                    <div class="good-teacher-tab-box">--}}
{{--                        <div class="grid-container">--}}
{{--                            <div class="info-teacher">--}}
{{--                                <img width="100%" style="height:454px!important;position: relative;" class="lazy"--}}
{{--                                     data-src="http://dpe.ac/api/file/download/5b7c016e30212/mahyar-dolatkhah.png"--}}
{{--                                     alt="مهیار دولتخواه"--}}
{{--                                     src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">--}}
{{--                                <div class="grid-x grid-padding-x top">--}}
{{--                                    <div class="medium-6  ">--}}
{{--                                    </div>--}}
{{--                                    <div class="medium-6  small-12 ">--}}
{{--                                        <h3>مهیار دولتخواه</h3>--}}
{{--                                        <span>برگزیده جشنواره بین المللی عکس خیام ایران اولین دوره 2012</span>--}}
{{--                                        <span>برگزیده جشنواره بین المللی عکس سیتروئن پژو فرانسه 2011</span>--}}
{{--                                        <span>برگزیده جشنواره بین المللی عکس اکسپوز اسلوونی 2010</span>--}}
{{--                                        <span>عضو کمیته فنی داوری آثار و سیاست گذاری خط مشی آموزشی (کانون عکاسان انجمن سینمای جوانان اصفهان)</span>--}}
{{--                                        <span>مدیر بخش هنرهای تجسمی موسسه فرهنگی هنری راه فرزانگان اصفهان</span>--}}
{{--                                        <span>دبیر عکس خبرگزاری کلان شهر اصفهان ایمنا (imna.ir)</span>--}}
{{--                                        <a href="http://dpe.ac/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/18714/%D9%85%D9%87%DB%8C%D8%A7%D8%B1-%D8%AF%D9%88%D9%84%D8%AA%D8%AE%D9%88%D8%A7%D9%87"--}}
{{--                                           class="profile-teacher-btn">پروفایل استاد</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="clear"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tabs-panel " id="teacher-18715" role="tabpanel" aria-labelledby="teacher-18715-label"--}}
{{--                     aria-hidden="true">--}}
{{--                    <div class="good-teacher-tab-box">--}}
{{--                        <div class="grid-container">--}}
{{--                            <div class="info-teacher">--}}
{{--                                <img width="100%" style="position: relative; height: 454px;" class="lazy"--}}
{{--                                     alt="علیرضا تیموری"--}}
{{--                                     src="http://dpe.ac/api/file/download/5b7c017130fdc/teimouri.png">--}}
{{--                                <div class="grid-x grid-padding-x top">--}}
{{--                                    <div class="medium-6  ">--}}
{{--                                    </div>--}}
{{--                                    <div class="medium-6  small-12 ">--}}
{{--                                        <h3>علیرضا تیموری</h3>--}}
{{--                                        <span>دانش آموخته رشته&zwnj;ی شیمی دانشگاه اصفهان</span>--}}
{{--                                        <span>دانش آموخته در کالج دولتی داوسون مونترال کانادا</span>--}}
{{--                                        <a href="http://dpe.ac/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/18715/%D8%B9%D9%84%DB%8C%D8%B1%D8%B6%D8%A7-%D8%AA%DB%8C%D9%85%D9%88%D8%B1%DB%8C"--}}
{{--                                           class="profile-teacher-btn">پروفایل استاد</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="clear"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tabs-panel " id="teacher-18704" role="tabpanel" aria-labelledby="teacher-18704-label"--}}
{{--                     aria-hidden="true">--}}
{{--                    <div class="good-teacher-tab-box">--}}
{{--                        <div class="grid-container">--}}
{{--                            <div class="info-teacher">--}}
{{--                                <img width="100%" style="position: relative; height: 454px;" class="lazy"--}}
{{--                                     alt="فرامرز سنجابی"--}}
{{--                                     src="http://dpe.ac/api/file/download/5b7c016da8e64/faribourz-sanjabi.png">--}}
{{--                                <div class="grid-x grid-padding-x top">--}}
{{--                                    <div class="medium-6  ">--}}
{{--                                    </div>--}}
{{--                                    <div class="medium-6  small-12 ">--}}
{{--                                        <h3>فرامرز سنجابی</h3>--}}
{{--                                        <span>استاد نرم افزارهای گرافیک در مرکز آموزش سازمان فاوا، سال های 1380-1388</span>--}}
{{--                                        <span>مدرس نرم افزارهای گرافیکی در هنرستان هنرهای زیبا، سال های 1382-1388</span>--}}
{{--                                        <span>مدرس نرم افزارهای گرافیکی مرکز آموزش متاکو، سال های 1394-1396</span>--}}
{{--                                        <span>استاد گروه گرافیک در دانشگاه های واحد فلاورجان و مبارکه ، سال های 1380-1382</span>--}}
{{--                                        <span>استاد گروه گرافیک دانشگاه غیر انتفاعی بزرگمهر ، سپهر ، امین فولاد شهر و دانشگاه های علمی کاربردی نقش جهان ، مبارکه و زرین شهر</span>--}}
{{--                                        <a href="http://dpe.ac/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/18704/%D9%81%D8%B1%D8%A7%D9%85%D8%B1%D8%B2-%D8%B3%D9%86%D8%AC%D8%A7%D8%A8%DB%8C"--}}
{{--                                           class="profile-teacher-btn">پروفایل استاد</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="clear"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tabs-panel " id="teacher-18682" role="tabpanel" aria-labelledby="teacher-18682-label"--}}
{{--                     aria-hidden="true">--}}
{{--                    <div class="good-teacher-tab-box">--}}
{{--                        <div class="grid-container">--}}
{{--                            <div class="info-teacher">--}}
{{--                                <img width="100%" style="position: relative; height: 454px;" class="lazy" alt="فرخ دیبا"--}}
{{--                                     src="http://dpe.ac/api/file/download/5af2dbd6a95d7/diba.jpg">--}}
{{--                                <div class="grid-x grid-padding-x top">--}}
{{--                                    <div class="medium-6  ">--}}
{{--                                    </div>--}}
{{--                                    <div class="medium-6  small-12 ">--}}
{{--                                        <h3>فرخ دیبا</h3>--}}
{{--                                        <span>بنیانگذار آژانس بین المللی کسب و کار دیبانژ و مکتب خانه عالی زندگی و تجارت در حوزه مشاوره و آموزش</span>--}}
{{--                                        <span>خالق برند شادیبا و رییس هیات مدیره - خط تولید شیرینی و شکلات</span>--}}
{{--                                        <span>موسس آکادمی فروش ایران و گروه تخصصی عقاب های فروش</span>--}}
{{--                                        <span>سهامدار و رییس هیات مدیره کمپانی معین در کردستان عراق سلیمانیه - صنعت تبلیغات و برند سازی</span>--}}
{{--                                        <span>مشاور ارشد مدیر عامل هولدینگ فن آوران زرین گالری هومن و شرکت پرنسس امارات در صنعت جواهر</span>--}}
{{--                                        <a href="http://dpe.ac/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/18682/%D9%81%D8%B1%D8%AE-%D8%AF%DB%8C%D8%A8%D8%A7"--}}
{{--                                           class="profile-teacher-btn">پروفایل استاد</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="clear"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tabs-panel " id="teacher-19776" role="tabpanel" aria-labelledby="teacher-19776-label"--}}
{{--                     aria-hidden="true">--}}
{{--                    <div class="good-teacher-tab-box">--}}
{{--                        <div class="grid-container">--}}
{{--                            <div class="info-teacher">--}}
{{--                                <img width="100%" style="position: relative; height: 454px;" class="lazy"--}}
{{--                                     alt="احمد حلّت" src="http://dpe.ac/api/file/download/5af2dbd6cf6e2/hellat.jpg">--}}
{{--                                <div class="grid-x grid-padding-x top">--}}
{{--                                    <div class="medium-6  ">--}}
{{--                                    </div>--}}
{{--                                    <div class="medium-6  small-12 ">--}}
{{--                                        <h3>احمد حلّت</h3>--}}
{{--                                        <span>استاد پروازی دانشگاه دوشنبه تاجیکستان</span>--}}
{{--                                        <span>رئیس سخنرانان حرفه ای ایران</span>--}}
{{--                                        <span>بنیانگذار و مدیر مسئول دوهفته&zwnj;نامه ی موفقیت ، پرتیراژترین نشریه در کشور در زمینه موفقیت</span>--}}
{{--                                        <span>کارشناس علوم ارتباطات از دانشگاه علامه طباطبایی</span>--}}
{{--                                        <span>کارشناس ارشد روان&zwnj;شناسی تربیتی</span>--}}
{{--                                        <span>دکترای روانشناسی تربیتی از دانشگاه پداکوژی</span>--}}
{{--                                        <a href="http://dpe.ac/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/19776/%D8%A7%D8%AD%D9%85%D8%AF-%D8%AD%D9%84%D9%91%D8%AA"--}}
{{--                                           class="profile-teacher-btn">پروفایل استاد</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="clear"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </section>

        <!-- #Geatting Us Packages -->
        <section class="getting-us">
            <!-- Gride Start -->
            <div class="grid-container">
                <h2>آنچه از ما دریافت می کنید</h2>
                <div class="grid-x grid-padding-x">
                    <div class="medium-4">
                        <img src="{{Storage::url('theme/service1.png')}}" alt="{{setting('site.name')}}">
                        <p>{{setting('title1cat')}}</p>
                    </div>
                    <div class="medium-4">
                        <img src="{{Storage::url('theme/service2.png')}}" alt="{{setting('site.name')}}">
                        <p>{{setting('title2cat')}}</p>
                    </div>
                    <div class="medium-4">
                        <img src="{{Storage::url('theme/service5.png')}}" alt="{{setting('site.name')}}">

                        <p>{{setting('title3cat')}}</p>
                    </div>
                    <div class="medium-4">
                        <img src="{{Storage::url('theme/service4.png')}}" alt="{{setting('site.name')}}">
                        <p>{{setting('title4cat')}}</p>
                    </div>
                    <div class="medium-4">
                        <img src="{{Storage::url('theme/service3.png')}}" alt="{{setting('site.name')}}">
                        <p>{{setting('title5cat')}}</p>
                    </div>
                    <div class="medium-4">
                        <img src="{{Storage::url('theme/service6.png')}}" alt="{{setting('site.name')}}">
                        <p>{{setting('title6cat')}}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- #varanty Packages -->
        <section class="varanty">
            <div class="grid-container">
                <img src="{{Storage::url('theme/guarantee.jpg')}}" alt="{{setting('site.name')}}">
            </div>
        </section>

        <!-- #Price Packages -->
        <section class="reg-sellers">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="medium-6 float-center">
                        <div class="offering-box">
                            <del>{{$course->price}}</del>
                            <br>
                            <ins>{{number_format($course->price)}}ریال</ins>
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


    </main>
@endsection






