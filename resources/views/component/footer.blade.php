<footer class="footer" style="background-image:url('{{Storage::url('theme/footer.png')}}')">
    <!-- Gride Start -->
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="footer-main" style="height: 650px;background-image:url('{{Storage::url('theme/footer-main.png')}}');">
                <div class="news-latter">
                    <p style="margin-top: 42px;">برای دریافت مشاوره رایگان شماره تماس خود را وارد کنید</p>
                    <img src="{{Storage::url('theme/footer-mosh.png')}}" alt="فوتر">
                    <livewire:crm-form></livewire:crm-form>
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
