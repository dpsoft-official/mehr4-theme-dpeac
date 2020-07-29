@extends('mehr4-theme-dpeac::layout-page')



@section('title')
    {{$page->title}}
@endsection
@section('content')
    {!! $page->content !!}
    <hr>
    @if($page->commentable==true)
    <section class="comments-course">
        <h3>نظرات</h3>
        <!-- Gride Start -->
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="medium-4 small-12">
                    <div class="comments-course-form">
                        <h2>ارسال دیدگاه</h2>
                        @include('mehr4-theme-dpeac::component.comment-creat',['parent'=>'page' ,'parent_id'=>$page->id])
                    </div>
                </div>

                <div class="medium-8 small-12" itemscope="itemscope" itemprop="http://schema.org/Comment">
                    @foreach($page->comments as $comment)
                        <div class="comments-course-box">
                            <article style="overflow: hidden; max-height: none;">
                                <b itemprop="author"><a>{{$comment->creator ? $comment->creator->name:"نظر دهنده"}}"</a></b>
                                <p itemprop="description">
                                    {{$comment->body}}
                                </p>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection

