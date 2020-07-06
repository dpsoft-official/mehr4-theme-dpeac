@extends("mehr4-theme-dpeac::layout")
@section('class-body')
    style-simple layout-full-width mobile-tb-left button-flat no-content-padding header-stack header-center minimalist-header sticky-header sticky-white ab-hide subheader-both-center menu-arrow-top menuo-no-borders footer-copy-center
@endsection

@section('main')
    <div id="Subheader " class="about-header" style="background-image: url({{Storage::url('theme/header-about.jpg')}})">

        <div class="container">
            <div class="column one">
                <h1 class="title">درباره ما</h1>
            </div>
        </div>
    </div>
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section sections_style_4">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One Fourth (1/4) Column -->
                                <div class="column one-fourth column_column ">
                                    <div class="column_attr">
                                        <hr class="no_line" style="margin: 0 auto 50px;">
                                        <h2>درباره ما
                                            <br>
                                            بیشتر بدانید</h2>
                                        <hr class="no_line hrmargin_b_30">
                                        <div class="about_box">
                                            <h6>{{setting('about-title1')
}}</h6>
                                            <div style="text-align: right; position: relative; margin-bottom: -60px;">
                                                <a class="button button_theme button_js"
                                                   href="{{route('contact')}}"><span class="button_label">با ما در ارتباط باشید</span></a>
                                            </div>
                                        </div>
                                        <hr class="no_line hrmargin_b_30">
                                    </div>
                                </div>
                                <!-- One Second (1/2) Column -->
                                <div class="column one-second column_image ">
                                    <div class="image_frame no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid zoom"
                                                                        src="{{Storage::url('theme/about.jpg')}}"
                                                                        alt="{{setting('site.name')}}" width="560"
                                                                        height="497">
                                        </div>
                                    </div>
                                </div>
                                <!-- One Fourth (1/4) Column -->
                                <div class="column one-fourth column_column ">
                                    <div class="column_attr">
                                        <div class="counter counter_vertical animate-math">
                                            <div class="icon_wrapper"><img
                                                    src="{{Storage::url('theme/icon1-page-about.png')}}"
                                                    alt="{{setting('site.name')}}" width="43" height="33">
                                            </div>
                                            <div class="desc_wrapper">
                                                <div class="number-wrapper">
                                                    <span class="number" data-to="{{setting('number-counter-1')}}">{{setting('number-counter-1')}}
</span>
                                                </div>
                                                <p class="title">
                                                    {{setting('about-counter-1')}}
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="no_line" style="margin: 0 auto 50px;">
                                        <div class="counter counter_vertical animate-math">
                                            <div class="icon_wrapper"><img
                                                    src="{{Storage::url('theme/icon2-page-about.png')}}"
                                                    alt="Ueiusmodnt ut labore et dolore magna aliqua. Ut enim"
                                                    width="43" height="33">
                                            </div>
                                            <div class="desc_wrapper">
                                                <div class="number-wrapper">
                                                    <span class="number" data-to="{{setting('number-counter-2')}}">{{setting('number-counter-2')}}
