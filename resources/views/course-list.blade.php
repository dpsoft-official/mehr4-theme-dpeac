@extends("mehr4-theme-dpeac::layout")

@section('main')
    <section class="contact-us-content" id="custome-page">
        <!-- #contact Us Header -->
        <div class="back-header">
            <img src="{{Storage::url('theme/robane-package.png')}}" alt="">
        </div>
        <!-- Gride Start -->
        <div class="contact-us-content-parent">
            <div class="grid-container">
                <div class="contact-us-content-box">
                    <div class="head-packege">
{{--                        <h3>دپارتمان ها</h3>--}}
                        <hr>
                        <div class="grid-container" style="text-align: right;">
                            <section class="slider-main">
                                <div class="department-boxes" style="margin: 0;">
                                    @foreach($categories as $category)
                                    <a class="departman-boxa" href="{{$category->course->url}}">
                                            <span class="departman-box"> <img src="{{Storage::url($category->image)}}"
                                                                              alt="">
                                                <small>{{$category->title}}</small> </span></a>
                                    @endforeach
                                </div>
                            </section>

                        </div>

                    </div>
                    <nav aria-label="Pagination">
                        {{$courses->render('mehr4-theme-dpeac::pagination.custom')}}
                    </nav>
                </div>

            </div>

        </div>

    </section>



@endsection
