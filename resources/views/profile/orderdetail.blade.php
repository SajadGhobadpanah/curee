@extends('profile.index')


@section('profileindex')

    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <tbody>
            <tr>

                <th> شماره محصول</th>

                <th> عنوان محصول</th>
                <th> تعداد سفارش</th>
                <th> قیمت بدون تخفیف</th>

                {{--                <th>اقدامات</th>--}}
            </tr>
            @foreach($orderdetails as $order)

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

            {{$orderdetails->render()}}
            </tbody>

        </table>


    </div>

@endsection
