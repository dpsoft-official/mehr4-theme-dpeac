@extends("mehr4-theme-dpeac::layout")
@section('main')
    <!-- #Slider -->
    <section class="slider-main">
        @if($selectedCategory)
            <img id="course-image"
                 src="{{Storage::url($selectedCategory->image)}}">
        @else
            <div style="background: #00a6bc;">
                <img id="course-image" src="{{Storage::url('theme/robane package.png')}}">
            </div>
            <div>
                @endif
                <div class="title-department">
                    <h2 id="course-title" itemprop="name"
                        style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 4px 3px;">دپارتمان
                        @if($selectedCategory)
                            <small>«{{$selectedCategory->title}}»</small>
                        @endif
                    </h2>
                    @if($query)
                        <div>
                            <h3 style="color: white;">«{{$query}}»</h3>
                        </div>
                    @endif
                </div>
            </div>
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="department-boxes">
                        @foreach(Dpsoft\Mehr\Models\Category::whereFeatured(true)->take(7)->get() as $featuredCategory)
                            <a class=""
                               href="{{$featuredCategory->courses_url}}">
    <span class="departman-box">
            <img src="{{Storage::url($featuredCategory->image)}}" alt="{{$featuredCategory->title}}">
            <p>{{$featuredCategory->title}}</p>
        </span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

    </section>
    <br>
    <!-- #Department -->
    @if($selectedCategory)
        <section class="department dep-pages">
            <!-- Gride Start -->
            <div class="grid-container">
                <div class="grid-x grid-padding-x ">
                    <div class="medium-2 small-12">
                        <div class="department-crt ">
                            @if($selectedCategory)
                                <img src="{{Storage::url($selectedCategory->image)}}" width="176"
                                     alt="{{setting('site.name')}}">
                                <h5>
                                    «{{$selectedCategory->title}}»
                                    @endif
                                </h5>
                        </div>
                    </div>
                    <div class="medium-10 small-12">
                        @if($courses->count()!=0)
                            @foreach($courses as $course)
                                <div class="post4">
                                    <a href="{{$course->url}}">
                                        <img src="{{Storage::url($course->avatar)}}" alt="{{$course->title}}">
                                        <h3>{{$course->title}}</h3>
                                        {{--                                        <span></span>--}}
                                        <ins>{{number_format($course->price)}}تومان</ins>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    @endif
                </div>
            </div>
        </section>
        @if($query)
            <section class="department dep-pages">
                <!-- Gride Start -->
                <div class="grid-container">
                    <div class="grid-x grid-padding-x ">
                        <div class="medium-12 small-12">
                            @if($courses->count()!=0)
                                @foreach($courses as $course)
                                    <div class="post4">
                                        <a href="{{$course->url}}">
                                            <img src="{{Storage::url($course->avatar)}}" alt="{{$course->title}}">
                                            <h3>{{$course->title}}</h3>
                                            <span></span>
                                            <ins>{{number_format($course->price )}}</ins>
                                        </a>
                                    </div>
                                @endforeach
                                {{$course->render('mehr4-theme-dpeac::pagination.custom')}}
                            @else
                                <div class="callout warning">
                                    <h2 style="text-align: center;color: black;">
                                        دوره مورد نظر یافت نشد
                                    </h2>
                                </div>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </section>
            <style>
                .dep-pages .department-crt {
                    background: #8f0324;
                    color: #fff;
                    text-align: center;
                    padding: 30px 10px;
                    width: 100%;
                    position: relative;
                    height: 340px;
                }

                .slider-main .title-department h2, .slider-main .title-department p {
                    color: #fff;
                    font-weight: 700;
                    text-shadow: 0px 4px 4px #000;
                }

                .dep-pages .post4 {
                    box-shadow: 5px 5px 25px 0px rgba(46, 61, 73, 0.4);
                    padding-bottom: 71px;
                    position: relative;
                    border-radius: 5px;
                    background: #fff;
                    height: 280px;
                    margin-right: 48px;
                    display: -ms-inline-grid;
                    display: inline-grid;
                    width: 19%;
                    margin-top: 35px;
                }

                .department .department-crt .dep-crt-btn {
                    border: 1px solid #fff;
                    color: #e1e1e1;
                    font-size: 13px;
                    font-weight: 100;
                    width: 100%;
                    padding: 8px 25px !important;
                    position: relative;
                    border-radius: 2px;
                }

                @media screen and (max-width: 39.9375em) {
                    .dep-pages .post4 {
                        box-shadow: 5px 5px 25px 0px rgba(46, 61, 73, 0.4);
                        padding-bottom: 71px;
                        position: relative;
                        border-radius: 5px;
                        background: #fff;
                        height: 195px;
                        margin-right: 10px;
                        display: -ms-inline-grid;
                        display: inline-grid;
                        width: 40%;
                        margin-top: 35px;

                    }

                    .slider-main .department-boxes .departman-box {
                        margin: 10px;
                        display: -ms-inline-grid;
                        display: inline-grid;
                        width: 94%;
                        text-align: center;
                        box-shadow: 5px 5px 25px 0 rgba(46, 61, 73, .2);
                        border-radius: 3px !important;
                    }

                    .slider-main .department-boxes {
                        margin-top: 1rem;
                    }
                }
            </style>
@endsection
