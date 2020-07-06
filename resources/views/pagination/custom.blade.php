<div class="column one " style="
    text-align: center;
    z-index: 10000;
    margin-bottom: 2%;
    direction:rtl;
    margin-top: 5%;
">

@if ($paginator->onFirstPage())
<a class="button button_js slider_prev disbutton" ><span class="button_icon1" style="padding: 11px 13px;"><span class="back">صفحه  قبلی
                                                                           </span><i  <i
                                                                                        class="icon-right-dir"></i></span></a>
@else
<a class="button button_js slider_prev" href="{{$paginator->previousPageUrl()}}"><span class="button_icon"><span class="back">صفحه  قبلی
                                                                                                            </span><i
<i class="icon-right-dir"></i></span></a>
@endif
@if ($paginator->hasMorePages())
<a class="button button_js slider_next" href="{{$paginator->nextPageUrl()}}"><span class="button_icon"><span class="next">صفحه  بعدی
                                                                                                        </span>
<i
class="icon-left-dir">

</i></span></a>
@else
<a class="button button_js slider_next disbutton" ><span class="button_icon1" style="padding: 11px 13px;">
<span class="next">صفحه  بعدی
 </span><i class="icon-left-dir"></i></span></a>
@endif
<div class="slider_pagination"></div>

</div>
