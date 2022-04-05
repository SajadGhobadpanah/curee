@component('admin.layouts.content',['title'=>' ویرایش سفارش  '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.orders.index',['type'=>'unpaid'])}}">مدیریت
                سفارشات </a></li>
        <li class="breadcrumb-item"><a>ویرایش سفارش </a></li>
    @endslot


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ویرایش سفارش </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.orders.update',$order->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('patch')
            <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">شماره سفارش</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputEmail3"
                               disabled value="{{$order->id}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">هزینه سفارش</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputEmail3"
                               disabled value="{{$order->price}}">
                    </div>
                </div>
                <div class="col-sm-10">
                <select name="status" class="form-control">

                        <option
                            value="unpaid" {{ old('status' , $order->status) == 'unpaid' ? 'selected' : '' }}>
                            پرداخت نشده
                        </option>
                        <option value="paid" {{ old('status' , $order->status) == 'paid' ? 'selected' : '' }}>
                            پرداخت شده
                        </option>
                        <option
                            value="preparation" {{ old('status' , $order->status) == 'prepration' ? 'selected' : '' }}>
                            در حال پردازش
                        </option>
                        <option
                            value="posted" {{ old('status' , $order->status) == 'posted' ? 'selected' : '' }}>
                           ارسال شده
                        </option>
                        <option
                            value="received" {{ old('status' , $order->status) == 'reciived' ? 'selected' : '' }}>
                            دریافت شده
                        </option>
                        <option
                            value="canceled" {{ old('status' , $order->status) == 'canceled' ? 'selected' : '' }}>
                            کنسل شده
                        </option>

                </select>
            </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">کد پیگیری</label>
                <div class="col-sm-10">

                    <input type="text" name="tracking_serial" class="form-control" id="inputPassword3"
                           placeholder="کد پیگیری را وارد کنید"
                           value="{{ old('serial_number', $order->serial_number )}}">
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ویرایش</button>

            </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
