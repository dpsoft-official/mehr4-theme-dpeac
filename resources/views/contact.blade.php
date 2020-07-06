@extends("mehr4-theme-dpeac::layout")
@section('class-body')
    style-simple layout-full-width mobile-tb-left button-flat no-content-padding header-stack header-center minimalist-header sticky-header sticky-white ab-hide subheader-both-center menu-arrow-top menuo-no-borders footer-copy-center

@endsection
@section('main')
    <div id="Subheader " class="contact-header" style="background-image: url({{Storage::url('theme/header-contact.jpg')}})">

        <div class="container">
            <div class="column one">
                <h1 class="title"> تماس با ما</h1>
            </div>
        </div>
    </div>
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section contact-page" style="background-image:url({{Storage::url('theme/bg-contactpage.png')}}) ">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One Fourth (1/4) Column -->
                                <div class="column one-fourth column_column">
                                    <div class="column_attr "></div>
                                </div>
                                <!-- One Second (1/2) Column -->
                                <div class="column one-second column_column">
                                    <div class="column_attr align_center">
                                        <h3>ارتباط با ما
                                            <br>
                                        </h3>
                                        <p class="big">
                                            جهت ارتباط با ما از طریق فرم زیر ،پیام های خود را برای ما ارسال کنید. </p>
                                    </div>
                                </div>
                                <!-- Page devider -->
                                <!-- One full width row-->
                                <div class="column one column_divider">
                                    <hr class="no_line">
                                </div>
                                <!-- One Fourth (1/4) Column -->
                                <div class="column one-fourth column_column">
                                    <div class="column_attr "></div>
                                </div>
                                <!-- One Second (1/2) Column -->
                                <div class="column one-second column_column">
                                    <div class="column_attr ">

                                        <div id="contactWrapper">
                                            <form method="post" class="rtl" action="{{route('contact.create')}}"
                                                  id="contactform" autocomplete="off">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
									<span class="input">
										<input class="input_field" type="text" id="name_contact" name="name"
                                               placeholder="نام خود را وارد کنید" required
                                               value="{{old('name')}}">

									</span>
                                                    </div>
                                                </div>
                                                <!-- /row -->
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-12">
									<span class="input">
										<input class="input_field" type="text" id="phone_contact" name="phone"
                                               placeholder="شماره تماس خود را وارد کنید"
                                               required {{old('phone')}}>

									</span>
                                                    </div>
                                                </div>
                                                <!-- /row -->
                                                <br>

                                                <span class="input">
									<textarea class="input_field" id="message_contact" name="message"
                                              placeholder="پیام خود را وارد کنید"
                                              style="height:243px;" required>{{old('message')}}</textarea>

							</span>


                                                <br>
                                                <p class="add_top_30"><input type="submit" value="ارسال"
                                                                             class="btn_1 rounded"
                                                                             id="submit-contact"></p>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section no-margin " style="padding-top:50px; padding-bottom:50px; background-color:rgb(69, 85, 139);">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One full width row-->
                                <div class="column one column_column">
                                    <div class="column_attr align_center">
                                        <h3 class="hrmargin_0" style="color:white;">سوالی دارید؟با ما در ارتباط باشید <i class="icon-phone themecolor" style="color:white;"></i>
                                            {{setting('contact.phone')}}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section mcb-section mcb-section-fa1b82a84 equal-height-wrap contact-head"
                    >
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap mcb-wrap-ed69cc756 one-second valign-top clearfix"
                                 style="padding:68px 27px 21px;background-color:rgb(69, 85, 139);">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-bc176c2c4 one column_column">
                                        <div class="column_attr clearfix">
                                            <h4 style="color: #ffffff; padding-bottom: 30px; border-bottom: 2px solid #3661cf; display: inline-block;">
                                                آدرس ما</h4>
                                            <hr class="no_line" style="margin: 0 auto 30px;">
                                            <h5 class="address" style="color: #fff;">{{setting('contact.address')}}

                                            </h5>
                                            <hr class="no_line" style="margin: 0 auto 30px;">
                                            <h5 style="color: #fff;"><i
                                                    class="icon-phone themecolor"></i>{{setting('contact.phone')}}</h5>
                                            <h5 style="color: #fff;"><i class="icon-mail themecolor"></i><a
                                                    href="mailto:{{setting('contact.email')}}"
                                                    style="color: white;">{{setting('contact.email')}}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div   class="wrap mcb-wrap mcb-wrap-9696ed212 one-second valign-top bg-cover clearfix contact-photo"
                                   style="background-image:url({{Storage::url('theme/contact.jpg')}})">
                                <div class="mcb-wrap-inner">
                                    <div class="column mcb-column mcb-item-e6b46ea98 one column_divider">
                                        <hr class="no_line" style="margin: 0 auto 400px;">
                                    </div>
                                </div>
                            </div>



                        </div>

                        <div class="section mcb-section full-width  " style="padding-top:0px; padding-bottom:0px; ">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one  valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_map ">

                                            <div class="google-map-wrapper no_border">

                                                <div class="gmap_canvas">
                                                    <iframe width="100%" height="465" id="gmap_canvas"
                                                            src="https://maps.google.com/maps?q=%D9%85%D8%A4%D8%B3%D8%B3%D9%87%20%D8%A2%D9%85%D9%88%D8%B2%D8%B4%20%D8%B9%D8%A7%D9%84%DB%8C%20%D8%A2%D8%B2%D8%A7%D8%AF%20%D8%AF%D8%A7%D9%86%D8%B4%20%D9%BE%DA%98%D9%88%D9%87%D8%A7%D9%86&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                            frameborder="0" scrolling="no" marginheight="0"
                                                            marginwidth="0"></iframe>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
