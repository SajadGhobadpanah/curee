@include('layouts.header')
@include('layouts.navbar')

@section('script')
    <script>
        $('#sendComment').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            let parent_id = button.data('id');

            var modal = $(this)
            modal.find('input[name="parent_id"]').val(parent_id)

        });

    </script>
@endsection

@auth
    <div class="modal fade" id="sendComment">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ارسال نظر</h5>
                    <button type="button" class="close mr-auto ml-0" data-bs-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('storecomment')}}" method="post" id="sendCommentForm">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="commentable_id" value="{{ $product->id }}">
                        <input type="hidden" name="commentable_type" value="{{ get_class($product) }}">
                        <input type="hidden" name="parent_id" value="0">

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">پیام دیدگاه:</label>
                            <textarea name="comment" class="form-control" id="message-text"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
                        <button type="submit" class="btn btn-primary">ارسال نظر</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endauth

<div class="container">
    <div class="col-md-10 mr-2">
        <h4 class="text-center">{{$product->title}}</h4><br>
        <img src="/images/7.jpg" alt="" width="100%">
        <br>
        <p class="text-justify my-3">{!! $product->content !!}</p>


        <div class="text-center my-3">
            @if($product->percent)
                <sapn
                    style="background: #d90b31;color: #fff; padding: 2px;border-radius: 30%">{{$product->percent}} </sapn>
                <span>%</span>
            @endif
            <br>
            <div class="mt-3">
                <span class="py-3">{{$product->price}}</span><br><br>

                <br>
                @if($product->attributes->count())
                    <h5>ویژگی ها</h5>
                    @foreach($product->attributes as $attr)

                        <span class="text">{{$attr->name}}</span>

                        @foreach($attr->values as $val)

                            <span class="text-danger">{{$val->value}}</span><br>
                        @endforeach<br>
                    @endforeach
                @endif
                <br>
                @if($product->galleries->count())

                <h5>تصاویر</h5>
                    @foreach($product->galleries as $gal)
                        <a href="{{url($gal->image)}}" target="_blank">
                            <img class="img-fluid mx-1" src="{{$gal->image}}" alt="" width="100px">
                        </a>
                    @endforeach <br>
                    <br>
                @endif
                @if(\App\Helper\Cart\Cart::count($product) < $product->inventory)
                    <a href="{{route('addToCart',$product->id)}}" class="btn btn-outline-blu"> افزودن به سید
                        خرید</a>
                @else

                    <span class="alert-primary alert">این محصول موجود نمیباشد!</span>

                @endif
            </div>
        </div>


        <div class="card p-3 text-center mb-3  mt-4">

            @guest
                <div class="alert alert-danger">برای ثبت نظر لطفا وارد سایت شوید.</div>
            @endguest
            <div class="d-sm-flex d-block align-items-center justify-content-between align-content-center">
                <h4 class="mt-4 mb-4">بخش نظرات</h4>
                @auth
                    <span class="btn btn-sm btn-outline-blu mb-4 mb-sm-0" data-bs-toggle="modal"
                          data-bs-target="#sendComment"
                          data-id="0">ثبت نظر جدید</span>
                @endauth
            </div>

        </div>

        @include('layouts.comment',['comments'=>$product->comments()->where('parent_id',0)->where('approved',1)->get()])


    </div>
</div>
</div>
</div>

@include('layouts.errors')

@include('layouts.footer')
