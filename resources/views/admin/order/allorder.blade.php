@component('admin.layouts.content',['title'=>' مدیریت  سفارشات '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت سفارشات</a></li>
    @endslot
    <div class="card">
        <div class="card-header ">
             @switch(request('type'))

                    @case('unpaid')
                    پرداخت نشده
                    @break

                    @case('paid')
                    پرداخت شده
                    @break
                    @case('preparation')
                    در حال پردازش
                    @break

                    @case('posted')
                    ارسال شده
                    @break

                    @case('received')
                    دریافت شده
                    @break

                    @case('canceled')
                    کنسل شده
                    @break


                @endswitch</h3>

            <div class="card-tools ">
                <div class="input-group input-group-sm ">
                    <div class="d-flex align-items-center">
                        @if(request('search'))
                            <a href="{{route('admin.orders.index',['type'=>'unpaid'])}}"
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
            <table class="table table-hover my-2">
                <tbody>
                <tr>

                    <th>شماره سفارش</th>

                    <th> نام کاربر</th>
                    <th> هزینه سفارش</th>
                    <th> شماره پیگیری پستی</th>
                    <th> زمان ثبت سفارش</th>
                    <th>اقدامات</th>
                </tr>
                @foreach($orders as $order)

                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->tracking_serial ?? 'شماره پیگیری پستی ثبت نشده است!'}}</td>
                        <td>{{jdate($order->created_at)}}</td>


                        <td class="d-flex">
                            {{--                            @can('user',$user)--}}
                            <a href="{{route('admin.orders.edit',$order->id)}}"
                               class="btn btn-primary btn-sm">ویرایش</a>
                            <form method="post" action="{{route('admin.orders.destroy',$order->id)}}"
                                  id="{{$order->id}}">
                                @csrf
                                @method('delete')
                            </form>
                            <a href="#"
                               class="btn btn-danger mr-2 btn-sm"
                               onclick="document.getElementById('{{$order->id}}').submit()">حذف</a>
                            {{--                            @endcan--}}

                            <a href="{{route('admin.orders.show',$order->id)}}"
                               class="btn btn-warning mx-2 btn-sm">مشاهده ی پرداخت ها</a>

                            <a href="{{route('admin.orders.detail',$order->id)}}"
                               class="btn btn-info  btn-sm">جزییات سفارش</a>


                        </td>
                    </tr>

                @endforeach


                </tbody>

            </table>

            {{$orders->render()}}
        </div>
        <!-- /.card-body -->
    </div>
@endcomponent

