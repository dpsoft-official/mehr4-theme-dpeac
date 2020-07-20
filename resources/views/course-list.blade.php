@extends("mehr4-theme-dpeac::layout")
@section('main')
    <!-- #Slider -->
    <section class="slider-main">
        <img id="course-image"
             src="{{Storage::url('theme/avator-category.jpg')}}">
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
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="department-boxes">
                    @foreach($categories as $category)
                        <a class="departman-boxa"
                           href="{{$category->courses_url}}">
    <span class="departman-box">
            <img src="{{Storage::url($category->image)}}" alt="{{$category->title}}">
            <p>{{$category->title}}</p>
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
                                <img src="{{Storage::url($selectedCategory->image)}}" width="176" alt="{{setting('site.name')}}">
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
                                        <img src="{{Storage::url($course->image)}}" alt="{{$course->title}}">
                                        <h3>{{$course->title}}</h3>
{{--                                        <span></span>--}}
                                        <ins>{{number_format($course->price )}}</ins>
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
                                            <img src="{{Storage::url($course->image)}}" alt="{{$course->title}}">
                                            <h3>{{$course->title}}</h3>
                                            <span></span>
                                            <ins>{{number_format($course->price )}}</ins>
                                        </a>
                                    </div>
                                @endforeach
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
@endsection
