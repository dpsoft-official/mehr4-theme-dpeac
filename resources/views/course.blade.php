@extends("mehr4-theme-dpeac::layout")
@if($course->tags()->where('id', 41)->exists())
@section('main')
        <style>
            header.header nav.menu-header ul>li ul li ul {
                margin:0 !important;
            }
            header.header nav.menu-header ul>li ul li {
                display: block;
                border-bottom: 1px solid #ddd;
                line-height: 35px;
                width: 100%;
            }

            .dropdown.menu>li.is-dropdown-submenu-parent>a:after {
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
            .is-dropdown-submenu .is-dropdown-submenu-parent.opens-left>a:after{
                display: inline-block !important;
                width: 0;
                height: 0;
                border: 0;
                content: "\f105";
                border-bottom-width: 0;
                border-top-style: solid;
                border-color: #ffae00 transparent transparent !important;
                left: 10px !important ;
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
            header.header nav.menu-header ul>li:hover {
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
            header.header nav.menu-header ul>li ul {
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
                            <h1 id="course-title" property="name" style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 4px 3px;">{{$course->title}}</h1>
                            <p id="course-description" property="description" style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 2px 3px;">{{$course->excerpt}}</div>
                        <p style="text-align:  left;float:  left;display:block;margin: 0 auto 0 0;position:  relative;">
                            <a class="float-left video-embed-teacher-free" data-open="video-head-course" data-video="video-1093834994" aria-controls="video-head-course" aria-haspopup="true" tabindex="0">
                                <img class="video-graphic" src="{{Storage::url('theme/axasy.gif')}}" alt="{{$course->title}}">
                            </a>
                        </p>

                        <meta itemprop="thumbnail" content="">
                        <meta itemprop="description" content="{{$course->title}}">
                        <meta itemprop="thumbnailUrl" content="">
                        <meta itemprop="uploadDate" content="2018-04-03 18:09:20">
                        <meta content="نوین دانش پژوهان" property="provider">

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
                                    <span property="timeRequired">{{number_format($course->duration/60)}} ساعت </span>
                                </li>
                                <li>
                                    <img src="/vendor/mehr4-theme-dpeac/images/icon-saat.png" alt="{{$course->title}}">
                                    <b>طول دوره:
                                    </b>
                                    <span property="timeRequired"> {{number_format($course->duration/1440)}}  روز</span>
                                </li>
                                <li>
                                    <img src="/vendor/mehr4-theme-dpeac/images/user-course.png" alt="{{$course->title}}">
                                    <b>
                                        کاربران:
                                    </b>
                                    <span property="interactionStatistic">+
                                   {{$course->maximum_students}}</span>
                                </li>
                                <li>
                                    <img src="/vendor/mehr4-theme-dpeac/images/price-course.png" alt="{{$course->title}}">
                                    <b>قیمت:
                                    </b>
                                    <div rel="offers" typeof="Offer">
                                        <span> {{number_format($course->price)}} ریال </span>


                                        <meta content="نوین دانش پژوهان" property="provider">
                                    </div>
                                </li>
                            </ul>
                            <a href="{{\Mehr4Payment::courseBuyUrl($course)}}" property="url" class="btn-graphic-sell">ثبت نام آنلاین</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- #Description Packge -->
            <section class="info-courses-graphic">
                <!-- Gride Start -->
                <div class="grid-x grid-padding-x">
                    <div class="medium-10 small-12 sticky-container" data-sticky-container="data-sticky-container" data-animate="fade-in fade-out" style="height: 0px;">
                        <div class="stiky-menu sticky is-anchored is-at-top" data-sticky="data-sticky" data-stick-to="top" data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky" data-resize="f8m58d-sticky" data-mutate="f8m58d-sticky" data-e="7ob48p-e" data-events="resize" style="max-width: 1527.48px; margin-top: 0px; bottom: auto; top: 0px;">
                            <ul class="des-side-info">
                                <img src="{{Storage::url($course->image)}}" alt="{{$course->title}}">
                                <p>{{$course->title}}</p>
                                <li>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <span itemprop="timeRequired"> {{number_format($course->duration/60)}} ساعت </span>
                                </li>
                                <li>
                                    <i class="fa fa-history" aria-hidden="true"></i>
                                    <span itemprop="timeRequired"> {{number_format($course->duration/1440)}} روز
                    </span>
                                </li>
                                <li>
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <span dir="ltr">+
                        +{{$course->id*date('m')+(date('d')*2)}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-money" aria-hidden="true"></i>
                                    <span>{{number_format($course->price)}}
                        ریال</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="medium-2 small-12 sticky-container" data-sticky-container="data-sticky-container" style="height: 0px;">
                        <div class="stiky-menu-btn sticky is-anchored is-at-top" data-sticky="data-sticky" data-stick-to="top" data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky" data-resize="2bfw0z-sticky" data-mutate="2bfw0z-sticky" data-e="q26jw4-e" data-events="resize" style="max-width: 305.5px; margin-top: 0px; bottom: auto; top: 0px;">
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
            <!-- #Package Courses -->
            <section class="section-graphics">
                <div class="grid-container">
                    <ul>
                        <h2>مدت دوره در برنامه هوشمند</h2>
                        <li>
                            <div class="grid-x grid-padding-x">
                                <div class="section-boxes-img medium-3" data-content="10 روز">
                                    <img src="http://dpe.ac/api/file/download/5b446325e892d/dore-majazi-amozesh-akasy-dar-memary-dakely-moghadamaty-box-dore-daneshpazhouhan-institute.jpg" alt="عکاسی مقدماتی">
                                    <h5>عکاسی مقدماتی</h5>
                                    <center><p style="margin-top:  -46px;color: #fc9000;">مهیار دولتخواه</p></center>

                                </div>
                                <div class="section-boxes-sec medium-9">
                                    <b>سرفصل ها</b>
                                    <div class="grid-x grid-padding-x">
                                        <ul id="course-plan-detail" style="overflow-y: hidden; max-height: none;">
                                            <li>نور و ساختار دوربین های تک لنزی بازتابی</li>
                                            <li>دیافراگم و اپرچر</li>
                                            <li>شاتر و تکنیک های آن</li>
                                            <li>فاصله کانونی و فوکوس</li>
                                            <li>فاصله کانونی و انواع لنز</li>
                                            <li>زاویه دید در لنزها</li>
                                            <li>طبقه بندی لنزها</li>
                                            <li>انواع فیلتر</li>
                                            <li>ایزو</li>
                                            <li>اندازه گیری نور و تنظیمات آن</li>
                                            <li>تراز سفیدی</li>
                                            <li>ترکیب بندی در عکاسی</li>
                                            <li>ساخت تصاویر پانوراما</li>
                                        </ul>
                                    </div>
                                    <a href="/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/44/عکاسی مقدماتی" class="btn-section-boxes">مشاهده جزئیات دوره</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>        </section>
            <!-- #Certificate Packages -->
            <section class="teacher-course">
                <div class="header hide-for-small-only show-for-medium" id="myHeader" >
                    <div class="medium-12 small-12 sticky-container">
                        <div class="" style="bottom: auto; top: 0px;margin-bottom: 0;">
                            <ul class="des-side-info" style="margin-bottom: 0;">
                                <img
                                    src="{{$course->image? Storage::url('$course->image'):Storage::url('theme/head.jpg')}}"
                                    alt="{{$course->title}}"
                                    style="width: 5%;margin-top: 14px;margin-bottom: -10px;float: right;display: block;">
                                <p style="color:black;display: inline-block;margin-top: 18px;margin-right: 30px;">{{$course->title}}</p>
                                <li style="display: inline-flex;padding: 10px 35px !important;color: black;">

                                </li>
                                <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                                    <i class="fa fa-clock-o" aria-hidden="true" style="margin-left: 5px;"></i>
                                    <span itemprop="timeRequired"> {{number_format($course->duration/60)}}ساعت  </span>
                                </li>
                                <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                                    <i class="fa fa-history" aria-hidden="true" style="margin-left: 5px;"></i>
                                    <span itemprop="timeRequired"> {{number_format($course->duration/1440)}} روز</span>
                                </li>
                                <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                                    <i class="fa fa-graduation-cap" aria-hidden="true" style="margin-left: 5px;"> </i>
                                    <span itemprop="timeRequired" style="color: black;">+ {{$course->id*date('m')+(date('d')*2)}}  </span>
                                </li>
                                <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                                    <i class="fa fa-money" aria-hidden="true" style="margin-left: 5px;"></i>
                                    <span itemprop="timeRequired" style="color: black;"> {{number_format($course->price)}} ریال </span>
                                </li>
                                <li style="float:left;display: inline-flex;padding: 10px 35px !important;color: black;">
                                    <a  style="animation-name: flash;
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
                <div class="header-tabs">
                    <!-- Gride Start -->
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x">
                            <div class="head-packege-light">
                                <h3>اساتید این دور</h3>
                                <hr>
                            </div>
                            <ul class="tabs" data-tabs="" id="teacher-tabs" role="tablist" data-e="mvo36u-e">
                                <li class="tabs-title is-active" role="presentation">
                                    <img src="http://dpe.ac/api/file/download/5a7998681a768_dolatkhah.jpg/dolatkhah.jpg" class="teacher-avatar" width="100px" alt="مهیار دولتخواه">
                                    <a data-tabs-target="teacher-18714" href="#teacher-18714" role="tab" aria-controls="teacher-18714" aria-selected="true" id="teacher-18714-label" tabindex="0">مهیار دولتخواه</a>
                                </li>
                                <li class="tabs-title " role="presentation">
                                    <img src="http://dpe.ac/api/file/download/5af26f0ae112d/TEIMOURI2.jpg" class="teacher-avatar" width="100px" alt="علیرضا تیموری">
                                    <a data-tabs-target="teacher-18715" href="#teacher-18715" role="tab" aria-controls="teacher-18715" aria-selected="false" id="teacher-18715-label" tabindex="-1">علیرضا تیموری</a>
                                </li>
                                <li class="tabs-title " role="presentation">
                                    <img src="http://dpe.ac/api/file/download/5ab89e2266d01/sanjabi.png" class="teacher-avatar" width="100px" alt="فرامرز سنجابی">
                                    <a data-tabs-target="teacher-18704" href="#teacher-18704" role="tab" aria-controls="teacher-18704" aria-selected="false" id="teacher-18704-label" tabindex="-1">فرامرز سنجابی</a>
                                </li>
                                <li class="tabs-title " role="presentation">
                                    <img src="http://dpe.ac/api/file/download/5af282343ccbb/diba-box.jpg" class="teacher-avatar" width="100px" alt="فرخ دیبا">
                                    <a data-tabs-target="teacher-18682" href="#teacher-18682" role="tab" aria-controls="teacher-18682" aria-selected="false" id="teacher-18682-label" tabindex="-1">فرخ دیبا</a>
                                </li>
                                <li class="tabs-title " role="presentation">
                                    <img src="http://dpe.ac/api/file/download/5af27ecec71b4/ahmad-hellat-box.jpg" class="teacher-avatar" width="100px" alt="احمد حلّت">
                                    <a data-tabs-target="teacher-19776" href="#teacher-19776" role="tab" aria-controls="teacher-19776" aria-selected="false" id="teacher-19776-label" tabindex="-1">احمد حلّت</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tabs-content float-center" data-tabs-content="teacher-tabs">
                    <div class="tabs-panel is-active" id="teacher-18714" role="tabpanel" aria-labelledby="teacher-18714-label">
                        <div class="good-teacher-tab-box">
                            <div class="grid-container">
                                <div class="info-teacher">
                                    <img width="100%" style="position: relative; height: 454px;" class="lazy" alt="مهیار دولتخواه" src="http://dpe.ac/api/file/download/5b7c016e30212/mahyar-dolatkhah.png">
                                    <div class="grid-x grid-padding-x top">
                                        <div class="medium-6  ">
                                        </div>
                                        <div class="medium-6  small-12 ">
                                            <h3>مهیار دولتخواه</h3>
                                            <span>برگزیده جشنواره بین المللی عکس خیام ایران اولین دوره 2012</span>
                                            <span>برگزیده جشنواره بین المللی عکس سیتروئن پژو فرانسه 2011</span>
                                            <span>برگزیده جشنواره بین المللی عکس اکسپوز اسلوونی 2010</span>
                                            <span>عضو کمیته فنی داوری آثار و سیاست گذاری خط مشی آموزشی (کانون عکاسان انجمن سینمای جوانان اصفهان)</span>
                                            <span>مدیر بخش هنرهای تجسمی موسسه فرهنگی هنری راه فرزانگان اصفهان</span>
                                            <span>دبیر عکس خبرگزاری کلان شهر اصفهان ایمنا (imna.ir)</span>
                                            <a href="http://dpe.ac/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/18714/%D9%85%D9%87%DB%8C%D8%A7%D8%B1-%D8%AF%D9%88%D9%84%D8%AA%D8%AE%D9%88%D8%A7%D9%87" class="profile-teacher-btn">پروفایل استاد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tabs-panel " id="teacher-18715" role="tabpanel" aria-labelledby="teacher-18715-label" aria-hidden="true">
                        <div class="good-teacher-tab-box">
                            <div class="grid-container">
                                <div class="info-teacher">
                                    <img width="100%" style="position: relative; height: 454px;" class="lazy" alt="علیرضا تیموری" src="http://dpe.ac/api/file/download/5b7c017130fdc/teimouri.png">
                                    <div class="grid-x grid-padding-x top">
                                        <div class="medium-6  ">
                                        </div>
                                        <div class="medium-6  small-12 ">
                                            <h3>علیرضا تیموری</h3>
                                            <span>دانش آموخته رشته&zwnj;ی شیمی دانشگاه اصفهان</span>
                                            <span>دانش آموخته در کالج دولتی داوسون مونترال کانادا</span>
                                            <a href="http://dpe.ac/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/18715/%D8%B9%D9%84%DB%8C%D8%B1%D8%B6%D8%A7-%D8%AA%DB%8C%D9%85%D9%88%D8%B1%DB%8C" class="profile-teacher-btn">پروفایل استاد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tabs-panel " id="teacher-18704" role="tabpanel" aria-labelledby="teacher-18704-label" aria-hidden="true">
                        <div class="good-teacher-tab-box">
                            <div class="grid-container">
                                <div class="info-teacher">
                                    <img width="100%" style="position: relative; height: 454px;" class="lazy" alt="فرامرز سنجابی" src="http://dpe.ac/api/file/download/5b7c016da8e64/faribourz-sanjabi.png">
                                    <div class="grid-x grid-padding-x top">
                                        <div class="medium-6  ">
                                        </div>
                                        <div class="medium-6  small-12 ">
                                            <h3>فرامرز سنجابی</h3>
                                            <span>استاد نرم افزارهای گرافیک در مرکز آموزش سازمان فاوا، سال های 1380-1388</span>
                                            <span>مدرس نرم افزارهای گرافیکی در هنرستان هنرهای زیبا، سال های 1382-1388</span>
                                            <span>مدرس نرم افزارهای گرافیکی مرکز آموزش متاکو، سال های 1394-1396</span>
                                            <span>استاد گروه گرافیک در دانشگاه های واحد فلاورجان و مبارکه ، سال های 1380-1382</span>
                                            <span>استاد گروه گرافیک دانشگاه غیر انتفاعی بزرگمهر ، سپهر ، امین فولاد شهر و دانشگاه های علمی کاربردی نقش جهان ، مبارکه و زرین شهر</span>
                                            <a href="http://dpe.ac/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/18704/%D9%81%D8%B1%D8%A7%D9%85%D8%B1%D8%B2-%D8%B3%D9%86%D8%AC%D8%A7%D8%A8%DB%8C" class="profile-teacher-btn">پروفایل استاد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tabs-panel " id="teacher-18682" role="tabpanel" aria-labelledby="teacher-18682-label" aria-hidden="true">
                        <div class="good-teacher-tab-box">
                            <div class="grid-container">
                                <div class="info-teacher">
                                    <img width="100%" style="position: relative; height: 454px;" class="lazy" alt="فرخ دیبا" src="http://dpe.ac/api/file/download/5af2dbd6a95d7/diba.jpg">
                                    <div class="grid-x grid-padding-x top">
                                        <div class="medium-6  ">
                                        </div>
                                        <div class="medium-6  small-12 ">
                                            <h3>فرخ دیبا</h3>
                                            <span>بنیانگذار آژانس بین المللی کسب و کار دیبانژ و مکتب خانه عالی زندگی و تجارت در حوزه مشاوره و آموزش</span>
                                            <span>خالق برند شادیبا و رییس هیات مدیره - خط تولید شیرینی و شکلات</span>
                                            <span>موسس آکادمی فروش ایران و گروه تخصصی عقاب های فروش</span>
                                            <span>سهامدار و رییس هیات مدیره کمپانی معین در کردستان عراق سلیمانیه - صنعت تبلیغات و برند سازی</span>
                                            <span>مشاور ارشد مدیر عامل هولدینگ فن آوران زرین گالری هومن و شرکت پرنسس امارات در صنعت جواهر</span>
                                            <a href="http://dpe.ac/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/18682/%D9%81%D8%B1%D8%AE-%D8%AF%DB%8C%D8%A8%D8%A7" class="profile-teacher-btn">پروفایل استاد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="tabs-panel " id="teacher-19776" role="tabpanel" aria-labelledby="teacher-19776-label" aria-hidden="true">
                        <div class="good-teacher-tab-box">
                            <div class="grid-container">
                                <div class="info-teacher">
                                    <img width="100%" style="position: relative; height: 454px;" class="lazy" alt="احمد حلّت" src="http://dpe.ac/api/file/download/5af2dbd6cf6e2/hellat.jpg">
                                    <div class="grid-x grid-padding-x top">
                                        <div class="medium-6  ">
                                        </div>
                                        <div class="medium-6  small-12 ">
                                            <h3>احمد حلّت</h3>
                                            <span>استاد پروازی دانشگاه دوشنبه تاجیکستان</span>
                                            <span>رئیس سخنرانان حرفه ای ایران</span>
                                            <span>بنیانگذار و مدیر مسئول دوهفته&zwnj;نامه ی موفقیت ، پرتیراژترین نشریه در کشور در زمینه موفقیت</span>
                                            <span>کارشناس علوم ارتباطات از دانشگاه علامه طباطبایی</span>
                                            <span>کارشناس ارشد روان&zwnj;شناسی تربیتی</span>
                                            <span>دکترای روانشناسی تربیتی از دانشگاه پداکوژی</span>
                                            <a href="http://dpe.ac/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/19776/%D8%A7%D8%AD%D9%85%D8%AF-%D8%AD%D9%84%D9%91%D8%AA" class="profile-teacher-btn">پروفایل استاد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
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
                </div>        </section>
            <!-- #varanty Packages -->
            <section class="varanty">
                <div class="grid-container">
                    <img src="{{Storage::url('theme/guarantee.jpg')}}" alt="گارانتی">
                </div>        </section>
            <!-- #Price Packages -->
            <section class="reg-sellers">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="medium-6 float-center">
                            <div class="offering-box">
                                <del>  {{number_format($course->price)}} ریال </del>
                                <br>
                                <ins>  {{number_format($course->price)}}  ریال  </ins>
                            </div>
                        </div>
                        <div class="medium-12">
                            <a href="{{\Mehr4Payment::courseBuyUrl($course)}}" class="btn-reg-sellers">ثبت نام آنلاین با تخفیف</a>
                        </div>
                    </div>
                </div>        </section>
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
                        @if (isset($course->meta['future']))
                            <h3>آنچه می آموزید</h3>
                            <ul class="learning-course">
                                <li> {{$course->meta['future']}}</li>                                                          </li>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="medium-6 small-12">
                    <div class="info-video">
                        <a class="video-embed-course" data-open="video-head-course" data-video="video-22049107"
                           aria-controls="video-head-course" aria-haspopup="true" tabindex="0">
                            <img src="{{Storage::url('theme/video-poster.jpg')}}" alt="{{$course->name}}">
                        </a>
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
                <div class="medium-3 small-12 sticky-container" data-sticky-container="" style="height: 481px;">
                    <div id="example2"></div>
                    <div class="des-side sticky is-anchored is-at-top" data-stick-to="bottom" data-sticky=""
                         data-top-anchor="example2:top" data-btm-anchor="foo:bottom" data-resize="tlab0p-sticky"
                         data-mutate="tlab0p-sticky" data-e="rj6ejr-e" data-events="resize"
                         style="max-width: 300px; margin-top: 0px; bottom: auto; top: 0px;">
                        <img src="{{Storage::url($course->image)}}" alt="{{$course->title}}">
                        <div class="des-side-info">
                            <b>{{$course->name}}</b>
                            <p>
                                <i class="fa fa-clock-o" aria-hidden="true"></i> ساعت آموزشی:
                                <span>  {{number_format($course->duration/60)}} ساعت</span>
                            </p>
                            <p>
                                <i class="fa fa-history" aria-hidden="true"></i> طول دوره:
                                <span>  {{number_format($course->duration/1440)}} روز</span>
                            </p>
                            <p>
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>کاربران:
                                <span dir="ltr">+ {{$course->id*date('m')+(date('d')*2)}} </span>
                            </p>
                            <p>
                                <i class="fa fa-money" aria-hidden="true"></i> قیمت:
                                <span>  {{number_format($course->price)}} ریال</span>
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
                            <p>
                                {!! $course->description !!}
                            </p>
                        </div>

                        <div class="des-content-learning">
                            <h4>سر فصل های دوره</h4>
                            @foreach($course->sections as $index=> $section)
                                <span>{{$section->title}}</span>
                            @endforeach
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
                            <span dir="ltr"> + {{$course->id*date('m')+(date('d')*2)}} </span>
                        </li>
                        <li>
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <span> {{number_format($course->price )}} ریال </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="medium-2 small-12 sticky-container" data-sticky-container="" style="height: 0px;">
                <div class="stiky-menu-btn sticky is-anchored is-at-top" data-sticky="" data-stick-to="top"
                     data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky" data-resize="n0r1af-sticky"
                     data-mutate="n0r1af-sticky" data-e="139100-e" data-events="resize"
                     style="max-width: 224.828px; margin-top: 0px; bottom: auto; top: 0px;">
                    <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">ثبت نام آنلاین دوره</a>
                </div>
            </div>
        </div>
        <section class="teacher-course">
            <div class="header-tabs">
                <!-- Gride Start -->

                <div class="header hide-for-small-only show-for-medium" id="myHeader" >
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
                                    <span itemprop="timeRequired"> {{number_format($course->duration/60)}}ساعت  </span>
                                </li>
                                <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                                    <i class="fa fa-history" aria-hidden="true" style="margin-left: 5px;"></i>
                                    <span itemprop="timeRequired"> {{number_format($course->duration/1440)}} روز</span>
                                </li>
                                <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                                    <i class="fa fa-graduation-cap" aria-hidden="true" style="margin-left: 5px;"> </i>
                                    <span itemprop="timeRequired" style="color: black;"> +{{$course->id*date('m')+(date('d')*2)}}  </span>
                                </li>
                                <li style="display: inline-flex;padding: 10px 35px !important;border-left: 1px solid #ddd;color: black;">
                                    <i class="fa fa-money" aria-hidden="true" style="margin-left: 5px;"></i>
                                    <span itemprop="timeRequired" style="color: black;"> {{number_format($course->price)}} ریال </span>
                                </li>
                                   <li style="float:left;display: inline-flex;padding: 10px 35px !important;color: black;">
                                    <a  style="animation-name: flash;
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

                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="head-packege-light">
                            <h3>اساتید این دوره</h3>
                            <hr>
                        </div>
                        <ul class="tabs" data-tabs="" id="teacher-tabs" role="tablist" data-e="1qq8yw-e">
                            @foreach($course->teachers as $teacher)
                                <li class="tabs-title " role="presentation">
                                    <img src="{{Storage::url('theme/user.png')}}"
                                         class="teacher-avatar" width="100px" alt="{{$teacher->name}}">
                                    <a data-tabs-target="teacher-18714" href="" role="tab"
                                       aria-controls="teacher-18714" aria-selected="true" id=""
                                       tabindex="0">{{$teacher->name}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

        </section>
    </section>
    @php($similarCourses=\Dpsoft\Mehr\Models\Course::whereHas('categories',function ($q) use ($course)
{
$q->whereIn('categories.id',$course->categories->pluck('id')->toArray());
})->get())
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
                                <img src="{{$similarCourse->image? Storage::url($similarCourse->image):Storage::url('theme/similar.jpg')}}">
                                <h3>{{$course->title}}</h3>
                            </a>
                            <ins>{{number_format($similarCourse->price)}} ریال </ins>
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
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
                document.getElementById("myHeader").style.display= "block";
            } else {
                header.classList.remove("sticky");
                document.getElementById("myHeader").style.display= "none";

            }
        }
    </script>
@endsection

