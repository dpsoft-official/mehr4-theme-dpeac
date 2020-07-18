@extends("mehr4-theme-dpeac::layout")
@section('main')
    <section class="contact-us-content">
        <!-- #contact Us Header -->
        <div class="back-header">
            <img src="{{Storage::url('theme/robane-package.png')}}" alt="{{setting('site.name')}}">
        </div>
        <!-- Gride Start -->
        <div class="contact-us-content-parent">
            <div class="grid-container">
                <div class="contact-us-content-box">
                    <img src="{{Storage::url('theme/about.png')}}" alt="{{setting('site.name')}}" width="300px">
                    <div class="head-packege">
                        <h3>تماس باما</h3>
                        <hr>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="medium-5 small-12 contact-us-content-box-section-style">
                            <i class="icon-uniF106"></i>
                            <dt>آدرس : </dt>
                            <dd>{{setting('contact.address')}}
                                <br>
                                <br>
                                شماره تماس پشتیبانی آموزشی :
                               {{setting('phone.buy1')}}-
                               {{setting('phone.buy2')}}-
                               {{setting('phone.buy3')}}-
                               {{setting('phone.buy4')}}
                                <br>
                                <br>
                                ایمیل  روابط عمومی :
                                    {{setting('contact.email')}}   </dd>
                        </div>
                        <div class="medium-5 small-12 contact-us-content-box-section-style">
                            <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDZnWu9WoCEwpiiN326Wl7be2jDFqd5lnA&amp;center=32.6146,51.6732&amp;zoom=17&amp;maptype=roadmap&amp;q=مؤسسه آموزش عالی آزاد دانش پژوهان" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>

                        <div class="medium-5 small-12 contact-us-content-box-section-style">
                            <i class="icon-uniF101"></i>
                            <dt>شماره پیامک : </dt>
                            <dd>{{setting('contact.payamak')}} </dd>
                        </div>
                        <div class="medium-5 small-12 contact-us-content-box-section-style">
                            <i class="icon-uniF100"></i>
                            <dt>تلفن ها : </dt>
                            <dd>تلفن ثبت نام:
                                {{setting('contact.phone')}}
                            </dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
