                <form method="post"  class="comments-course-form-validate formcomment"
                      action="{{route('comment.create')}}" autocomplete="off">
                    {{ csrf_field() }}
                    @guest
                    <label for="">
                        <input type="text" name='name' value="" id="subject" placeholder="نام" style="width: 100%">
                    </label>
                    <label for="">
                        <input type="email" name="email" placeholder="ایمیل شما: " required="">
                    </label>
                        <input type="hidden" name="{{$parent}}" value="{{$parent_id}}">
                        <label for="">
                        <textarea name="body" id="" rows="3" placeholder="نظر شما: " required=""></textarea>
                         </label>
                        <button type="submit" id="btn-course-comment-submit" class="comments-course-form-validate-btn">
                            ارسال
                        </button>                    @else
                        <input type="hidden" name="{{$parent}}" value="{{$parent_id}}">
                        <textarea class="column one" name="body" id="" rows="6" placeholder="نظر شما ...">
                                  </textarea>
{{--                        <button type="submit" id="btn-course-comment-submit" class="comments-course-form-validate-btn">--}}

{{--                        </button>--}}
                        <button type="submit" id="btn-course-comment-submit" class="comments-course-form-validate-btn">
                            ارسال
                        </button>
{{--                        <button type="submit" id="buy-course" class="btn_1 rounded full-width add_top_60"> ارسال نظر</button>--}}
                    @endguest
                </form>
<br>
