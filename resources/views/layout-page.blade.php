@extends('mehr4-theme-dpeac::layout')

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
                        <h3>@yield('title')</h3>
                        <hr>
                        <div class="grid-container" style="text-align: right;">
                            <p>
                                @yield('content')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
@endsection
