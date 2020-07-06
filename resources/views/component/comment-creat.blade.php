<form method="post" action="{{route('comment.create')}}" autocomplete="off">
    {{ csrf_field() }}

    @guest
        <div class="column one-second" style="margin-bottom: unset;">
            <input type="text" name='name' value="" id="subject" placeholder="نام" style="width: 100%">
        </div>
        <div class="column one-second" style="margin-bottom: unset;">
            <input type="email" name="email" value="" placeholder="ایمیل" style="width: 100%">
        </div>
        <input type="hidden" name="{{$parent}}" value="{{$parent_id}}">

        <textarea class="column one" name="body" id="comments2" rows="6" placeholder="نظر شما ..."
                  style="margin-bottom: 12px;"></textarea>

        <button type="submit" id="buy-course" class="btn_1 rounded full-width add_top_60"> ارسال نظر</button>

    @else

        <input type="hidden" name="{{$parent}}" value="{{$parent_id}}">

        <textarea class="column one" name="body" id="comments2" rows="6" placeholder="نظر شما ..."
                  style="border-width: 3px 0 3px 0 !important;margin: 0;margin-bottom: 12px;"></textarea>

        <button type="submit" id="buy-course" class="btn_1 rounded full-width add_top_60"> ارسال نظر</button>
    @endguest
</form>





