@extends("mehr4-theme-dpeac::layout")

@section('class-body')
    style-simple layout-full-width mobile-tb-left button-flat no-content-padding header-stack header-center minimalist-header sticky-header sticky-white ab-hide subheader-both-center menu-arrow-top menuo-no-borders footer-copy-center
@endsection
@section('main')
    <div  class="course-header"  style="background-image: url({{Storage::url('theme/header-course.jpg')}})">
        <div class="container">
            <div class="column one">
                <h1 class="title">دوره های آموزشی
                    @if($selectedCategory)
                        <div>
                            <h2 style="color:white;" class="h2-title">«{{$selectedCategory->title}}»</h2>
                        </div>
                    @endif
                    @if($query)
                        <div>
                            <small>«{{$query}}»</small>
                        </div>
                    @endif
                </h1>
            </div>
        </div>
    </div>
    <div id="Content">


    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content" itemprop="mainContentOfPage">
                <div class="section mcb-section mcb-section-pvftokd2l sec-course" id="services"
                     style="padding-top:2px;padding-bottom:0;background-color:#f7f7f7a3;"
                     data-id="#services">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap mcb-wrap-ooiz750f8 one  valign-top clearfix"
                             style="padding:0 5% 0 0">
                            <div class="mcb-wrap-inner"></div>
                        </div>
                        <div  class="wrap mcb-wrap mcb-wrap-m5cbyanks one  column-margin-10px valign-top clearfix"
                              style="">
                            <div class="mcb-wrap-inner">
                                @if($courses->count()!=0)
                                    @foreach($courses as $course)
                                        <div class="section sections_style_2">
                                            <div class="section_wrapper clearfix">
                                                <div class="items_group clearfix">
                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second column_image">
                                                        <div class="image_frame no_link scale-with-grid no_border">
                                                            <div class="image_wrapper"><img class="scale-with-grid" src="{{Storage::url($course->image)}}" alt="{{setting('site.name')}}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- One Second (1/2) Column -->
                                                    <div class="column one-second column_column">
                                                        <div class="column_attr ">
                                                            <div style="background: #eff7fb; padding: 13px 12px 22px; border-left: 3px solid #374d84;">

                                                                <a href="{{$course->url}}"><h3 class="course-title" >

                                                                        {{str_limit($course->title,20,'...')}}</h3></a>
                                                                <p class="big course-text">
                                                                    {!! str_limit(strip_tags($course->description),400,'...') !!}
                                                                </p>
                                                                <div class="row">
                                                                    <div class="column one-second column_column center">
                                                                        <a class="mfn-link mfn-link-4" ontouchstart="this.classList.toggle('hover');" data-hover="Phasellus">
                                                                            <span data-hover="Phasellus">  شهریه دوره :{{number_format($course->price )}} ریال </span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="column one-second column_column center">
                                                                    <a class="button button_large button_theme button_js" href="{{$course->url}}" style=" color:#172a6e;"><span class="button_label">ثبت نام</span></a>

                                                                </div>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{$courses->render('mehr4-theme-dpeac::pagination.custom')}}
                                @else
                                    <h2 style="text-align: right;">دوره ای یافت نشد</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section mcb-section-ohvm9rr7e"
                     style="padding-top:0px;padding-bottom:0px;">
                    <div class="section_wrapper mcb-section-inner"></div>
                </div>
                <div class="section the_content no_content">
                    <div class="section_wrapper">
                        <div class="the_content_wrapper"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
