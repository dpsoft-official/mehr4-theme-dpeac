
<div class="column mcb-column mcb-item-4zbho0hbv one column_image">
    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
        <div class="image_wrapper">
            <img class="scale-with-grid" src="{{Storage::url('theme/footer-sep.png')}}">
        </div>
    </div>
</div>
<footer id="Footer" class="clearfix">
    <div class="widgets_wrapper">
        <div class="container">
            <!-- Two Third (2/3) Column -->
            <div class="column two-third">
                <aside id="nav_menu-2" class="widget widget_nav_menu">
                    <div class="menu-main-menu-container">
                        <ul id="menu-main-menu-1" class="menu" style="direction: rtl;">
                            <li class="menu-item menu-item-_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-5">
                                <a href="/">خانه</a>
                            </li>
                            <li class="menu-item menu-item-_type menu-item-object-page menu-item-2219">
                                <a href="{{route('about')}}">درباره ما</a>
                            </li>
                            <li class="menu-item menu-item-_type menu-item-object-page menu-item-2218">
                                <a href="{{route('course-list')}}">دوره ها</a>
                            </li>

                            <li class="menu-item menu-item-_type menu-item-object-page menu-item-2216">
                                <a href="{{route('contact')}}">تماس با ما</a>
                            </li>
                            <li class="menu-item menu-item-_type menu-item-object-page menu-item-2216">
                                <a href="{{route('login')}}">ورود</a>
                            </li>
                        </ul>
                    </div>
                </aside>
                <aside class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <hr class="no_line" style="margin: 0 auto 40px;">
                        <div class="column_attr clearfix">
                            @if(setting('social.facebook')!=null)
                                <a href="{{setting('social.mail')}}" class="icon_bar icon_bar_small"> <span class="t"><i class="icon-facebook"></i></span> <span
                                        class="b"><i class="icon-facebook"></i></span> </a>
                            @endif
                            @if(setting('social.mail')!=null)
                                <a href="{{setting('social.mail')}}" class="icon_bar icon_bar_small"> <span class="t"><i class="icon-email"></i></span> <span
                                        class="b"><i class="icon-email"></i></span> </a>
                            @endif
                            @if(setting('social.twitter')!=null)
                                <a href="{{setting('social.twitter')}}" class="icon_bar icon_bar_small"> <span class="t"><i class="icon-twitter"></i></span> <span
                                        class="b"><i class="icon-twitter"></i></span> </a>
                            @endif
                            @if(setting('social.instagram')!=null)
                                <a href="{{setting('social.instagram')}}" class="icon_bar icon_bar_small"> <span class="t"><i class="icon-instagram"></i></span> <span
                                        class="b"><i class="icon-instagram"></i></span> </a>
                            @endif
                            @if(setting('social.telegram')!=null)
                                <a href="{{setting('social.telegram')}}" class="icon_bar icon_bar_small"> <span class="t"><i class="icon-paper-plane-line"></i></span>
                                    <span class="b"><i class="icon-paper-plane-line"></i></span> </a>
                            @endif
                        </div>
                    </div>
                </aside>

                <!-- Text Area -->
                <aside class="widget widget_text">
                    <div class="textwidget">
                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                            <div class="image_wrapper">
{{--                                <img class="scale-with-grid" src="content/tuning/images/home_tuning_sep4.png" alt="" width="88" height="1">--}}
                            </div>
                        </div>
                        <hr class="no_line hrmargin_b_20">
                        <p>
                            <a target="_blank" rel="nofollow" href="http://dpsoft.ir"> دانش پژوهان | DpSoft.ir</a>
                        </p>
                    </div>
                </aside>
            </div>
            <!-- One Third (1/3) Column -->
            <div class="column one-third">
                <!-- Text Area -->
                <aside class="widget widget_text">
                    <div class="textwidget">
                        <div style="background: #ffd52a; text-align: right; padding: 100px 20px 20px 20px;">
                            <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                <div class="image_wrapper"><img class="scale-with-grid" src="{{setting('site.logo')}}" alt="{{setting('site.name')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</footer>
