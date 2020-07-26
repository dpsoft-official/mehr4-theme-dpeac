@extends("mehr4-theme-dpeac::layout")


@section('main')
    <section class="contact-us-content" id="custome-page">
        <!-- #contact Us Header -->
        <div class="back-header">
            <img src="{{Storage::url('theme/robane-package.png')}}" alt="{{setting('site.name')}}">
        </div>
        <!-- Gride Start -->
        <div class="contact-us-content-parent">
            <div class="grid-container">
                <div class="contact-us-content-box">
                    <div class="head-packege">
                        <h3>داستان ما</h3>
                        <hr>
                        <div class="grid-container" style="text-align: right;">
                            <p style="text-align: right;">

                                {{setting('site.about')}}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
