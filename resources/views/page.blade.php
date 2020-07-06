@extends('mehr4-theme-dpeac::layout-page')
@section('title')
    {{$page->title}}
@endsection
@section('content')
    {!! $page->content !!}
    @if($page->commentable==true)
        @if($page->comments->count()>0)
        <div id="comments">
            <h3 style="padding-right: 25px">نظرات</h3>
            <ul style="background-color: #f8faff;padding: 25px;border-radius: 10px;">
                @foreach($page->comments as $comment)
                    <li class="row">
                        <div class="avatar rev-thumb column one-third" style="width: 10%">
                            <a href="#"><img class="img-big" style="width: 68px"
                                             src="{{$comment->creator->avatar? $comment->creator->avatar:Storage::url('theme/author.png')}}"
                                             alt="{{$comment->creator ? $comment->creator->name:"نظر دهنده"}}">
                            </a>
                        </div>

                        <div class="comment_right clearfix column two-third pad_right1"
                             style="padding-top: 20px;">
                            <div class="comment_info">
                                <a style="float: right;">{{$comment->creator ? $comment->creator->name:"نظر دهنده"}}</a>
                                <span style="padding: 0 5px">|</span> <span>
                                         {{\Morilog\Jalali\Jalalian::fromCarbon($comment->created_at)->format('Y-m-d')}}
                                        </span>
                                <span style="padding: 0 5px">|</span>
                            </div>
                            <hr style="margin: 5px">
                            <p>{!! $comment->body !!}
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @else
        <p>نظری برای نمایش وجود ندارد!</p>
    @endif
    <hr>
    <div class="column one">
        <h4>ارسال نظر</h4>
        @include('mehr4-theme-dpeac::component.comment-creat',['parent'=>'page' ,'parent_id'=>$page->id])
    </div>
@endif
@endsection
