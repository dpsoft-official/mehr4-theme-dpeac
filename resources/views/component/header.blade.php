<header class="header">
    <div class="">
        <div class="grid-x grid-padding-x">
            <div class="medium-2 small-12 cell mobile-support-none">
                <a href="/">
                    <img src="{{ setting('site.logo') }}" alt="{{ setting('site.name') }}">
                </a>
            </div>
            <div class="small-6 none-desk">
                <div class="menu-responsive-mob" data-responsive-toggle="home-animated-menu" data-hide-for="medium"
                    data-e="b8c3kf-e" style="display: none;">
                    <button class="menu-icon" type="button" data-toggle=""></button>
                    <div class="title-bar-title">فهرست</div>
                </div>
                <a href="#" class=" reg-log-btn-mob">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                </a>
            </div>
            <div class="menu-responsive-mob-left small-6">
                <img class="moblie-logo" src="{{ setting('site.logomob') }}" alt="{{ setting('site.name') }}">
            </div>
            <div class="medium-8 small-12 cell">
                <nav class="menu-header" id="home-animated-menu" data-animate="hinge-in-from-top hinge-out-from-top">
                    <ul class="dropdown menu" data-dropdown-menu="" role="menubar" data-e="eduajc-e">
                        <li @if (Route::currentRouteName() == 'home') class="navbar-active" role="menuitem" @endif>
                            <a href="/">صفحه اصلی</a>
                        </li>

                        <li @if (Route::currentRouteName() == 'course-list') role="menuitem" class="current-menu-item" @endif>
                            <a href="{{ route('course-list') }}"><span>دپارتمان ها</span></a>
                        </li>
                        <li @if (Route::currentRouteName() == 'blog') role="menuitem" class="current-menu-item" @endif>
                            <a href="{{ route('blog') }}"><span>اخبار</span></a>
                        </li>
                        @if (Dpsoft\Mehr\Models\Page::find(5) != null)
                            <li role="menuitem">
                                <a href="{{ Dpsoft\Mehr\Models\Page::find(5)->url }}"><span>استخدام</span></a>
                            </li>
                        @endif
                        <li class="is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true"
                            aria-label="امور کاربران">
                            <a href="#">امور کاربران</a>
                            <ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu="" role="menu">
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a
                                        href="/dashboard/courses">پروفایل کاربران</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a
                                        href="http://app.dpe.ac">دریافت برنامه&zwnj;ی اندروید</a></li>

                                @if (Dpsoft\Mehr\Models\Page::find(1) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(1)->url }}"><span>راهنمای استفاده از
                                                پروفایل کاربری</span></a>
                                    </li>
                                @endif
                                @if (Dpsoft\Mehr\Models\Page::find(6) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(6)->url }}"><span>درخواست معرفی به
                                                کار</span></a>
                                    </li>
                                @endif
                                @if (Dpsoft\Mehr\Models\Page::find(7) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(7)->url }}"><span>درخواست شرکت در
                                                کارگاه های آنلاین</span></a>
                                    </li>
                                @endif
                                @if (Dpsoft\Mehr\Models\Page::find(8) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(8)->url }}"><span>سوالات
                                                متداول</span></a>
                                    </li>
                                @endif
                                @if (Dpsoft\Mehr\Models\Page::find(9) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(9)->url }}"><span>دانلود نرم
                                                افزارهای
                                                مرتبط</span></a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        <li class="is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true"
                            aria-label="راهنمای ثبت نام">
                            <a href="#">راهنمای ثبت نام</a>
                            <ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu="" role="menu">

                                @if (Dpsoft\Mehr\Models\Page::find(11) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(11)->url }}"><span>روند برگزاری
                                                دوره
                                                ها</span></a>
                                    </li>
                                @endif

                                @if (Dpsoft\Mehr\Models\Page::find(12) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(12)->url }}"><span>راهنمای تصویری
                                                ثبت
                                                نام</span></a>
                                    </li>
                                @endif

                                @if (Dpsoft\Mehr\Models\Page::find(14) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(14)->url }}"><span>قوانین و
                                                مقررات</span></a>
                                    </li>
                                @endif
                                @if (Dpsoft\Mehr\Models\Page::find(15) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(15)->url }}"><span>ثبت
                                                شکایات</span></a>
                                    </li>
                                @endif
                                @if (Dpsoft\Mehr\Models\Page::find(17) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(17)->url }}"><span>درخواست مشاوره
                                                رایگان</span></a>
                                    </li>
                                @endif
                                @if (Dpsoft\Mehr\Models\Page::find(16) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(16)->url }}"><span>محتویات پکیج های
                                                آموزشی</span></a>
                                    </li>
                                @endif
                            </ul>
                        </li>

                        @if (Dpsoft\Mehr\Models\Page::find(18) != null)
                            <li @if (Route::currentRouteName() == 'page') class="" @endif role="menuitem">
                                <a href="{{ Dpsoft\Mehr\Models\Page::find(18)->url }}"><span>تاییدیه ها</span></a>
                            </li>
                        @endif

                        <li class="is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true"
                            aria-label="درباره ما">
                            <a href="">درباره ما</a>
                            <ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu="" role="menu">
                                @if (Dpsoft\Mehr\Models\Page::find(28) != null)
                                    <li>
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(28)->url }}"><span>داستان
                                                ما</span></a>
                                    </li>
                                @endif

                                @if (Dpsoft\Mehr\Models\Page::find(19) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(19)->url }}"><span>مجوزات و
                                                افتخارات</span></a>
                                    </li>
                                @endif
                                @if (Dpsoft\Mehr\Models\Page::find(20) != null)
                                    <li role="menuitem">
                                        <a
                                            href="{{ Dpsoft\Mehr\Models\Page::find(20)->url }}"><span>همکاران</span></a>
                                    </li>
                                @endif
                                @if (Dpsoft\Mehr\Models\Page::find(21) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(21)->url }}"><span>سمینار
                                                ها</span></a>
                                    </li>
                                @endif
                                <li role="menuitem"
                                    class="is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item opens-left"
                                    aria-haspopup="true" aria-label="محصولات ما"><a>محصولات ما</a>
                                    <ul class="submenu is-dropdown-submenu vertical" data-submenu="" role="menu">
                                        @if (Dpsoft\Mehr\Models\Page::find(22) != null)
                                            <li role="menuitem">
                                                <a href="{{ Dpsoft\Mehr\Models\Page::find(22)->url }}"><span> مدیریت
                                                        محتوای نویسه</span></a>
                                            </li>
                                        @endif
                                        @if (Dpsoft\Mehr\Models\Page::find(23) != null)
                                            <li role="menuitem">
                                                <a href="{{ Dpsoft\Mehr\Models\Page::find(23)->url }}"><span>سامانه
                                                        آموزش مجازی مهر</span></a>
                                            </li>
                                        @endif
                                        @if (Dpsoft\Mehr\Models\Page::find(24) != null)
                                            <li role="menuitem">
                                                <a href="{{ Dpsoft\Mehr\Models\Page::find(24)->url }}"><span>سامانه
                                                        بازاریابی و فروش تلفنی آوا</span></a>
                                            </li>
                                        @endif
                                        @if (Dpsoft\Mehr\Models\Page::find(25) != null)
                                            <li role="menuitem">
                                                <a href="{{ Dpsoft\Mehr\Models\Page::find(25)->url }}"><span>دارکوب
                                                        جاب</span></a>
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                            </ul>

                        </li>

                        <li class="is-dropdown-submenu-parent opens-left" role="menuitem" aria-haspopup="true"
                            aria-label="ارتباط باما">
                            <a href="">ارتباط باما</a>
                            <ul class="menu submenu is-dropdown-submenu first-sub vertical" data-submenu="" role="menu">
                                <li
                                    @if (Route::currentRouteName() == 'contact') role="menuitem" class="is-submenu-item is-dropdown-submenu-item current-menu-item" @endif>
                                    <a href="{{ route('contact') }}"><span>تماس با ما</span></a>
                                </li>
                                @if (Dpsoft\Mehr\Models\Page::find(26) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(26)->url }}"><span>درخواست همکاری
                                                با
                                                دانش پژوهان</span></a>
                                    </li>
                                @endif
                                @if (Dpsoft\Mehr\Models\Page::find(27) != null)
                                    <li role="menuitem">
                                        <a href="{{ Dpsoft\Mehr\Models\Page::find(27)->url }}"><span>دانش پژوهان در
                                                رسانه های اجتماعی</span></a>
                                    </li>
                                @endif

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="medium-2 small-12 cell mobile-support-none ">
                @guest
                    <ul class="btn_1">
                        <li><a class="button hollow button reg-log-btn" href="{{ route('login') }}">ورود</a></li>
                    </ul>
                @else
                    <ul class="btn_1">

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <li><a href="{{ auth()->user()->roles()->exists()? '/panel': '/dashboard/courses' }}"
                                class="button hollow button reg-log-btn"><span class="icon-user"></span>
                                {{ Auth::user()->name }}</a></li>
                        <li>
                            <a href="/logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="button hollow button reg-log-btn" style="background-color: #14679e;
                    color: #fefefe;">خروج </a>
                        </li>
                    </ul>
                @endguest
            </div>

        </div>
    </div>
</header>
