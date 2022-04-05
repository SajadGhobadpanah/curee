@extends('profile.index')


@section('profileindex')

    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <tbody>
            <tr>

                <th> شماره سفارش</th>

                <th> تاریخ ثبت</th>
                <th> وضعیت سفارش</th>
                <th> کد رهگیری</th>
                <th>اقدامات</th>
            </tr>
            @foreach($orders as $order)

                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{jdate($order->created_at)}}</td>

                    <td>

                        @switch($order->status)

                            @case('unpaid')
                            <div class="alert-danger">پرداخت نشده</div>
                            @break
                            @case('paid')
                            <div class="alert-success">پرداخت شده</div>
                            @break

                            @case('preparation')
                            در حال آماده سازی
                            @break

                            @case('posted')
                            پست شده
                            @break


                            @case('received')
                            دریافت شده
                            @break
                            @case('canceled')
                            کنسل شده
                            @break



                        @endswitch


                    </td>
                    <td>{{$order->tracking_serial ?? 'کد رهگیری  ثبت نشده است!'}}</td>
                    <td class="d-flex">
                        {{--                            @can('user',$user)--}}
                        <a href="{{route('profile.orders.detail',$order->id)}}"
                           class="btn btn-primary btn-sm ml-2">جزییات سفارش</a>
                        @if($order->status == 'unpaid')
                            <a href="{{route('profile.orders.payment',$order->id)}}" class="btn btn-secondary btn-sm ">پرداخت </a>

                        @endif
                    </td>
                </tr>

            @endforeach
            {{$orders->render()}}

            </tbody>

        </table>


    </div>

@endsection