</span>
                                                </div>
                                                <p class="title">
                                                    {{setting('about-counter-2')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column mcb-column mcb-item-4zbho0hbv one column_image">
                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                            <div class="image_wrapper">
                                {{--                                <img class="scale-with-grid" src="{{Storage::url('theme/itservice2_pic1.png')}}">--}}
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section " style="padding-top:70px; padding-bottom:40px; ">
                        <div class="section_wrapper mcb-section-inner">
                            <!-- One Second (1/2) Column -->
                            <div class="wrap mcb-wrap one-second clearfix">
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper"><img class="scale-with-grid"
                                                                        src="{{Storage::url('theme/about.png')}}"
                                                                        alt="{{setting('site.name')}}" width="588"
                                                                        height="613">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- One Second (1/2) Column -->
                            <div class="wrap mcb-wrap one-second clearfix" style="padding:0 0 0 3%; ">
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr">
                                        <h3>
                                            درباره
                                            پرتوآرت
                                        </h3>
                                        <p class=" desc-about">
                                            {{setting('site.about')}}

                                        </p>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                                <!-- One Second (1/2) Column -->

                                <!-- One Full Row-->
                                <div class="column mcb-column one column_divider ">
                                    <hr class="no_line">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section center"
                         style="padding-top:70px; padding-bottom:0px; background-color:#ffd52a">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_column">
                                        <div class="column_attr clearfix">
                                            <h2 style="padding-top: 12px;"> چرا {{setting('site.name')}}</h2>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column mcb-column one column_fancy_divider">
                        <div class="fancy-divider">
                            <svg preserveAspectRatio="none" viewBox="0 0 100 100" height="100" width="100%"
                                 version="1.1" xmlns="http://www.w3.org/2000/svg" style="background:#FFF">
                                <path d="M0 0 L50 100 L100 0 Z" style="fill: #ffd52a; stroke: #ffd52a;">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="section mcb-section icon-home1" style="padding-top:70px; padding-bottom:30px; ">
                        <div class="section_wrapper mcb-section-inner">
                            <!-- One Third (1/3) Column -->
                            <div class="wrap mcb-wrap one-third column-margin-20px clearfix " style="padding:0 2%; ">
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{Storage::url('theme/icon1.png')}}"
                                                 alt="{{setting('site.name')}}" title="{{setting('site.name')}}"
                                                 width="112" height="112">
                                        </div>

                                    </div>
                                </div>
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr align_center">
                                        <h4 class="title-icon">
                                            {{setting('icon1-about')
 }}
                                        </h4>
                                        <p class="big">
                                        </p>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="wrap mcb-wrap one-third column-margin-20px clearfix " style="padding:0 2%; ">
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img src="{{Storage::url('theme/icon2.png')}}" class="scale-with-grid"
                                                 alt="{{setting('site.name')}}" title="{{setting('site.name')}}"
                                                 width="112" height="112">

                                        </div>
                                    </div>
                                </div>
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr align_center">
                                        <h4 class="title-icon">{{setting('icon2-about')
}}</h4>
                                        <p class="big">
                                        </p>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- One Third (1/3) Column -->
                            <div class="wrap mcb-wrap one-third column-margin-20px clearfix " style="padding:0 2%; ">
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{Storage::url('theme/icon3.png')}}"
                                                 alt="{{setting('site.name')}}" title="{{setting('site.name')}}"
                                                 width="112" height="112">
                                        </div>
                                    </div>
                                </div>
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr align_center">
                                        <h4 class="title-icon">{{setting('icon3-about')
}}</h4>
                                        <p class="big">
                                        </p>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-third column-margin-20px clearfix " style="padding:0 2%; ">
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{Storage::url('theme/icon4.png')}}"
                                                 alt="{{setting('site.name')}}" title="{{setting('site.name')}}"
                                                 width="112" height="112">
                                        </div>
                                    </div>
                                </div>
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr align_center">
                                        <h4 class="title-icon">{{setting('icon4-about')
}}</h4>
                                        <p class="big">
                                        </p>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-third column-margin-20px clearfix " style="padding:0 2%; ">
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{Storage::url('theme/icon5.png')}}"
                                                 alt="{{setting('site.name')}}" title="{{setting('site.name')}}"
                                                 width="112" height="112">

                                        </div>
                                    </div>
                                </div>
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr align_center">
                                        <h4 class="title-icon">{{setting('icon5-about')
}}</h4>
                                        <p class="big">
                                        </p>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-third column-margin-20px clearfix " style="padding:0 2%; ">
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_image ">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{Storage::url('theme/icon6.png')}}"
                                                 alt="{{setting('site.name')}}" title="{{setting('site.name')}}"
                                                 width="112" height="112">

                                        </div>
                                    </div>
                                </div>
                                <!-- One Full Row-->
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr align_center">
                                        <h4 class="title-icon">{{setting('icon6-about')
}}</h4>
                                        <p class="big">
                                        </p>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section full-width dark " style="padding-top:0px; padding-bottom:0px">
                        <div class="section_wrapper mcb-section-inner" style="margin-bottom: 10px;">
                            <div class="wrap mcb-wrap one-second valign-top clearfix"
                                 style="padding:50px 50px 35px 50px; background-color:#374d84">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column three-fourth column_column column-margin-0px">
                                        <div class="column_attr clearfix align_left mobile_align_left">
                                            <h2 style="color:#fab927;text-align: center; ;">با تیم ما بیشتر آشنا
                                                شوید..</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrap mcb-wrap one-second valign-top clearfix"
                                 style="padding:50px 50px 35px 50px; background-color:#fab927">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column three-fourth column_column column-margin-0px">
                                        <div class="column_attr clearfix align_left mobile_align_left">
                                            <h2 style="color:#374d84;text-align: center ;">#تیم_ما</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one valign-top clearfix">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column one column_portfolio">
                                        <div class="column_filters">
                                            <div class="portfolio_wrapper isotope_wrapper">
                                                <ul class="portfolio_group lm_wrapper isotope masonry col-3 masonry-hover"
                                                    style="position: relative; height: 1390.97px;">

                                                    <li class="portfolio-item isotope-item category-masonry-hover  has-thumbnail"
                                                        style="position: absolute; left: 391px; top: 0px;">
                                                        <div class="masonry-hover-wrapper">
                                                            <div class="hover-desc bg-dark"
                                                                 style=" background-color:rgba(71, 79, 90, 0.9);">
                                                                <div class="desc-inner">
                                                                    <h3 class="entry-title" itemprop="headline"><a
                                                                            class="link"
                                                                            >{{setting('team1')}}</a></h3>
                                                                    <div class="desc-wrappper">
                                                                        {{setting('team1-job')}}

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="image-wrapper scale-with-grid">
                                                                <a class="link" href=""><img width="1200" height="1540"
                                                                                             src="{{Storage::url('theme/team1.jpg')}}"
                                                                                             class="scale-with-grid wp-post-image"
                                                                                             alt="{{setting('site.name')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    {{--start team2--}}
                                                    <li class="portfolio-item isotope-item category-masonry-hover  has-thumbnail"
                                                        style="position: absolute; left: 783px; top: 0px;">
                                                        <div class="masonry-hover-wrapper">
                                                            <div class="hover-desc bg-light"
                                                                 style=" background-color:rgba(221, 221, 221, 0.9);">
                                                                <div class="desc-inner">
                                                                    <h3 class="entry-title" itemprop="headline"><a
                                                                            class="link" href="">{{setting('team2')}}

                                                                        </a></h3>
                                                                    <div class="desc-wrappper">
                                                                        {{setting('team2-job')}}

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="image-wrapper scale-with-grid">
                                                                <a class="link" href="#"><img width="1200" height="1370"
                                                                                              src="{{Storage::url('theme/team2.jpg')}}"
                                                                                              class="scale-with-grid wp-post-image"
                                                                                              alt="{{setting('site.name')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    {{--end team2--}}

                                                    <li class="portfolio-item isotope-item category-masonry-hover  no-thumbnail"
                                                        style="position: absolute; left: 783px; top: 440px;">
                                                        <div class="masonry-hover-wrapper">
                                                            <div class="hover-desc bg-dark">
                                                                <div class="desc-inner">
                                                                    {{--                                                                    <h3 class="entry-title" itemprop="headline"><a class="link" href=""></a></h3>--}}
                                                                    <div class="desc-wrappper"
                                                                         style="text-align: justify;">
                                                                        {{setting('team-desc')}}

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="image-wrapper scale-with-grid">
                                                                <a class="link" href=""></a>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    {{--start team3--}}
                                                    <li class="portfolio-item isotope-item category-masonry-hover  has-thumbnail"
                                                        style="position: absolute; left: 391px; top: 492px;">
                                                        <div class="masonry-hover-wrapper">
                                                            <div class="hover-desc bg-light"
                                                                 style=" background-color:rgba(232, 226, 223, 0.9);">
                                                                <div class="desc-inner">
                                                                    <h3 class="entry-title" itemprop="headline"><a
                                                                            class="link"
                                                                            href="">  {{setting('team3')}}</a></h3>
                                                                    <div class="desc-wrappper">
                                                                        {{setting('team3-job')}}
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="image-wrapper scale-with-grid">
                                                                <a class="link" href=""><img width="800" height="950"
                                                                                             src="{{Storage::url('theme/team3.jpg')}}"
                                                                                             class="scale-with-grid wp-post-image"
                                                                                             alt="{{setting('site.name')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    {{--end team3--}}
                                                    <li class="portfolio-item isotope-item category-masonry-hover  has-thumbnail"
                                                        style="position: absolute; left: 0px; top: 881px;">
                                                        <div class="masonry-hover-wrapper">
                                                            <div class="hover-desc bg-light"
                                                                 style=" background-color:rgba(255, 180, 53, 0.9);">
                                                                <div class="desc-inner">
                                                                    <h3 class="entry-title" itemprop="headline"><a
                                                                            class="link"
                                                                            href="">   {{setting('team4')}}</a></h3>
                                                                    <div class="desc-wrappper">
                                                                        {{setting('team4-job')}}                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="image-wrapper scale-with-grid">
                                                                <a class="link" href=""><img width="1200" height="1200"
                                                                                             src="{{Storage::url('theme/team4.jpg')}}"
                                                                                             class="scale-with-grid wp-post-image"
                                                                                             alt="{{setting('site.name')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="portfolio-item isotope-item category-masonry-hover  has-thumbnail"
                                                        style="position: absolute; left: 391px; top: 950px;">
                                                        <div class="masonry-hover-wrapper">
                                                            <div class="hover-desc bg-dark"
                                                                 style=" background-color:rgba(83, 84, 98, 0.9);">
                                                                <div class="desc-inner">
                                                                    <h3 class="entry-title" itemprop="headline"><a
                                                                            class="link"
                                                                            href="">   {{setting('team5')}}</a></h3>
                                                                    <div class="desc-wrappper">
                                                                        {{setting('team5-job')}}
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="image-wrapper scale-with-grid">
                                                                <a class="link" href=""><img width="1200" height="1370"
                                                                                             src="{{Storage::url('theme/team5.jpg')}}"
                                                                                             class="scale-with-grid wp-post-image"
                                                                                             alt="{{setting('site.name')}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
