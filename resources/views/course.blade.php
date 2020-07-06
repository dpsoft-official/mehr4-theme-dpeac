@extends("mehr4-theme-dpeac::layout")
@section('class-body')
    style-simple layout-full-width mobile-tb-left
    button-flat no-content-padding header-stack header-center
    minimalist-header sticky-header sticky-white ab-hide
    subheader-both-center menu-arrow-top menuo-no-borders footer-copy-center
@endsection
@section('main')
    <div id="Content">
        <div id="Subheader " class="course-header-title" style="background-image: url({{Storage::url('theme/header-course-list.jpg')}})" >
            <div class="container">
                <div class="column one">
                    <h1 class="title">{{$course->title}}</h1>
                </div>
            </div>
        </div>
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content" itemprop="mainContentOfPage">

                    <div class="section mcb-section "
                         style="padding-bottom:80px;background-image:url('{{Storage::url('theme/coursebg.png')}}');
                             background-repeat:no-repeat;background-position:center top;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix" style="">
                                <div class="mcb-wrap-inner">
                                </div>
                            </div>



                            <div class="wrap mcb-wrap one  valign-top clearfix" style="padding:2% 0% 2%;background-color:#f1f5f9a8;">
                                <div class="column mcb-column two-third column_divider" style="">
                                    <div class="mask"></div>
                                    <img width="1200" height="480" src="{{Storage::url($course->image)}}" class="scale-with-grid wp-post-image"
                                         alt=" {{$course->title}}" itemprop="image"/>
                                    <h3 class="title-co">{{$course->title}}</h3>
                                    <div class="postmeta">
                                        <ul>

                                        </ul>
                                    </div>

                                    <p class="desc-post">
                                        {!!(strip_tags($course->description)) !!}
                                    </p>
                                    <h3 class="title-co">سرفصل ها</h3>
                                    <div class="accordion">
                                        <div class="mfn-acc accordion_wrapper open1st">
                                            @foreach($course->sections as $index=> $section)
                                                <div class="question">
                                                    <div class="title">
                                                        <i class="icon-plus acc-icon-plus"></i>
                                                        <i class="icon-minus acc-icon-minus"></i>
                                                        <i class=" icon-video"></i>
                                                        {{$section->title}}
                                                    </div>
                                                    <div class="answer">
                                                        <ul>
                                                            @foreach($section->lessons as $lesson)
                                                                <li><a title="{{$lesson->title}}"  href="{{\MehrLock::lessonUrl($lesson)}}"
                                                                       target="_blank"
                                                                       class="icon-video" style="color:#161765;">{{$lesson->title}}</a>
                                                                    <span style="float: left;color:#161765;">{{$lesson->duration_read}}</span>
                                                                    <hr style="margin: 10px 0">
                                                                </li>
                                                            @endforeach
                                                            @foreach($section->quizzes as $quiz)
                                                                <li id="end">
                                                                    <a href="#0" title="quiz"
                                                                       class="icon-video" style="color:#161765;">{{$quiz->title}}</a><span style="float: left;color:#161765;">{{$lesson->duration_read}}</span>
                                                                    <hr style="margin: 10px 0">
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>


                                <div class="column mcb-column one-third column_divider " >
                                    <div id="sticky-anchor"></div>
                                    <div class="pricing-box  pricing-box-box ">
                                        <div id="sticky">
                                            <div class="plan-header ">
                                                <div class="image"><img style="width: 100%" src="{{Storage::url($course->image)}}" alt=" {{$course->title}}">
                                                </div>
                                                <div class="price" id="p">
                                                    <sup class="currency">  {{number_format($course->price )}} ریال </sup>
                                                </div>
                                                <hr class="hr_color">
                                                <h4 class="subtitle" style="padding-top: 10px">
                                                    محتوای آموزشی شامل:
                                                </h4>
                                            </div>
                                            <div class="plan-inside">
                                                <ul>
                                                    <li>
                                                        <i class="icon-mobile"></i>{{setting('course.content1')}}
                                                    </li>
                                                    <li>
                                                        <i class="icon-archive"></i>{{setting('course.content2')}}
                                                    </li>

                                                    <li>
                                                        <i class="icon-chat"></i>{{setting('course.content3')}}
                                                    </li>
                                                    <li>
                                                        <i class="icon-doc-text"></i>{{setting('course.content4')}}
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="plan-footer">


                                                <a class="button button_large button_theme button_js" href="{{\Mehr4Payment::courseBuyUrl($course)}}"
                                                   class="button  button_left button_theme button_js" ><span class="button_label">ثبت نام</span></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mcb-wrap-inner" >
                                <div class="column mcb-column one column_timeline">
                                    @if($course->commentable==true)

                                    <div class="mcb-wrap-inner">
                                        <br>
                                        <div class="desc-wrapper" >
                                            <h2><a href="#">نظرات</a></h2>
                                            <div class="desc"></div>
                                        </div>
                                        <br>
                                        <div id="comments">
                                            @if($course->comments->count()>0)
                                                @foreach($course->comments as $comment)
                                                    <ul>
                                                        <div class="row" style="background:rgba(241, 245, 249, 0.75);
    padding: -3px;
    margin: 21px;
    color: black;
">
                                                            <li>
                                                                <div class="avatar rev-thumb column one-third" style="width: 10%">
                                                                    <div class="avatar">
                                                                        <img src="{{$comment->creator? $comment->creator->avatar:Storage::url('theme/author.png')}}"   alt=" {{$comment->creator ? $comment->creator->name:"نظر دهنده"}}" class="thumb">
                                                                    </div>
                                                                </div>
                                                                <div class="comment_right clearfix column two-third pad_right1" style="padding-top: 20px;">
                                                                    <div class="comment_right clearfix">
                                                                        <div class="comment_info">
                                                                            توسط
                                                                            <a style="padding: 5px;" >{{$comment->creator ? $comment->creator->name:"نظر دهنده"}}"</a>
{{--                                                                            <span>|</span>{{\Morilog\Jalali\Jalalian::fromCarbon($comment->created_at)->format('Y-m-d')}}--}}

                                                                        </div>
                                                                        <p class="p-com"> {{$comment->body}}</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>

                                                        @endforeach
                                                    </ul>
                                                    @endif


                                        </div>
                                        <hr>
                                    </div>
                                    <h3 class="h5comments">نظر خود را بیان کنید</h3>
                                    {{--                                    @include('component.comment-creat',['parent'=>'course' ,'parent_id'=>$course->id])--}}
                                    @include('mehr4-theme-azarbs::component.comment-creat',['parent'=>'course' ,'parent_id'=>$course->id])
@endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



