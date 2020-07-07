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
                                <authors>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                   {{$post->author->name}}
                                </authors>
                                <time datetime="YY">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>{{$post->posted_at}}
                                </time>
                            </div>
                            <br>
                            <p>
                                {!! $post->description !!}


                            </p>
                        </div>
                    </div></div></div></div></section>
@endsection
