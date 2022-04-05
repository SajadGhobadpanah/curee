@component('admin.layouts.content',['title'=>' مدیریت  جزییات سفارش '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت جزییات سفارش</a></li>
    @endslot
    <div class="card">
        <div class="card-header ">
            <h3 class="card-title"> جدول جزییات سفارش
            </h3>

            <div class="card-tools ">
                <div class="input-group input-group-sm ">
                    <div class="d-flex align-items-center">
                        @if(request('search'))
                            <a href="{{route('admin.orders.index'). "?type=$order->status"}}"
                               class="btn btn-outline-danger  ml-2">بازگشت
                            </a>
                        @endif


                        <form action="" class="d-flex">
                            <input type="text" name="search" class="form-control float-right "
                                   placeholder="جستجو" value="{{request('search')}}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <tbody>
                <tr>

                <th> شماره محصول</th>

                <th> عنوان محصول</th>
                <th> تعداد سفارش</th>
                <th> قیمت نهایی</th>

                {{--                <th>اقدامات</th>--}}
            </tr>
            @foreach($orders as $order)

                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->title}}</td>
                    <td>{{$order->pivot->quantity}}</td>
                    <td>{{$order->pivot->quantity * $order->price}}</td>

                    {{--                   <td class="d-flex">--}}
                    {{--                        --}}{{--                            @can('user',$user)--}}
                    {{--                        <a href="{{route('profile.orders.detail',$order->id)}}"--}}
                    {{--                           class="btn btn-primary">جزییات سفارش</a>--}}
                    {{--                        <form method="post" action="" id="">--}}

                    {{--                        </form>--}}


                    {{--                    </td>--}}
                </tr>

            @endforeach

            {{$orders->render()}}
            </tbody>

        </table>


    </div>


@endcomponent

