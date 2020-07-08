<header class="header">
    <div class="">
        <div class="grid-x grid-padding-x">
            <div class="medium-2 small-12 cell mobile-support-none">
                <img src="http://dpe.ac/api/file/download/5e4cc37103672/%D8%AF%D8%A7%D9%86%D8%B4-%D9%BE%DA%98%D9%88%D9%87%D8%A7%D9%863-%D9%86%D9%88%DB%8C%D9%86.png" alt="نوین دانش پژوهان">
            </div>
            <div class="small-6 none-desk">
                <div class="menu-responsive-mob" data-responsive-toggle="home-animated-menu" data-hide-for="medium" data-e="b8c3kf-e" style="display: none;">
                    <button class="menu-icon" type="button" data-toggle=""></button>
                    <div class="title-bar-title">فهرست</div>
                </div>
                <a href="#" class=" reg-log-btn-mob">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>
            </div>

            <div class="menu-responsive-mob-left small-6">
                <img class="moblie-logo" src="" alt="{{setting('site.name')}}">
            </div>
            <div class="medium-8 small-12 cell">
                <nav class="menu-header" id="home-animated-menu" data-animate="hinge-in-from-top hinge-out-from-top">
                    <ul class="dropdown menu" data-dropdown-menu="" role="menubar" data-e="eduajc-e">
                        <li class="" role="menuitem">
                            <a href="/">صفحه اصلی</a>
                        </li>
                        <li @if(Route::currentRouteName()=='course-list') role="menuitem" class="current-menu-item" @endif>
                       <a href="{{route('course-list')}}"><span>دپارتمان ها</span></a>
                        </li>

                        <li @if(Route::currentRouteName()=='blog') role="menuitem" class="current-menu-item" @endif>
                            <a href="{{route('blog')}}"><span>اخبار</span></a>
                        </li>



                        @if(Dpsoft\Mehr\Models\Page::find(1)!=null)
                        <li @if(Route::currentRouteName()=='page') class="current-menu-item" @endif role="menuitem">
                            <a href="{{Dpsoft\Mehr\Models\Page::find(1)->url}}"><span>استخدام</span></a>
                        </li>
                        @endif
                        <li class="is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true" aria-label="امور کاربران">
                            <a href="#">امور کاربران</a>
                            <ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu="" role="menu">
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://dpe.ac/lms/index.php">پروفایل کاربران</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://app.dpe.ac">دریافت برنامه&zwnj;ی اندروید</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">راهنمای استفاده از پروفایل کاربری</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">درخواست معرفی به کار</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">درخواست شرکت در کارگاه های آنلاین</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">سوالات متداول</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">دانلود نرم افزارهای مرتبط</a></li>
                            </ul>
                        </li>
                        <li class="is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true" aria-label="راهنمای ثبت نام">
                            <a href="#">راهنمای ثبت نام</a>
                            <ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu="" role="menu">
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">روند برگزاری دوره ها</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">راهنمای تصویری ثبت نام</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">قوانین و مقررات</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">ثبت شکایات</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">درخواست مشاوره رایگان</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">محتویات پکیج های آموزشی</a></li>
                            </ul>
                        </li>

                        <li role="menuitem"><a href="">تاییدیه ها</a>
                        </li>


                        <li class="is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true" aria-label="درباره ما">
                            <a href="">درباره ما</a>
                            <ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu="" role="menu">
                                <li @if(Route::currentRouteName()=='about') role="menuitem" class="is-submenu-item is-dropdown-submenu-item current-menu-item" @endif>
                                    <a href="{{route('about')}}"><span>داستان ما</span></a>
                                </li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">مجوزات و افتخارات</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">همکاران </a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">سمینار ها</a></li>
                                <li role="menuitem" class="is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item opens-left" aria-haspopup="true" aria-label="محصولات ما"><a href="http://dpe.ac/page/%D8%B3%D9%85%DB%8C%D9%86%D8%A7%D8%B1%D9%87%D8%A7/16">محصولات ما</a>
                                    <ul class="submenu is-dropdown-submenu vertical" data-submenu="" role="menu">
                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">مدیریت محتوای نویسه</a></li>
                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href=""> سامانه آموزش مجازی مهر</a></li>
                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">سامانه بازاریابی و فروش تلفنی آوا</a></li>
                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="">دارکوب جاب</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>

                        <li class="is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true" aria-label="ارتباط باما">
                            <a href="">ارتباط باما</a>
                            <ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu="" role="menu">
                                <li @if(Route::currentRouteName()=='contact') role="menuitem" class="is-submenu-item is-dropdown-submenu-item current-menu-item" @endif>
                                    <a href="{{route('contact')}}"><span>تماس با ما</span></a>
                                </li>

                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href=""> درخواست همکاری با دانش پژوهان</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href=""> دانش پژوهان در رسانه های اجتماعی</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="medium-2 small-12 cell mobile-support-none ">
                <a href="http://dpe.ac/panel/login" class="button hollow button reg-log-btn">
                    <i class="fa fa-sign-in" aria-hidden="true"></i> ورود / ثبت نام
                </a>

            </div>
        </div>
    </div>
</header>
