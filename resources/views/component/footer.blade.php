
<footer class="footer" style="background-image:url('{{Storage::url('theme/footer.png')}}')">
    <!-- Gride Start -->
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="footer-main" style="height: 650px;background-image:url('{{Storage::url('theme/footer-main.png')}}');">
                <div class="news-latter">
                    <p style="margin-top: 42px;">برای دریافت مشاوره رایگان شماره تماس خود را وارد کنید</p>
                    <img src="{{Storage::url('theme/footer-mosh.png')}}" alt="فوتر">
                    <form
                        role="form"
                        name="ava-crm-form"
                        class="wpcf7-form"
                        data-token="{{setting('ava3.token')}}"
                        novalidate="novalidate">
                        <input type="hidden" name="product_id" value="{{setting('product_id')}}">
                        <input type="hidden" name="source_id" value="{{setting('resource_id')}}">
                        <input type="tel"  name="mob" id="inputMobile"  required="required" pattern="[\u06F0-\u06F90-9\u0660-\u0669]{11}"
                               value=""   size="40"    placeholder="091212345678">

                        <p><button class="button" data-open="exampleModal1" style="background: #2ac489;
    padding: 10px 18px;
    border-radius: 3px;
    color: white!important;">با من تماس بگیرید</button></p>
                    </form>


                </div>
                <div class="reveal" id="exampleModal1" data-reveal>
                    <h5 style="text-align:center;">
با تشکر از شما
                    </h5>
                    <p class="lead" style="text-align: center;">شماره تماس شما ثبت شد.</p>
                    <p>کارشناسان ما با شما تماس خواهند گرفت</p>
                    <button class="close-button" data-close aria-label="Close modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>




                <div class="row medium-8 small-12">
                    <div class="column-right">
                        {!! setting('samandehi')!!}

                        {!! setting('enemad')!!}


                        <p>دانش پژوهان را دنبال کنید</p>
                        <ul class="socoial">


                            @if(setting('social.twitter')!=null)
                            <li>
                                <a href="{{setting('social.twitter')}}">
                                    <i class="icon-uniF104"></i>
                                </a>
                            </li>
                            @endif

                                @if(setting('social.instagram')!=null)
                            <li>
                                <a href="{{setting('social.instagram')}}">
                                    <i class="icon-uniF105"></i>
                                </a>
                            </li>
                                @endif
                                @if(setting('social.aparat')!=null)
                            <li>
                                <a href="{{setting('social.aparat')}}">
                                    <i class="icon-aparat"></i>
                                </a>
                            </li>
                                @endif
                                @if(setting('social.youtube')!=null)
                            <li>
                                <a href="{{setting('social.youtube')}}">
                                    <i class="icon-uniF102"></i>
                                </a>
                            </li>
                                @endif
                                @if(setting('social.telegram')!=null)
                            <li>
                                <a href="{{setting('social.telegram')}}">
                                    <i class="icon-uniF103"></i>
                                </a>
                            </li>
                                    @endif
                        </ul>
                    </div>
                    <div class="column-left">
                        <h6>تماس باما</h6>
                        <i class="icon-uniF106"></i>
                        <p>
                            {{setting('contact.address')}}
                        </p>
                        <br>
                        <i class="icon-uniF100"></i>
                        <p>
                            تلفن ثبت نام:   {{setting('contact.phone')}}
                        </p>
                        <i class="icon-uniF101"></i>
                        <p>
                                            {{setting('contact.payamak')}}
                        </p>
                        <div style="margin-top: 10px">
                            <a href="https://cafebazaar.ir/app/ir.dpsoft.lms" target="_blank">
                                <img class="bazaar" src="{{Storage::url('theme/bazaarImage.png')}}" alt="دانلود برنامه&zwnj;ی اندروید مهر از کافه بازار" title="دانلود اپلیکیشن اندروید مهر از کافه بازار" width="128">
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=ir.dpsoft.lms" target="_blank">
                                <img class="googleplay" src="{{Storage::url('theme/googleplayImage.png')}}" alt="دانلود اپلیکیشن اندروید مهر از گوگل پلی" title="دانلود اپلیکیشن اندروید مهر از گوگل پلی" width="128">
                            </a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <!-- End Gride -->
</footer>
