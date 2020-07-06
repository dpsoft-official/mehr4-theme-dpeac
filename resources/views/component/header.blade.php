{{--<div id="Top_bar" class="is-sticky" style="top: 0px;">--}}

{{--<div class="container">--}}
{{--        <div class="column one">--}}
{{--            <div class="top_bar_left clearfix" style="width: 990px;">--}}
{{--                <!-- Logo-->--}}
{{--                <div class="logo">--}}
{{--                    <a id="logo" href="/" title="{{setting('site.name')}}">--}}
{{--                        <img class="scale-with-grid" src="{{setting('site.logo')}}" alt="{{setting('site.name')}}"> </a>--}}
{{--                </div>--}}
{{--                <!-- Main menu-->--}}
{{--                <div class="menu_wrapper">--}}
{{--                    <nav id="menu" class="menu-main-menu-container">--}}
{{--                        <ul id="menu-main-menu" class="menu">--}}
{{--                            <li @if(Route::currentRouteName()=='home') class="current-menu-item" @endif>--}}
{{--                                <a class="home" href="/"><span>خانه</span></a>--}}
{{--                            </li>--}}
{{--                            <li @if(Route::currentRouteName()=='course-list') class="current-menu-item" @endif>--}}
{{--                                <a href="{{route('course-list')}}"><span>دوره ها</span></a>--}}
{{--                                <ul>--}}
{{--                                    @foreach(Dpsoft\Mehr\Models\Category::whereFeatured(true)->take(5)->get() as $featuredCategory)--}}
{{--                                        <li>--}}
{{--                                            <a href="{{$featuredCategory->courses_url}}"><span>{{$featuredCategory->title}}</span></a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
{{--                                    <li id="course-menu-mobile-show">--}}
{{--                                        <a href="{{route('course-list')}}"><span>همه دوره ها</span></a>--}}
{{--                                    </li>--}}

{{--                                </ul>--}}

{{--                            </li>--}}
{{--                            <li @if(Route::currentRouteName()=='blog') class="current-menu-item" @endif>--}}
{{--                                <a href="{{route('blog')}}"><span>وبلاگ</span></a>--}}
{{--                            </li>--}}

{{--                            @if(Dpsoft\Mehr\Models\Page::find(11)!=null)--}}
{{--                                                            <li @if(Route::currentRouteName()=='page') class="current-menu-item" @endif>--}}
{{--                                                                <a href="{{Dpsoft\Mehr\Models\Page::find(11)->url}}"><span>سوالات متداول</span></a>--}}
{{--                                                            </li>--}}
{{--                                                        @endif--}}


{{--                            <li @if(Route::currentRouteName()=='about') class="current-menu-item" @endif>--}}
{{--                                <a href="{{route('about')}}"><span>درباره ما</span></a>--}}
{{--                            </li>--}}
{{--                            <li @if(Route::currentRouteName()=='contact') class="current-menu-item" @endif>--}}
{{--                                <a href="{{route('contact')}}"><span>تماس با ما</span></a>--}}
{{--                            </li>--}}
{{--                            @guest--}}
{{--                                                            @if (Route::has('register'))--}}
{{--                                                                <li @if(Route::currentRouteName()=='login') class="current-menu-item" @endif>--}}

{{--                                                                    <a href="{{route('login')}}"><span> ورود </span></a>--}}
{{--                                                                </li>--}}
{{--                                                                <li @if(Route::currentRouteName()=='register') class="current-menu-item" @endif>--}}

{{--                                                                    <a href="{{route('register')}}"><span>ثبت نام</span></a>--}}
{{--                                                                </li>--}}
{{--                                                    </ul>--}}
{{--                                                    @endif--}}
{{--                                                    @else--}}
{{--                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                                            @csrf--}}
{{--                                                        </form>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="/panel"><span class="icon-user">--}}

{{--                                                           {{ Auth::user()->name }} </span> </a></li>--}}

{{--                                                        <li>--}}
{{--                                                            <a class="" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();--}}
{{--                            document.getElementById('logout-form').submit();">--}}

{{--                                                                <span>خروج</span>--}}

{{--                                                            </a>--}}
{{--                                                        </li>--}}

{{--                                                    @endguest--}}

{{--                        </ul>--}}
{{--                    </nav><a class="responsive-menu-toggle is-sticky" href="#"><i class="icon-menu"></i></a>--}}
{{--                </div>--}}
{{--                <!-- Secondary menu area - only for certain pages -->--}}
{{--                <div class="secondary_menu_wrapper"></div>--}}
{{--                <!-- Banner area - only for certain pages-->--}}
{{--                <div class="banner_wrapper"></div>--}}
{{--                <!-- Header Searchform area-->--}}
{{--                <div class="search_wrapper">--}}
{{--                    <form method="get" id="searchform" action="#">--}}

{{--                        <input type="text" class="field" name="s" id="s" placeholder="Enter your search">--}}
{{--                        <input type="submit" class="submit flv_disp_none" value="">--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- */Header -->
<header class="header">
    <div class="">
        <div class="grid-x grid-padding-x">
            <div class="medium-2 small-12 cell mobile-support-none">
                <img src="{{home_setting.landescape_image.url}}" alt="{{ lms_info.name }}">
                {#                    <h1 class="none">{{ lms_info.name }}</h1>#}
            </div>
            <div class="small-6 none-desk">
                <div class="menu-responsive-mob" data-responsive-toggle="home-animated-menu" data-hide-for="medium">
                    <button class="menu-icon" type="button" data-toggle></button>
                    <div class="title-bar-title">فهرست</div>
                </div>
                <a href="#" class=" reg-log-btn-mob">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>
            </div>

            <div class="menu-responsive-mob-left small-6">
                <img class="moblie-logo" src="{{home_setting.landescape_image.url}}" alt="{{ lms_info.name }}">
            </div>
            <div class="medium-8 small-12 cell">
                <nav class="menu-header" id="home-animated-menu" data-animate="hinge-in-from-top hinge-out-from-top">
                    <ul class="dropdown menu" data-dropdown-menu>
                        <li class="{{current_page=='home' ? 'navbar-active':''}}">
                            <a href="{{ path_for ('home-page') }}">صفحه اصلی</a>
                        </li>
                        <li class="{{current_page=='department' ? 'navbar-active':''}}">
                            <a href="http://dpe.ac/page/%D8%AF%D9%BE%D8%A7%D8%B1%D8%AA%D9%85%D8%A7%D9%86-%D9%87%D8%A7/51">دپارتمان
                                ها</a>
                        </li>
                        <li  class="{{current_page==1 ? 'navbar-active':''}}">
                            <a href="{{ path_for ('weblog-home-page')}}">اخبار
                            </a>
                        </li>
                        <li  class="{{current_page=='' ? 'navbar-active':''}}">
                            <a href="http://dpe.ac/page/%D8%A7%D8%B3%D8%AA%D8%AE%D8%AF%D8%A7%D9%85-%D8%AF%D8%B1-%D9%87%D8%B1%D8%AC%D8%A7%DB%8C-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86/12">استخدام</a>
                        </li>
                        <li class="{{current_page=='http://dpe.ac/page/%D9%BE%D8%B1%D9%88%D9%81%D8%A7%DB%8C%D9%84-%DA%A9%D8%A7%D8%B1%D8%A8%D8%B1%DB%8C-%D8%AF%D8%A7%D9%86%D8%B4-%D9%BE%D8%B0%DB%8C%D8%B1%D8%A7%D9%86/21' ? 'navbar-active':''}}">
                            <a href="#">امور کاربران</a>
                            <ul class="menu">
                                <li><a href="http://dpe.ac/lms/index.php">پروفایل کاربران</a></li>
                                <li><a href="http://app.dpe.ac">دریافت برنامه‌ی اندروید</a></li>
                                <li><a href="http://dpe.ac/page/%D8%B1%D8%A7%D9%87%D9%86%D9%85%D8%A7%DB%8C-%D8%A7%D8%B3%D8%AA%D9%81%D8%A7%D8%AF%D9%87-%D8%A7%D8%B2-%D9%BE%D8%B1%D9%88%D9%81%D8%A7%DB%8C%D9%84-%DA%A9%D8%A7%D8%B1%D8%A8%D8%B1%DB%8C/22">راهنمای استفاده از پروفایل کاربری</a></li>
                                <li><a href="http://dpe.ac/page/%D8%AF%D8%B1%D8%AE%D9%88%D8%A7%D8%B3%D8%AA-%D9%85%D8%B9%D8%B1%D9%81%DB%8C-%D8%A8%D9%87-%DA%A9%D8%A7%D8%B1/23">درخواست معرفی به کار</a></li>
                                <li><a href="http://dpe.ac/page/%D8%AF%D8%B1%D8%AE%D9%88%D8%A7%D8%B3%D8%AA-%D8%B4%D8%B1%DA%A9%D8%AA-%D8%AF%D8%B1-%DA%A9%D8%A7%D8%B1%DA%AF%D8%A7%D9%87-%D9%87%D8%A7%DB%8C-%D8%A2%D9%86%D9%84%D8%A7%DB%8C%D9%86/24">درخواست شرکت در کارگاه های آنلاین</a></li>
                                <li><a href="http://dpe.ac/page/%D8%B3%D9%88%D8%A7%D9%84%D8%A7%D8%AA-%D9%85%D8%AA%D8%AF%D8%A7%D9%88%D9%84/26">سوالات متداول</a></li>
                                <li><a href="http://dpe.ac/page/%D8%AF%D8%A7%D9%86%D9%84%D9%88%D8%AF-%D9%86%D8%B1%D9%85-%D8%A7%D9%81%D8%B2%D8%A7%D8%B1%D9%87%D8%A7%DB%8C-%D9%85%D8%B1%D8%AA%D8%A8%D8%B7/56">دانلود نرم افزارهای مرتبط</a></li>
                            </ul>
                        </li>
                        <li class="{{current_page=='http://dpe.ac/page/%D8%B1%D9%88%D9%86%D8%AF-%D8%A8%D8%B1%DA%AF%D8%B2%D8%A7%D8%B1%DB%8C-%D8%AF%D9%88%D8%B1%D9%87-%D9%87%D8%A7/28' ? 'navbar-active':''}}">
                            <a href="#">راهنمای ثبت نام</a>
                            <ul class="menu">
                                <li><a href="http://dpe.ac/page/%D8%B1%D9%88%D9%86%D8%AF-%D8%A8%D8%B1%DA%AF%D8%B2%D8%A7%D8%B1%DB%8C-%D8%AF%D9%88%D8%B1%D9%87-%D9%87%D8%A7/28">روند برگزاری دوره ها</a></li>
                                <li><a href="http://dpe.ac/page/%D8%B1%D8%A7%D9%87%D9%86%D9%85%D8%A7%DB%8C-%D8%AA%D8%B5%D9%88%DB%8C%D8%B1%DB%8C-%D8%AB%D8%A8%D8%AA-%D9%86%D8%A7%D9%85/29">راهنمای تصویری ثبت نام</a></li>
                                <li><a href="http://dpe.ac/page/%D9%82%D9%88%D8%A7%D9%86%DB%8C%D9%86-%D9%88-%D9%85%D9%82%D8%B1%D8%B1%D8%A7%D8%AA/30">قوانین و مقررات</a></li>
                                <li><a href="http://dpe.ac/page/%D8%AB%D8%A8%D8%AA-%D8%B4%DA%A9%D8%A7%DB%8C%D8%A7%D8%AA/31">ثبت شکایات</a></li>
                                <li><a href="http://dpe.ac/page/%D8%AF%D8%B1%D8%AE%D9%88%D8%A7%D8%B3%D8%AA-%D9%85%D8%B4%D8%A7%D9%88%D8%B1%D9%87-%D8%B1%D8%A7%DB%8C%DA%AF%D8%A7%D9%86/32">درخواست مشاوره رایگان</a></li>
                                <li><a href="http://dpe.ac/page/%D9%85%D8%AD%D8%AA%D9%88%DB%8C%D8%A7%D8%AA-%D9%BE%DA%A9%DB%8C%D8%AC-%D9%87%D8%A7%DB%8C-%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/33">محتویات پکیج های آموزشی</a></li>
                            </ul>
                        </li>

                        <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-%D8%AA%D8%A7%DB%8C%DB%8C%D8%AF%DB%8C%D9%87-%D8%AD%D8%B1%D9%81%D9%87-%D8%A7%DB%8C-%D8%A2%D9%85%D9%88%D8%B2%D8%B4/36">تاییدیه ها</a>
                            {# <ul class="menu">
                                <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-%D9%87%D8%A7%DB%8C-%D9%85%D9%84%DB%8C/43">تاییدیه های ملی</a>
                                    <ul class="menu">
                                        <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-%D8%AA%D8%A7%DB%8C%DB%8C%D8%AF%DB%8C%D9%87-%D8%AD%D8%B1%D9%81%D9%87-%D8%A7%DB%8C-%D8%A2%D9%85%D9%88%D8%B2%D8%B4/36">  تاییدیه حرفه ای آموزش</a></li>
                                        <!-- <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-DNW-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86/44">گواهینامه DNW ایران</a></li>-->
                                    </ul>
                                </li>
                                <!--  <li><a href="#">گواهیناه های بین المللی</a>
                                      <ul class="menu">
                                          <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-%D8%A8%DB%8C%D9%86-%D8%A7%D9%84%D9%85%D9%84%D9%84%DB%8C-QAL-%D8%A7%D9%86%DA%AF%D9%84%D8%B3%D8%AA%D8%A7%D9%86/38"> QAL انگلستان</a></li>
                                          <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-%D8%A8%DB%8C%D9%86-%D8%A7%D9%84%D9%85%D9%84%D9%84%DB%8C-UNIVERSAL-OXFORD-CERT-%D8%A7%D9%86%DA%AF%D9%84%D8%B3%D8%AA%D8%A7%D9%86/39"> OXFORD CERT</a></li>
                                          <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-%D8%A8%DB%8C%D9%86-%D8%A7%D9%84%D9%85%D9%84%D9%84%DB%8C-ICS-%DA%A9%D8%A7%D9%86%D8%A7%D8%AF%D8%A7/40">ICS کانادا</a></li>
                                          <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-%D8%A8%DB%8C%D9%86-%D8%A7%D9%84%D9%85%D9%84%D9%84%DB%8C-ACS--%DA%A9%D8%A7%D9%86%D8%A7%D8%AF%D8%A7/41">ACS  کانادا</a></li>
                                          <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-%D8%A8%DB%8C%D9%86-%D8%A7%D9%84%D9%85%D9%84%D9%84%DB%8C-ANCCP-%D8%A7%DB%8C%D8%AA%D8%A7%D9%84%DB%8C%D8%A7/45">Anccp  ایتالیا</a></li>
                                          <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-EQS-%D8%A7%D9%86%DA%AF%D9%84%D8%B3%D8%AA%D8%A7%D9%86/46">EQS  انگلیس</a></li>
                                          <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-IQS-%D8%A7%D9%86%DA%AF%D9%84%D8%B3%D8%AA%D8%A7%D9%86/47">IQS  انگلیس</a></li>
                                          <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-QMS-%D8%A7%DB%8C%D8%AA%D8%A7%D9%84%DB%8C%D8%A7/48">QMS ایتالیا</a></li>
                                          <li><a href="http://dpe.ac/page/%DA%AF%D9%88%D8%A7%D9%87%DB%8C%D9%86%D8%A7%D9%85%D9%87-%D8%A8%DB%8C%D9%86-%D8%A7%D9%84%D9%85%D9%84%D9%84%DB%8C-equal-assurance-%D8%A7%D8%B3%D8%AA%D8%B1%D8%A7%D9%84%DB%8C%D8%A7/50">equal assurance  استرالیا</a></li>
                                      </ul>
                                  </li>-->
                            </ul> #}
                        </li>


                        <li  class="{{current_page=='' ? 'navbar-active':''}}">
                            <a href="http://dpe.ac/page/%D8%AF%D8%B1%D8%A8%D8%A7%D8%B1%D9%87-%DB%8C-%D9%85%D8%A7/10">درباره ما</a>
                            <ul class="menu">
                                <li><a href="http://dpe.ac/page/%D8%AF%D8%A7%D8%B3%D8%AA%D8%A7%D9%86-%D9%85%D8%A7/13">داستان ما</a></li>
                                <li><a href="http://dpe.ac/page/%D9%85%D8%AC%D9%88%D8%B2%D8%A7%D8%AA-%D9%88-%D8%A7%D9%81%D8%AA%D8%AE%D8%A7%D8%B1%D8%A7%D8%AA/14">مجوزات و افتخارات</a></li>
                                <li><a href="http://dpe.ac/page/%D9%87%D9%85%DA%A9%D8%A7%D8%B1%D8%A7%D9%86/15">همکاران </a></li>
                                <li><a href="http://dpe.ac/page/%D8%B3%D9%85%DB%8C%D9%86%D8%A7%D8%B1%D9%87%D8%A7/16">سمینار ها</a></li>
                                <li><a href="http://dpe.ac/page/%D8%B3%D9%85%DB%8C%D9%86%D8%A7%D8%B1%D9%87%D8%A7/16">محصولات ما</a>
                                    <ul>
                                        <li><a href="http://dpe.ac/page/%D8%B3%D8%A7%D9%85%D8%A7%D9%86%D9%87+%D9%85%D8%AF%DB%8C%D8%B1%DB%8C%D8%AA+%D9%85%D8%AD%D8%AA%D9%88%D8%A7+%D9%86%D9%88%DB%8C%D8%B3%D9%87/55">مدیریت محتوای نویسه</a></li>
                                        <li><a href="http://dpe.ac/page/%D8%B3%D8%A7%D9%85%D8%A7%D9%86%D9%87+%D9%85%D8%AF%DB%8C%D8%B1%DB%8C%D8%AA+%D9%85%D8%AC%D8%A7%D8%B2%DB%8C+%D9%85%D9%87%D8%B1/54"> سامانه آموزش مجازی مهر</a></li>
                                        <li><a href="http://dpe.ac/page/%D8%B3%D8%A7%D9%85%D8%A7%D9%86%D9%87+%D8%A8%D8%A7%D8%B2%D8%A7%D8%B1%DB%8C%D8%A7%D8%A8%DB%8C+%D9%88+%D9%81%D8%B1%D9%88%D8%B4+%D8%AA%D9%84%D9%81%D9%86%DB%8C+%D8%A2%D9%88%D8%A7/53">سامانه بازاریابی و فروش تلفنی آوا</a></li>
                                        <li><a href="http://dpe.ac/page/%D8%AF%D8%B1%D8%AE%D9%88%D8%A7%D8%B3%D8%AA-%D9%85%D8%B9%D8%B1%D9%81%DB%8C-%D8%A8%D9%87-%DA%A9%D8%A7%D8%B1/23">دارکوب جاب</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>

                        <li  class="{{current_page=='contact' ? 'navbar-active':''}}">
                            <a href="http://dpe.ac/page/%D8%A7%D8%B1%D8%AA%D8%A8%D8%A7%D8%B7-%D8%A8%D8%A7-%D9%85%D8%A7/49">ارتباط باما</a>
                            <ul class="menu">
                                <li><a href="{{ path_for ('contact-page') }}"> تماس باما</a></li>
                                <li><a href="http://dpe.ac/page/%D8%AF%D8%B1%D8%AE%D9%88%D8%A7%D8%B3%D8%AA-%D9%87%D9%85%DA%A9%D8%A7%D8%B1%DB%8C-%D8%A8%D8%A7-%D8%AF%D8%A7%D9%86%D8%B4-%D9%BE%DA%98%D9%88%D9%87%D8%A7%D9%86/19"> درخواست همکاری با دانش پژوهان</a></li>
                                <li><a href="http://dpe.ac/page/%D8%AF%D8%A7%D9%86%D8%B4-%D9%BE%DA%98%D9%88%D9%87%D8%A7%D9%86-%D8%AF%D8%B1-%D8%B1%D8%B3%D8%A7%D9%86%D9%87-%D9%87%D8%A7%DB%8C-%D8%A7%D8%AC%D8%AA%D9%85%D8%A7%D8%B9%DB%8C/20"> دانش پژوهان در رسانه های اجتماعی</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="medium-2 small-12 cell mobile-support-none ">
                {% if session.name %}
                <a id="btn-logout-user" class="button hollow button alert reg-log-btn">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                    {{ session.name }}
                </a>
                {% else %}
                <a href="{{ route('panel.login') }}"  class="button hollow button reg-log-btn">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> ورود / ثبت نام
                </a>
                {% endif %}
                <div class="reveal reveal-reg-log" id="reg-log-modal" data-reveal>
                    <ul class="tabs reg-log-tab-head" data-tabs id="reg-log-tabs">
                        <li class="tabs-title is-active">
                            <a href="#panel1" aria-selected="true">ورود</a>
                        </li>
                        <li class="tabs-title">
                            <a data-tabs-target="panel2" href="#panel2">ثبت نام</a>
                        </li>
                    </ul>
                    <div class="tabs-content reg-log-tab-content" data-tabs-content="reg-log-tabs">
                        <div class="tabs-panel is-active" id="panel1">
                            <form name="login-user">
                                {% include "dpeac/commons/csrf.twig" %}
                                <label for="signin-email" class="lb-email">
                                    <input type="text" name="email" id="signin-email" placeholder="ایمیل شما" required>
                                </label>
                                <label for="signin-password" class="lb-pass">
                                    <input type="password" name="password" id="signin-password"
                                           placeholder="رمز عبور شما" required>
                                </label>
                                <div class="callout success req  green none">
                                    <p>شما با موفقیت وارد شدید! لطفا منتظر بمانید...</p>
                                </div>

                                <div class="callout warning  req red none">
                                    <p>خطا در ارسال فرم لطفا فیلد ها خود را بررسی نمایید!</p>
                                </div>
                                <button type="submit" id="btn-login-user-submit">ورود</button>
                            </form>
                        </div>
                        <div class="tabs-panel" id="panel2">
                            <form name="register-user">
                                {% include "dpeac/commons/csrf.twig" %}
                                <label class="lb-email" for="signup-email">
                                    <input type="email" name="email" id="signup-email" placeholder="ایمیل شما" required>
                                </label>
                                <label class="lb-pass" for="signup-password">
                                    <input type="password" name="pass" id="signup-password" placeholder="رمز عبور شما"
                                           required>
                                </label>
                                <label class="lb-name" for="signup-name">
                                    <input type="text" name="fname" id="signup-name" placeholder="نام " required>
                                </label>
                                <label class="lb-last" for="signup-lastname">
                                    <input type="text" name="lname" id="signup-lastname" placeholder="  نام خانوادگی "
                                           required>
                                </label>
                                <label class="lb-phone" for="signup-tell">
                                    <input id="signup-tell" type="text" name="mobile" placeholder="شماره همراه"
                                           required>
                                </label>
                                <label class="lb-addrsee" for="signup-address">
                                    <input placeholder="آدرس" id="signup-address" type="text" name="address" required>
                                </label>
                                <p class="fieldset-form">
                                    <input type="checkbox" id="accept-terms">
                                    <label id="myBtn" for="accept-terms">تمامی
                                        <a href="#" data-open="law-modal">شرایط و قوانین</a> را می پذیرم
                                    </label>
                                </p>
                                <div class="callout success req  green none">
                                    <p>شما با موفقیت ثبت نام شدید! لطفا منتظر بمانید...</p>
                                </div>

                                <div class="callout warning req  red none">
                                    <p>خطا در ارسال فرم لطفا فیلد ها خود را بررسی نمایید!</p>
                                </div>
                                <input class="full-width has-padding button" type="submit" id="btn-register-user-submit"
                                       disabled value="ثبت نام در سامانه">
                            </form>
                        </div>
                    </div>
                    <button class="close-button" data-close aria-label="Close modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
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
