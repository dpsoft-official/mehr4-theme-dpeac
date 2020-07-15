@extends("mehr4-theme-dpeac::layout")
@section('main')
    <!-- #Slider -->
    <section class="slider-course">
        <div class="back-header">
            <img src="{{$course->image? Storage::url('$course->image'):Storage::url('theme/head.jpg')}}">
        </div>
        <div class="title-course">
            <h2 id="course-title"
                style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 4px 3px;">{{$course->title}}</h2>
            <p id="course-description"
               style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 2px 3px;">{{$course->expert}}</p>
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
                        <img src="{{Storage::url('course->image')}}" alt="{{$course->title}}">
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
                        <img src="{{Storage::url('course->image')}}" alt="{{('$course->title')}}">
                        <p>{{$course->name}}</p>

                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span itemprop="timeRequired"></span>
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
                                    <span itemprop="timeRequired" style="color: black;"> {{$course->id*date('m')+(date('d')*2)}}  +</span>
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
border-radius: 3px;" href="/lms/index.php/buy/course?plan_id=664">ثبت نام آنلاین دوره</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="head-packege-light">
                            <h3>اساتید این پکیج</h3>
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
                                                    "</a></b>
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


    @php($similarCourses=\Dpsoft\Mehr\Models\Course::whereHas('categories',function ($q) use ($course)
    {
    $q->whereIn('categories.id',$course->categories->pluck('id')->toArray());
    })->get())

    <!-- #Department -->
        <section class="course-card">
            <div class="head-packege">
                <h3>سایر دوره های مشابه</h3>
            </div>
            <div class="grid-container">
                <div class="grid-x grid-padding-x dep-section">
                    <div class="">
                    @foreach($similarCourses->take(4) as $course)
                        <div class="post4 ">
                            <a href="{{$course->url}}" style="height: 300px;">
{{--                                <img src="{{$course->image? Storage::url('$course->image'):Storage::url('theme/similar.jpg')}}">--}}
                                <img src="{{Storage::url('theme/similar.jpg')}}">

                            </a>
                            <ins>{{number_format($course->price)}} ریال</ins>
{{--                            <span style="text-align: right;">   </span>--}}
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </section>
        @endsection
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





