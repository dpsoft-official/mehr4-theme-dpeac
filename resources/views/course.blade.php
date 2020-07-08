@extends("mehr4-theme-dpeac::layout")

@section('main')
    <main class="main">
        <!-- #Slider -->
        <section class="slider-course">
            <div class="back-header">
                <img src="{{Storage::url('$course->image')}}" alt="">
            </div>
                 <div class="title-course">
                <h2 id="course-title" style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 4px 3px;">{{$course->title}}</h2>
                <p id="course-description" style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 2px 3px;">{{$course->description}}</p>
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
                                <li>                                                                        {{$course->meta['future']}}
                                    {{$course->meta['future']}}
                                </li>

                            </ul>
                                @endif
                        </div>
                    </div>
                    <div class="medium-6 small-12">
                        <div class="info-video">
                            <a class="video-embed-course" data-open="video-head-course" data-video="video-22049107" aria-controls="video-head-course" aria-haspopup="true" tabindex="0">
                                <img src="" alt="{{$course->name}}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>         </section>

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
                        <div class="des-side sticky is-anchored is-at-top" data-sticky="" data-top-anchor="example2:top" data-btm-anchor="foo:bottom" data-resize="tlab0p-sticky" data-mutate="tlab0p-sticky" data-e="rj6ejr-e" data-events="resize" style="max-width: 300px; margin-top: 0px; bottom: auto; top: 0px;">
                            <img src="http://dpe.ac/api/file/download/5b8fbda90734a/hesabdari-baraye-hame-box-dore_pre.jpg" alt="حسابداری برای همه(کاربردی)">
                            <div class="des-side-info">
                                <b>{{$course->name}}</b>
                                <p>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i> ساعت آموزشی:
                                    <span>22 ساعت</span>
                                </p>
                                <p>
                                    <i class="fa fa-history" aria-hidden="true"></i> طول دوره:
                                    <span>52 روز</span>
                                </p>
                                <p>
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>کاربران:
                                    <span dir="ltr">+ 100</span>
                                </p>
                                <p>
                                    <i class="fa fa-money" aria-hidden="true"></i> قیمت:
                                    <span>{{$course->price}}</span>
                                </p>
                                <a href="/lms/index.php/buy/course?plan_id=728" class="des-side-info-btn">ثبت نام آنلاین </a>
                            </div>
                        </div>
                    </div>
                    <div class="medium-9 small-12">
                        <div class="des-content">
                            <div class="des-content-par">
                                <h4>توضیحات</h4>
                                <p>
                                    {{$course->description}}
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
            <div id="start-menu-stiky"></div>         </section>

        <!-- #Teachers Course -->
        <section class="teacher-course">
            <!-- Gride Start -->
            <div class="grid-x grid-padding-x">
                <div class="medium-10 small-12 sticky-container" data-sticky-container="" data-animate="fade-in fade-out" style="height: 0px;">
                    <div class="stiky-menu sticky is-anchored is-at-top" data-sticky="" data-stick-to="top" data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky" data-resize="910o5i-sticky" data-mutate="910o5i-sticky" data-e="ipomjr-e" data-events="resize" style="max-width: 1124.16px; margin-top: 0px; bottom: auto; top: 0px;">
                        <ul class="des-side-info">
                            <img src="http://dpe.ac/api/file/download/5b8fbda90734a/hesabdari-baraye-hame-box-dore_pre.jpg" alt="حسابداری برای همه(کاربردی)">
                            <p>{{$course->name}}</p>
                            <li>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <span itemprop="timeRequired">22 ساعت</span>
                            </li>
                            <li>
                                <i class="fa fa-history" aria-hidden="true"></i>
                                <span itemprop="timeRequired">52 روز</span>
                            </li>
                            <li>
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span dir="ltr">+ 100</span>
                            </li>
                            <li>
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span> {{number_format($course->price )}} ریال </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="medium-2 small-12 sticky-container" data-sticky-container="" style="height: 0px;">
                    <div class="stiky-menu-btn sticky is-anchored is-at-top" data-sticky="" data-stick-to="top" data-top-anchor="start-menu-stiky" data-btm-anchor="end-menu-stiky" data-resize="n0r1af-sticky" data-mutate="n0r1af-sticky" data-e="139100-e" data-events="resize" style="max-width: 224.828px; margin-top: 0px; bottom: auto; top: 0px;">
                        <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">ثبت نام آنلاین دوره</a>
                    </div>
                </div>
            </div>
{{--            اساتید--}}
{{--            <div class="header-tabs">--}}
{{--                <!-- Gride Start -->--}}
{{--                <div class="grid-container">--}}
{{--                    <div class="grid-x grid-padding-x">--}}
{{--                        <div class="head-packege-light">--}}
{{--                            <h3> اساتید این دوره</h3>--}}
{{--                            <hr>--}}
{{--                        </div>--}}
{{--                        <ul class="tabs" data-tabs="" id="course-tabs" role="tablist" data-e="9v8y1y-e">--}}
{{--                            <li class="tabs-title is-active" role="presentation">--}}
{{--                                <img src="http://dpe.ac/api/file/download/5a79974a2ce26_Untitled-1.jpg/Untitled-1.jpg" class="teacher-avatar" width="100px" alt="حسابداری برای همه(کاربردی)">--}}
{{--                                <a data-tabs-target="teacher-18710" href="#teacher-18710" role="tab" aria-controls="teacher-18710" aria-selected="true" id="teacher-18710-label" tabindex="0">شیرین رزاز زاده</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- End Gride -->


{{--            <div class="tabs-content float-center" data-tabs-content="course-tabs">--}}
{{--                <div class="tabs-panel is-active" id="teacher-18710" role="tabpanel" aria-labelledby="teacher-18710-label">--}}
{{--                    <div class="good-teacher-tab-box">--}}
{{--                        <div class="grid-container">--}}
{{--                            <div class="info-teacher">--}}
{{--                                <img width="100%" style="height:454px!important;position: relative;background: #fff;" src="http://dpe.ac/api/file/download/5b7c0170dcd53/shrin-razaazzadeh.png" alt="حسابداری برای همه(کاربردی)">--}}
{{--                                <div class="grid-x grid-padding-x top">--}}
{{--                                    <div class="medium-6  ">--}}
{{--                                    </div>--}}
{{--                                    <div class="medium-6  small-12 ">--}}
{{--                                        <h3>شیرین رزاز زاده</h3>--}}
{{--                                        <a href="/%D8%A7%D8%B3%D8%AA%D8%A7%D8%AF/18710/شیرین رزاز زاده" class="profile-teacher-btn">پروفایل استاد</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="clear"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="clear"></div>         </section>--}}


{{--            متغیر کاربران وارد شود--}}
        <!-- #Comments -->
{{--        <section class="comments-course">--}}
{{--            <h3>نظرات</h3>--}}
{{--            <!-- Gride Start -->--}}
{{--            <div class="grid-container">--}}
{{--                <div class="grid-x grid-padding-x">--}}
{{--                    <div class="medium-4 small-12">--}}
{{--                        <div class="comments-course-form">--}}
{{--                            <h2>ارسال دیدگاه</h2>--}}

{{--                            <form name="course-comment" class="comments-course-form-validate formcomment">--}}
{{--                                <label for="">--}}
{{--                                    <input type="text" name="name" placeholder="نام و نام خانوادگی: " required="">--}}
{{--                                </label>--}}
{{--                                <label for="">--}}
{{--                                    <input type="email" name="email" placeholder="ایمیل شما: " required="">--}}
{{--                                </label>--}}
{{--                                <label for="">--}}
{{--                                    <textarea name="body" id="" rows="3" placeholder="نظر شما: " required=""></textarea>--}}
{{--                                </label>--}}
{{--                                <input type="hidden" name="csrf_name" value="csrf5f054e9accff8">--}}
{{--                                <input type="hidden" name="csrf_value" value="5128e6f0b00cf102a40935428486e5fe">                    <button type="submit" id="btn-course-comment-submit" class="comments-course-form-validate-btn">--}}
{{--                                    ارسال--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="medium-8 small-12">--}}
{{--                    </div>--}}
{{--                    <div class="medium-4 small-12">--}}
{{--                        <div class="comment">--}}
{{--                            <h5>اولین فرد مشارکت کننده باشید...</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                </div>--}}
{{--                <div id="end-menu-stiky"></div>         </div></section>--}}

        <!-- #Register Course -->
        <section class="register-course">
            <h5>برای ثبت نام این دوره کلیک کنید</h5>
            <a href="{{\Mehr4Payment::courseBuyUrl($course)}}" class="register-course-btn">ثبت نام آنلاین
            </a>
            <div class="menu-mobile-cert">
                <p>{{$course->title}}</p>
                <a href="{{\Mehr4Payment::courseBuyUrl($course)}}">ثبت نام آنلاین</a>
            </div>         </section>


{{--            دوره ها مشابه--}}
        <!-- #Department -->
{{--        <section class="course-card">--}}
{{--            <div class="head-packege">--}}
{{--                <h3>سایر دوره های مشابه</h3>--}}
{{--            </div>--}}
{{--            <div class="grid-container">--}}
{{--                <div class="grid-x grid-padding-x dep-section">--}}
{{--                    <div class="post4">--}}
{{--                        <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/80/%D8%AD%D8%B3%D8%A7%D8%A8%D8%AF%D8%A7%D8%B1%DB%8C-%D9%85%D8%A7%D9%84%DB%8C%D8%A7%D8%AA%DB%8C">--}}
{{--                            <img src="http://dpe.ac/api/file/download/5b8fbda952216/hesabdari-maliati-ghavanin-jadid-maliati-box-dore_pre.jpg" alt="حسابداری مالیاتی">--}}
{{--                            <h3>حسابداری مالیاتی</h3>--}}
{{--                            <span></span>--}}
{{--                            <ins>369,000 تومان</ins>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="post4">--}}
{{--                        <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/81/%D8%AD%D8%B3%D8%A7%D8%A8%D8%AF%D8%A7%D8%B1%DB%8C-%D8%AF%D8%B1-%D8%A7%DA%A9%D8%B3%D9%84">--}}
{{--                            <img src="http://dpe.ac/api/file/download/5b2a452dadcf8/karbord-excel-dar-hesbdari-box-dore.jpg" alt="حسابداری در اکسل">--}}
{{--                            <h3>حسابداری در اکسل</h3>--}}
{{--                            <span></span>--}}
{{--                            <ins>229,000 تومان</ins>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="post4">--}}
{{--                        <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/390/%D9%85%D8%AF%DB%8C%D8%B1%DB%8C%D8%AA-%D8%B3%D8%B1%D9%85%D8%A7%DB%8C%D9%87-%DA%AF%D8%B0%D8%A7%D8%B1%DB%8C">--}}
{{--                            <img src="http://dpe.ac/api/file/download/5b3b567ea08d8/moarefi-dore-modiriat-sarmayeh-gozary-box-dore-daneshpazhouhan-institute.jpg" alt="مدیریت سرمایه گذاری">--}}
{{--                            <h3>مدیریت سرمایه گذاری</h3>--}}
{{--                            <span></span>--}}
{{--                            <ins>819,000 تومان</ins>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="post4">--}}
{{--                        <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/426/%D8%AD%D8%B3%D8%A7%D8%A8%D8%AF%D8%A7%D8%B1%DB%8C-%D9%88%D8%AC%D9%88%D9%87-%D9%86%D9%82%D8%AF">--}}
{{--                            <img src="http://dpe.ac/api/file/download/5b8fbda986db8/hesabdary-voj_oh-naghd-box-dore-daneshpazhouhan-pre.jpg" alt="حسابداری وجوه نقد">--}}
{{--                            <h3>حسابداری وجوه نقد</h3>--}}
{{--                            <span></span>--}}
{{--                            <ins>339,000 تومان</ins>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>         </section>--}}

    </main>
@endsection



