@extends('mehr4-theme-dpeac::layout')
@section('class-body')
    style-simple layout-full-width mobile-tb-left
    button-flat no-content-padding header-stack
    header-center minimalist-header sticky-header
    sticky-white ab-hide subheader-both-center
    menu-arrow-top menuo-no-borders footer-copy-center
@endsection
@section('main')
    <div id="Subheader " class="page-header" style="background-image: url({{Storage::url('theme/header-page.jpg')}})">
        <div class="container">
            <div class="column one">
                <h1 class="title">@yield('title')</h1>
            </div>
        </div>
    </div>
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">

                <div class="entry-content">
                    <div class="section mcb-section" style="padding-top:0px; padding-bottom:70px;text-align: justify;">
                        <div class="section_wrapper mcb-section-inner">

                            <div class="wrap mcb-wrap one  column-margin-20px valign-top clearfix rtl" style="padding:0 1%">
                                <div class="mcb-wrap-inner">
                                    <p class="page-content" >
                                        @yield('content')
                                    </p>
                                    <div class="column mcb-column one column_column">
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
