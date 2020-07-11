<div class="column one">

    @if ($paginator->onFirstPage())
        <a class="button button_js slider_prev disbutton" style="background-color: gray;cursor: pointer;"><span class="" style="padding: 11px 13px;"><span style="cursor: pointer;" class="back">صفحه  قبلی
                                                                           </span><i
                    class="icon-right-dir"></i></span></a>
    @else
        <a class="button button_js slider_prev" href="{{$paginator->previousPageUrl()}}"><span class="button_icon"><span
                    class="back">صفحه  قبلی
                                                                                                            </span>
<i class="icon-right-dir"></i></span></a>
    @endif
    @if ($paginator->hasMorePages())
        <a class="button button_js slider_next" href="{{$paginator->nextPageUrl()}}"><span class="button_icon"><span
                    class="next">صفحه  بعدی
                                                                                                        </span>
<i
    class="icon-left-dir">

</i></span></a>
    @else
        <a class="button button_js slider_next disbutton" style="background-color: gray;cursor: pointer;"><span>
<span class="next">صفحه  بعدی
 </span><i class="icon-left-dir"></i></span></a>
    @endif
    <div class="slider_pagination"></div>

</div>
