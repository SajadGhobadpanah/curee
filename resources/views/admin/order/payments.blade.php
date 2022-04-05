@component('admin.layouts.content',['title'=>' مدیریت  پرداخت های سفارش '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت سفارشات</a></li>
    @endslot
    <div class="card">
        <div class="card-header ">
            <h3 class="card-title"> جدول پرداخت های سفارش
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

                    <th>کد پرداخت</th>
                    <th>شماره پرداخت</th>

                    <th>  وضعیت پرداخت</th>
                    <th>  زمان ثبت پرداخت</th>


{{--                    <th> اقدامات</th>--}}
                </tr>
                @foreach($orders as $order)

                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->res_number}}</td>
                        <td>{{$order->status == 0 ? 'پرداخت ناموفق' : 'پرداخت موفق'}}</td>

                        <td>{{jdate($order->created_at)}}</td>


{{--                        <td class="d-flex">--}}
{{--                            --}}{{--                            @can('user',$user)--}}
{{--                            <a href="{{route('admin.orders.edit',$order->id)}}"--}}
{{--                               class="btn btn-primary">ویرایش</a>--}}
{{--                            <form method="post" action="{{route('admin.orders.destroy',$order->id)}}"--}}
{{--                                  id="{{$order->id}}">--}}
{{--                                @csrf--}}
{{--                                @method('delete')--}}
{{--                            </form>--}}
{{--                            <a href="#"--}}
{{--                               class="btn btn-danger mr-2"--}}
{{--                               onclick="document.getElementById('{{$order->id}}').submit()">حذف</a>--}}
{{--                            --}}{{--                            @endcan--}}

{{--                            <a href="{{route('admin.orders.show',$order->id)}}"--}}

{{--                        </td>--}}
                    </tr>

                @endforeach


                </tbody>

            </table>

            {{$orders->render()}}
        </div>
        <!-- /.card-body -->
    </div>
@endcomponent

