@include('layouts.header')
@include('layouts.navbar')



@section('script')
    <script>
        function changeQuantity(event, id, cartName = null) {
            //
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                }
            })

            //
            $.ajax({
                type: 'POST',
                url: '/cart/quantity/change',
                data: JSON.stringify({
                    id: id,
                    quantity: event.target.value,
                    // cart : cartName,
                    _method: 'patch'
                }),
                success: function (res) {
                    location.reload();
                }
            });
        }

    </script>
@endsection




<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>سبد خرید</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                    <tr>
                        <!-- Set columns width -->
                        <th class="text-center py-3 px-4" style="min-width: 400px;">نام محصول</th>
                        <th class="text-right py-3 px-4" style="width: 150px;">قیمت واحد</th>
                        <th class="text-center py-3 px-4" style="width: 120px;">تعداد</th>
                        <th class="text-right py-3 px-4" style="width: 150px;">قیمت نهایی</th>
                        <th class="text-center align-middle py-3 px-0" style="width: 40px;">حذف<a href="#"
                                                                                                  class="shop-tooltip float-none text-light"
                                                                                                  title=""
                                                                                                  data-original-title="Clear cart"><i
                                    class="ino ion-md-trash"></i></a></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>

                        @foreach(\App\Helper\Cart\Cart::all() as $cart)

                            @if(isset($cart['product']))

                                @php

                                    $product=$cart['product'];
                                @endphp
                            @endif
                            <td class="p-4">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <a href="#" class="d-block text-dark">{{$product->title}}</a>
                                        <small>
                                            @if($product->attributes)
                                                @foreach($product->attributes as $attr)
                                                    @foreach($attr->values as $value)
                                                        <span
                                                            class="text-muted">{{$attr->name}}: </span>{{$value->value}}
                                                        &nbsp;

                                                    @endforeach
                                                @endforeach
                                            @endif
                                        </small>
                                    </div>

                                </div>
                            </td>
                            @if(!$cart['discount_percent'])
                                <td class="text-right font-weight-semibold align-middle p-4">{{$product->percent ? ($product->price - ($product->price *$product->percent/100)) : $product->price}}
                                    تومان
                                </td>

                            @else
                                <td class="text-right font-weight-semibold align-middle p-4">
                                    <del
                                        class="text-danger text-sm">{{$product->percent ? ($product->price - ($product->price *$product->percent/100)) : $product->price }}
                                        تومان
                                    </del>

                                    <span
                                        class="text-success text-sm"> {{$product->percent ? ($product->price - ($product->price *$product->percent/100) - (($product->price - ($product->price *$product->percent/100)) * $cart['discount_percent'])) : $product->price - ($product->price * $cart['discount_percent']) }}  تومان</span>

                            @endif

                            <td class="align-middle p-4">
                                <select onchange="changeQuantity(event,'{{$cart['id']}}')"
                                        class="form-control text-center">

                                    @foreach(range(1,$product->inventory) as $item)

                                        <option
                                            value="{{$item}}"{{$cart['quantity'] == $item ? 'selected' :''}}>{{$item}}</option>

                                    @endforeach
                                </select>
                            </td>


                            @if(!$cart['discount_percent'])
                                <td class="text-right font-weight-semibold align-middle p-4">
                                    {{$product->percent ? ($product->price - ($product->price * $product->percent/100 )) * $cart['quantity']  : $product->price * $cart['quantity']}}
                                    تومان
                                </td>

                            @else
                                <td class="text-right font-weight-semibold align-middle p-4">
                                    <del class="text-danger text-sm">
                                        {{$product->percent ? ($product->price - ($product->price *$product->percent/100)) * $cart['quantity'] : $product->price * $cart['quantity'] }}
                                        تومان
                                    </del>

                                    <span
                                        class="text-success text-sm"> {{$product->percent ? ($product->price - ($product->price *$product->percent/100) - (($product->price - ($product->price *$product->percent/100)) * $cart['discount_percent']))  * $cart['quantity']: ($product->price - ($product->price * $cart['discount_percent'])) * $cart['quantity'] }}  تومان</span>

                            @endif

                            <td class="text-center align-middle px-0">
                                <form action="{{route('deletecart',$cart['id'])}}" method="post"
                                      id="{{$cart['id']}}">
                                    @csrf
                                    @method('delete')
                                </form>

                                <a href="#"
                                   class="shop-tooltip close float-none text-danger"
                                   title=""
                                   data-original-title="Remove"
                                   onclick="event.preventDefault();document.getElementById('{{$cart['id']}}').submit()">×</a>
                            </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <!-- / Shopping cart table -->
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                @if(!$discount=\App\Helper\Cart\Cart::getDiscount())
                    <form action="{{route('discount.check')}}" method="post">
                        @csrf
                        <div class="mt-4">
                            <input type="text" name="code" class="form-control m-2"
                                   placeholder="کد تخفیف خود را اینجا وارد کنید!">

                            <button type="submit" class="btn btn-success">بررسی</button>
                    </form>
            </div>
            @else
                <div class="mt-3 ">
                    <div class="d-flex">
                        <span class="d-flex">   کد تخفیف شما:<span
                                class="text-sm text-success">{{$discount->code}}</span></span>
                        <form action="{{route('delete.discount')}}"
                              id="{{$discount->id}}">@csrf </form>
                        <a href="#"
                           onclick="event.preventDefault();document.getElementById('{{$discount->id}}').submit()"
                           class="btn-danger btn-sm mx-2 badge-warning">حذف </a><br>
                    </div>
                    <span>   درصد تخفیف شما:<span
                            class="text-sm text-success">{{$discount->percent}}درصد</span></span><br>

                    @php
                        $totalprice=\App\Helper\Cart\Cart::all()->sum(function ($cart){
                                     return $cart['discount_percent'] == 0
                                     ?
                                  0
                                     :

                                     ( $cart['product']->price * $cart['discount_percent']) * $cart['quantity'] ;

                            })
                    @endphp
                    <span>   سود شما از این خرید:<span
                            class="text-sm text-success">{{$totalprice}}تومان</span></span>

                </div>

            @endif

            <div class="d-flex">
                {{--                        <div class="text-right mt-4 mr-5">--}}
                {{--                            <label class="text-muted font-weight-normal m-0">Discount</label>--}}
                {{--                            <div class="text-large"><strong>$20</strong></div>--}}
                {{--                        </div>--}}
                @php
                    $totalprice=\App\Helper\Cart\Cart::all()->sum(function ($cart){
                                 return $cart['discount_percent'] == 0
                                 ?
                                    $cart['product']->percent  ?  ($cart['product']->price - ( $cart['product']->price *  $cart['product']->percent/100)) *  $cart['quantity'] :  $cart['product']->price  *  $cart['quantity']
                                 :
                                  ( $cart['product']->percent  ?   (($cart['product']->price - ( $cart['product']->price *  $cart['product']->percent/100) -( $cart['product']->price - ( $cart['product']->price *  $cart['product']->percent/100)) * $cart['discount_percent'])) * $cart['quantity']  : ($cart['product']->price -( $cart['product']->price * $cart['discount_percent'])) * $cart['quantity'] );

                        })
                @endphp

                <div class="text-right mt-4">
                    <label class="text-muted font-weight-normal m-0">قیمت کل</label>
                    <div class="text-large"><strong>{{$totalprice}}تومان </strong></div>
                </div>
            </div>
        </div>
        @include('layouts.errors')
        <div class="float-left">
            <a href="{{route('cart.payment')}}" class="btn btn-lg btn-primary mt-2">پرداخت</a>
            <a href="{{route('products')}}" class="btn btn-lg btn-danger mt-2">بازگشت</a>
        </div>

    </div>
</div>
</div>
</div>
</div>
@include('layouts.footer')


