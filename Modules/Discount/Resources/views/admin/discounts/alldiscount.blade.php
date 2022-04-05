@component('admin.layouts.content',['title'=>' مدیریت تخفیفات '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت تخفیفات </a></li>
    @endslot
    <div class="card">
        <div class="card-header ">


            <div class="card-tools ">
                <div class="input-group input-group-sm ">
                    <div class="d-flex align-items-center">
                        @if(request('search'))
                            <a href="{{route('admin.discounts.index')}}" class="btn btn-outline-danger  ml-2">بازگشت
                            </a>
                        @endif

                        <a href="{{route('admin.discounts.create')}}" class="btn btn-outline-info  ml-2">ساخت کد تخفیف
                            جدید</a>
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

                    <th> عنوان کد</th>

                    <th> درصد تخفیف</th>
                    <th> مدت زمان</th>
                    <th> کاربران مجاز</th>
                    <th> محصولات مورد نظر</th>
                    <th> دسته های مورد نظر</th>
                    <th>اقدامات</th>
                </tr>
                @foreach($discounts as $discount)

                    <tr>
                        <td>{{$discount->code}}</td>
                        <td>{{$discount->percent}}</td>
                        <td>{{jdate($discount->expired_at)}}</td>
                        <td>{{$discount->users->count() ? $discount->users->pluck('name')->join(',') : 'همه ی کاربران'}}</td>
                        <td>{{$discount->products->count() ? $discount->products->pluck('title')->join(',') : 'همه ی محصولات'}}</td>
                        <td>{{$discount->categories->count() ? $discount->categories->pluck('name')->join(',') : 'همه ی دسته ها'}}</td>


                        <td class="d-flex">
                            {{--                            @can('user',$user)--}}
                            <a href="{{route('admin.discounts.edit',$discount->id)}}"
                               class="btn btn-primary">ویرایش</a>
                            <form method="post" action="{{route('admin.discounts.destroy',$discount->id)}}"
                                  id="{{$discount->id}}">
                                @csrf
                                @method('delete')
                            </form>
                            <a href="#"
                               class="btn btn-danger mr-2"
                               onclick="document.getElementById('{{$discount->id}}').submit()">حذف</a>
                            {{--                            @endcan--}}


                        </td>
                    </tr>

                @endforeach


                </tbody>

            </table>

            {{$discounts->render()}}
        </div>
        <!-- /.card-body -->
    </div>
@endcomponent

