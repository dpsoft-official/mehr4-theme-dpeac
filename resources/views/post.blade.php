@extends("mehr4-theme-dpeac::layout")
@section('class-body')
    style-simple layout-full-width mobile-tb-left button-flat no-content-padding header-stack header-center minimalist-header sticky-header sticky-white ab-hide subheader-both-center menu-arrow-top menuo-no-borders footer-copy-center

@endsection
@section('main')


    <div id="Intro" class=" parallax" data-parallax="3d" >
        <img class="mfn-parallax" src="{{Storage::url('theme/post.jpg')}}"  alt="{{setting('site.name')}}"style="width: 1835px; height: 812.37px; transform: translate3d(0px, -53px, 0px);
          ">
        <div class="intro-inner">
            <h1 class="intro-title">{{$post->title}}</h1>
            <div class="intro-meta">
                <div class="date">
                <span>{{$post->posted_at}}</span>
                </div>
                <div class="author">
                 <span><a class="author-title" >{{$post->author->name}}</a></span>
                </div>
            </div>
        </div>
        <div class="intro-next">
            <i class="icon-down-open-big"></i>
        </div>
    </div>
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div>
                    <div class="post-wrapper-content" style="background-color: white;">
                        <div class="section mcb-section post-section" >
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one-fifth  column-margin-20px valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="image_wrapper" style="text-align: center;">
                                            <img  style="border-radius: 30px;" src="{{Storage::url($post->image)}}" alt="{{$post
->title}}">
                                        </div>
                                        <div class="column mcb-column one column_image">
                                            <div class="image_frame image_item no_link scale-with-grid no_border">
                                                <div class="image_wrapper" style="text-align: center;">
                                                    <img class="scale-with-grid"  style="border-radius: 30px;margin-top: 7%;" src="{{$post->author->avatar}}" alt="{{$post->author->name}}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <a >
                                                <h5 class="author-title">{{$post->author->name}}</h5>
                                                </a>
{{--                                                <p>--}}
{{--                                                    {{$post->first()->author->meta['bio']??'   '}}</p>--}}

                                                <div class="image_wrapper" style="text-align: center;">

                                                <img class="scale-with-grid" src="{{Storage::url("theme/com.png")}}">
                                                </div>

                                                <a href="#comments"><h5 class="author-title" > ({{$post->comments_count}})
                                                        نظر
                                                    </h5></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap three-fifth valign-top clearfix" style="padding:2px 2% 4px 5px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h3 class="post-title-blog" style="margin-bottom: 5px;">{{$post->title}}</h3>
                                                <br>
                                                <p class="desc-post">
                                                    {!!(strip_tags($post->description)) !!}

                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="wrap mcb-wrap one-fifth  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix">
                                                <h3 class="themecolor"></h3>
                                                @include('mehr4-theme-dpeac::component.blog-sidebar')
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="section mcb-section dark  " style="padding-top:1px; padding-bottom:1px; background-color:#ffffff">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  column-margin-20px valign-top clearfix">
                                    <div class="mcb-wrap-inner">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:1px; background-color:#ffffff">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix" style="margin-top:-54px">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_image">

                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one-sixth valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_placeholder">
                                            <div class="placeholder">
                                                &nbsp; <div class="section section-post-about">
                                                    <div class="section_wrapper clearfix">
                                                        <!-- One full width row-->
                                                        @if($post->commentable==true)

                                                        <div class="column one author-box">
                                                            <div class="author-box-wrapper">
                                                                @if($post->comments->count()>0)
                                                                    <div class="desc-wrapper">
                                                                        <h3 id="comments">نظرات</h3>
                                                                        <div class="desc"></div>
                                                                    </div>
                                                                    <div id="comments" >
                                                                        @foreach($post->comments as $comment)
                                                                            <ul >
                                                                                <div class="row" style="padding: -3px;margin: 21px;color: black;">
                                                                                    <li>
                                                                                        <div class="avatar rev-thumb column one-third" style="width: 10%">
                                                                                            <div class="avatar">
                                                                                                <img src="{{$comment->creator? $comment->creator->avatar:Storage::url('theme/author.png')}}"    alt=" {{$comment->creator ? $comment->creator->name:"نظر دهنده"}}" class="thumb">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="comment_right clearfix column two-third pad_right1" style="padding-top: 20px;">
                                                                                            <div class="comment_right clearfix">
                                                                                                <div class="comment_info">
                                                                                                    <a style="padding: 5px;" href="#">{{$comment->creator ? $comment->creator->name:"نظر دهنده"}}</a>

                                                                                                </div>
                                                                                                <p class="p-com">
                                                                                                    {!! $comment->body !!}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                                @endforeach
                                                                            </ul>
                                                                            <hr>
                                                                            @endif
                                                                    </div>
                                                                    <h3 class="h5comments" >نظر خود را بیان کنید</h3>
                                                                    <div class="column one " >
                                                                        @include('mehr4-theme-dpeac::component.comment-creat',['parent'=>'post' ,'parent_id'=>$post->id])
                                                                    </div>
                                                            </div>
                                                        </div>
                                                            @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap two-third valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_column">
                                            <div class="column_attr clearfix align_center">
                                                <h2 style="color:#fff"></h2>
                                                <p style="color:#fff">
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="section mcb-section   " style="padding-top:1px; padding-bottom:1px;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  column-margin-20px valign-top clearfix">
                                <div class="mcb-wrap-inner">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
