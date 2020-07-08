@extends("mehr4-theme-dpeac::layout")

@section('main')
        <main class="main">
            <!-- #Slider -->
            <section class="slider-main">
                <img id="course-image" src="{{$category->avatar!=null ?Storage::url($category->avatar) :Storage::url('theme/avator-category.jpg')}}" alt="{{$category->title}}">
                <div class="title-department">
                    @if(isset($selectedCategory))
                   <h2 id="course-title" itemprop="name" style="color: rgb(255, 255, 255); text-shadow: rgb(0, 0, 0) 0px 4px 3px;">{{$category->title}}
                    </h2>
                    @endif
                </div>
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="department-boxes">
                            @foreach(Dpsoft\Mehr\Models\Category::whereFeatured(true)->take(3)->get() as $featuredCategory)
                            <a class="departman-boxa" href="{{$featuredCategory->courses_url}}">
    <span class="departman-box">
            <img src="{{$category->avatar!=null ?Storage::url($category->avatar) :Storage::url('theme/avator-category.jpg')}}" alt="مدیریت ، فروش ، بازاریابی{{$featuredCategory->title}}">
            <p>{{$featuredCategory->title}}</p>
        </span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </section>
            <!-- #Department -->
            <section class="department dep-pages">
                <!-- Gride Start -->
                <div class="grid-container">
                    <div class="grid-x grid-padding-x ">
                        <div class="medium-2 small-12">
                            <div class="department-crt ">
                                <img src="http://dpe.ac/api/file/download/5a6dc2f61f61a_icon-momenzade_21.png/icon-momenzade_21.png" width="176" alt="هنرهای دیجیتال و عکاسی">
                                <h5>هنرهای دیجیتال و عکاسی</h5>
                                <p>هنرت را آنلاین کن</p>
                                <a href="http://dpe.ac/%D8%AF%D9%BE%D8%A7%D8%B1%D8%AA%D9%85%D8%A7%D9%86/15/%D9%87%D9%86%D8%B1%D9%87%D8%A7%DB%8C-%D8%AF%DB%8C%D8%AC%DB%8C%D8%AA%D8%A7%D9%84-%D9%88-%D8%B9%DA%A9%D8%A7%D8%B3%DB%8C/1" class="dep-crt-btn">مشاهده کل دوره ها</a>
                            </div>
                        </div>
                        <div class="medium-10 small-12">
                            <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/335/%D8%B9%DA%A9%D8%A7%D8%B3%DB%8C-%D8%A2%D8%AA%D9%84%DB%8C%D9%87%E2%80%8C%D8%A7%DB%8C--2-%D9%88-1-">
                                    <img src="http://dpe.ac/api/file/download/5af18cf13190e/akkasi-ateliey-box.jpg" alt="عکاسی آتلیه&zwnj;ای (2 و 1)">
                                    <h3>عکاسی آتلیه&zwnj;ای (2 و 1)</h3>
                                    <span></span>
                                    <ins>459,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/336/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%AC%D8%A7%D9%85%D8%B9--COREL-DRAW">
                                    <img src="http://dpe.ac/api/file/download/5af18e0626d58/corel-draw-box.jpg" alt="آموزش جامع  COREL DRAW">
                                    <h3>آموزش جامع  COREL DRAW</h3>
                                    <span></span>
                                    <ins>609,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/337/%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C-%D8%A8%D8%A7-illustrator--2-%D9%88-1-">
                                    <img src="http://dpe.ac/api/file/download/5af18eb885ef0/illustrator-box.jpg" alt="طراحی با illustrator (2 و 1)">
                                    <h3>طراحی با illustrator (2 و 1)</h3>
                                    <span></span>
                                    <ins>609,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/338/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D9%86%D8%B1%D9%85-%D8%A7%D9%81%D8%B2%D8%A7%D8%B1-%D9%84%D8%A7%DB%8C%D8%AA-%D8%B1%D9%88%D9%85--2-%D9%88-1-">
                                    <img src="http://dpe.ac/api/file/download/5af192aac4d22/lightroom_box.jpg" alt="آموزش نرم افزار لایت روم (2 و 1)">
                                    <h3>آموزش نرم افزار لایت روم (2 و 1)</h3>
                                    <span></span>
                                    <ins>479,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/339/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%AC%D8%A7%D9%85%D8%B9-%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C-%DA%AF%D8%B1%D8%A7%D9%81%DB%8C%DA%A9-%D9%88-%D9%81%D8%AA%D9%88%D8%B4%D8%A7%D9%BE--2-%D9%88-1-">
                                    <img src="http://dpe.ac/api/file/download/5af193e8e43a3/photoshop-box.jpg" alt="آموزش جامع طراحی گرافیک و فتوشاپ (2 و 1)">
                                    <h3>آموزش جامع طراحی گرافیک و فتوشاپ (2 و 1)</h3>
                                    <span></span>
                                    <ins>609,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/370/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D9%81%D8%AA%D9%88%D8%B4%D8%A7%D9%BE-%D9%88%DB%8C%DA%98%D9%87-%D8%B1%D8%AA%D9%88%D8%B4-%D8%B9%DA%A9%D8%B3">
                                    <img src="http://dpe.ac/api/file/download/5b323419aab96/rotootsh-box-dore.jpg" alt="آموزش فتوشاپ ویژه رتوش عکس">
                                    <h3>آموزش فتوشاپ ویژه رتوش عکس</h3>
                                    <span></span>
                                    <ins>249,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/371/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D9%81%D8%AA%D9%88%D8%B4%D8%A7%D9%BE-%D9%88%DB%8C%DA%98%D9%87-%D8%AA%D8%A7%DB%8C%D9%BE%D9%88%DA%AF%D8%B1%D8%A7%D9%81%DB%8C-%D8%A7%D9%81%DA%A9%D8%AA%E2%80%8C%D9%87%D8%A7%DB%8C-%D9%BE%D8%B1%DA%A9%D8%A7%D8%B1%D8%A8%D8%B1%D8%AF-%D8%AA%D8%B1%DA%A9%DB%8C%D8%A8%DB%8C">
                                    <img src="http://dpe.ac/api/file/download/5b3497175e6af/typography-box-dore-daneshpazhouhan-institute.jpg" alt="آموزش فتوشاپ ویژه تایپوگرافی افکت&zwnj;های پرکاربرد ترکیبی">
                                    <h3>آموزش فتوشاپ ویژه تایپوگرافی افکت&zwnj;های پرکاربرد ترکیبی</h3>
                                    <span></span>
                                    <ins>339,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/372/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D9%81%D8%AA%D9%88%D8%B4%D8%A7%D9%BE-%D9%88%DB%8C%DA%98%D9%87-%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C-%D8%A8%D9%86%D8%B1-%D8%8C-%D9%BE%D9%88%D8%B3%D8%AA%D8%B1-%D8%8C-%DA%A9%D8%A7%D8%AA%D8%A7%D9%84%D9%88%DA%AF">
                                    <img src="http://dpe.ac/api/file/download/5b323072e1a10/photoshop-poster-baner-katolog-box-dore.jpg" alt="آموزش فتوشاپ ویژه طراحی بنر ، پوستر ، کاتالوگ">
                                    <h3>آموزش فتوشاپ ویژه طراحی بنر ، پوستر ، کاتالوگ</h3>
                                    <span></span>
                                    <ins>249,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/373/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D9%81%D8%AA%D9%88%D8%B4%D8%A7%D9%BE-%D9%88%DB%8C%DA%98%D9%87-%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C-%DA%A9%D8%A7%D8%B1%D8%AA-%D9%88%DB%8C%D8%B2%DB%8C%D8%AA-%D8%A8%D9%87-%D8%B3%D8%A8%DA%A9-%D8%AD%D8%B1%D9%81%D9%87%E2%80%8C%D8%A7%DB%8C-%D9%87%D8%A7">
                                    <img src="http://dpe.ac/api/file/download/5b3230b567bbb/photpshop-kart-visit-box-dore.jpg" alt="آموزش فتوشاپ ویژه طراحی کارت ویزیت به سبک حرفه&zwnj;ای ها">
                                    <h3>آموزش فتوشاپ ویژه طراحی کارت ویزیت به سبک حرفه&zwnj;ای ها</h3>
                                    <span></span>
                                    <ins>249,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D9%BE%DA%A9%DB%8C%D8%AC+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/380/%D9%BE%DA%A9%DB%8C%D8%AC-%22%DA%AF%D8%B1%D8%A7%D9%81%DB%8C%DA%A9-%D8%AD%D8%B1%D9%81%D9%87%E2%80%8C%D8%A7%DB%8C-%D8%A7%D8%B2-%D8%B5%D9%81%D8%B1-%D8%AA%D8%A7-%D8%AF%D8%B1%D8%A2%D9%85%D8%AF%22">
                                    <img src="http://dpe.ac/api/file/download/5b8fbdad9287a/package-graphic-box_pre.jpg" alt="پکیج &quot;گرافیک حرفه&zwnj;ای از صفر تا درآمد&quot;">
                                    <h3>پکیج "گرافیک حرفه&zwnj;ای از صفر تا درآمد"</h3>
                                    <span></span>
                                    <ins>2,150,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/381/%DA%A9%D8%A7%D8%B1%D8%A8%D8%B1%D8%AF-%D9%BE%D8%B1%D8%AF%D9%87-%D8%B3%D8%A8%D8%B2-%D8%AF%D8%B1-%D8%A7%D9%81%D8%AA%D8%B1-%D8%A7%D9%81%DA%A9%D8%AA">
                                    <img src="http://dpe.ac/api/file/download/5b323105d8906/after-parde-sabz-box-dore.jpg" alt="کاربرد پرده سبز در افتر افکت">
                                    <h3>کاربرد پرده سبز در افتر افکت</h3>
                                    <span></span>
                                    <ins>339,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/396/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D9%81%D8%AA%D9%88%D8%B4%D8%A7%D9%BE-%D9%88%DB%8C%DA%98%D9%87%E2%80%8C-%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C-%D8%B3%D8%A7%DB%8C%D8%AA">
                                    <img src="http://dpe.ac/api/file/download/5b3497171b9d4/photoshop-tarahy-sight-slider-dore-daneshpazhouhan-institute.jpg" alt="آموزش فتوشاپ ویژه&zwnj; طراحی سایت">
                                    <h3>آموزش فتوشاپ ویژه&zwnj; طراحی سایت</h3>
                                    <span></span>
                                    <ins>249,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D9%BE%DA%A9%DB%8C%D8%AC+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/415/%D9%BE%DA%A9%DB%8C%D8%AC-%22%D8%A7%D8%B2-%D8%B9%DA%A9%D8%A7%D8%B3%DB%8C-%D9%BE%D8%A7%DB%8C%D9%87-%D8%AA%D8%A7-%D8%A2%D8%AA%D9%84%DB%8C%D9%87%E2%80%8C%D8%A7%DB%8C%22">
                                    <img src="http://dpe.ac/api/file/download/5b8fbdaca3bd7/package-akasi-box_pre.jpg" alt="پکیج &quot;از عکاسی پایه تا آتلیه&zwnj;ای&quot;">
                                    <h3>پکیج "از عکاسی پایه تا آتلیه&zwnj;ای"</h3>
                                    <span></span>
                                    <ins>1,950,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/420/%D8%AC%D9%84%D9%88%D9%87%E2%80%8C%D9%87%D8%A7%DB%8C-%D9%88%DB%8C%DA%98%D9%87-%D8%AF%D8%B1-%D8%A7%D9%81%D8%AA%D8%B1%D8%A7%D9%81%DA%A9%D8%AA">
                                    <img src="http://dpe.ac/api/file/download/5b349714b9e21/after-efect-special-effects-box-dore-daneshpazhouhan-institute.jpg" alt="جلوه&zwnj;های ویژه در افترافکت">
                                    <h3>جلوه&zwnj;های ویژه در افترافکت</h3>
                                    <span></span>
                                    <ins>339,000 تومان</ins>
                                </a>
                            </div>                                                    <div class="post4">
                                <a href="http://dpe.ac/%D8%AF%D9%88%D8%B1%D9%87%E2%80%8C%DB%8C+%D8%A2%D9%85%D9%88%D8%B2%D8%B4%DB%8C/421/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D9%86%D8%B1%D9%85-%D8%A7%D9%81%D8%B2%D8%A7%D8%B1-indesign--2-%D9%88-1-">
                                    <img src="http://dpe.ac/api/file/download/5b446326f3672/dore-majazi-amozesh-indesign-box-dore-daneshpazhouhan-institute.jpg" alt="آموزش نرم افزار indesign (2 و 1)">
                                    <h3>آموزش نرم افزار indesign (2 و 1)</h3>
                                    <span></span>
                                    <ins>609,000 تومان</ins>
                                </a>
                            </div>                                            </div>
                    </div>
                    <div class="grid-x grid-padding-x  dep-section dep-page">
                    </div>
                </div>
            </section>
        </main>









        <!-- Gride Start -->
        <div class="contact-us-content-parent">
            <div class="grid-container">
                <div class="contact-us-content-box">
                    <div class="head-packege">
                        <h3>دپارتمان ها</h3>
                        <hr>
                        <div class="grid-container" style="text-align: right;">
                            <section class="slider-main">
                                <div class="department-boxes" style="margin: 0;">
                                @foreach($categories as $category)
                                        <a class="departman-boxa" href="{{$category->courses_url}}">
                                            <span class="departman-box"> <img src="{{Storage::url($category->image)}}"
                                             alt="{{$category->title}}">
                                                <small>{{$category->title}}</small> </span></a>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
