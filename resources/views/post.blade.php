@extends("mehr4-theme-dpeac::layout")

@section('main')
    <section class="post-content">
        <!-- #contact Us Header -->
        <div class="back-header">
            <img src="{{Storage::url('theme/robane-package.png')}}" alt="">
        </div>
        <!-- Gride Start -->
        <div class="post-content-parent">
            <div class="grid-container">
                <div class="post-content-box">
                    <div class="grid-x grid-padding-x">
                        <div class=" post-box" itemscope="" itemtype="http://schema.org/Blog">
                            <img src="{{Storage::url('$post->image')}}" alt="">
                            <h3 itemprop="name">
                                {{$post->title}}
                            </h3>
                            <div class="caption">
                                <time datetime="YY">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>{{$post->posted_at}}
                                </time>
                                <authors>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    {{$post->author->name}}
                                </authors>

                            </div>
                            <br>
                            <p>
                                {!! $post->description !!}
                            </p>
                        </div>
                    </div>
                    <hr>

                    <section class="comments-course">
                        <h3>نظرات</h3>
                        <!-- Gride Start -->
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                <div class="medium-4 small-12">
                                    <div class="comments-course-form">
                                        <h2>ارسال دیدگاه</h2>
                                        @include('mehr4-theme-dpeac::component.comment-creat',['parent'=>'post' ,'parent_id'=>$post->id])
                                    </div>
                                </div>

                                <div class="medium-8 small-12" itemscope="itemscope" itemprop="http://schema.org/Comment">
                                    @foreach($post->comments as $comment)
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

                </div>
            </div>
        </div>

    </section>





@endsection
