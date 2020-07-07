@extends("mehr4-theme-dpeac::layout")
@section('main')
    <section class="weblog-content">
        <!-- #contact Us Header -->
        <div class="back-header">
            <img src="{{Storage::url('theme/robane-package.png')}}" alt="">
        </div>
        <!-- Gride Start -->
        <div class="weblog-content-parent">
            <div class="grid-container">
                <div class="weblog-content-box">
                    <div class="head-packege">
                        <h4>آخرین مطالب وبلاگ</h4>
                        <hr>
                    </div>
                    <div class="grid-x grid-padding-x">
                        @foreach($posts as $post)
                        <div class=" blog-box" itemscope="" itemtype="http://schema.org/Article">
                            <div itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                                <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                                    <img style="display:none" src="" alt="">
                                    <meta itemprop="url" content="ood-Floors.jpg">
                                    <meta itemprop="width" content="600">
                                    <meta itemprop="height" content="60">
                                </div>

                            </div>
                            <meta itemprop="datePublished" content=" ">
                            <meta itemprop="dateModified" content="">
                            <div itemprop="image" itemscope="" itemtype="">
                                <img src=" alt="">
                                <meta itemprop="url" content="">
                                <meta itemprop="width" content="70">
                                <meta itemprop="height" content="70">
                            </div>
                            <meta itemprop="author" content="Twitter">
                            <h4 itemprop="headline">!!{{$post->title}}!!


                            </h4>
                            <div class="caption">
                                <time datetime="YY">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{$post->posted_at}}
                                </time>/
                                <authors>
                                    <i class="fa fa-user" aria-hidden="true"></i>{{$post->author->name}}
                                </authors>

                            </div>

                            <p itemprop="description">
                                {!! \Illuminate\Support\Str::limit(strip_tags($post->description),320,'...') !!}

                            </p>
                            <a itemprop="url" href="{{$post->url}}" class="load-more">ادامه مطلب
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </a>
                        </div>
                  @endforeach
                    </div>
                    <center>
{{--                        <nav aria-label="Pagination">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="disabled">--}}
{{--                                    <span>«قبلی</span>--}}
{{--                                </li>--}}

{{--                                <li class="current">--}}
{{--                                    <span>1</span>--}}
{{--                                </li>--}}
{{--                                <li><a href="http://dpe.ac/%D9%88%D8%A8%D9%84%D8%A7%DA%AF?page=2">2</a></li>--}}
{{--                                <li><a href="http://dpe.ac/%D9%88%D8%A8%D9%84%D8%A7%DA%AF?page=3">3</a></li>--}}
{{--                                <li><a href="http://dpe.ac/%D9%88%D8%A8%D9%84%D8%A7%DA%AF?page=2" rel="next">بعدی»</a></li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}

                    </center>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>
@endsection
