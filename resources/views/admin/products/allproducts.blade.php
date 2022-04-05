@component('admin.layouts.content',['title'=>' مدیریت  محصولات '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت محصولات</a></li>
    @endslot
    <div class="card">
        <div class="card-header ">


            <div class="card-tools ">
                <div class="input-group input-group-sm ">
                    <div class="d-flex align-items-center">
                        @if(request('search'))
                            <a href="{{route('admin.products.index')}}" class="btn btn-outline-danger  ml-2">بازگشت
                            </a>
                        @endif

                        <a href="{{route('admin.products.create')}}" class="btn btn-outline-info  ml-2">ساخت محصول
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

                    <th>شماره محصول</th>
                    <th>عنوان محصول</th>
                    <th>قیمت محصول</th>
                    <th>موجودی محصول</th>
                    <th>درصد تخفیف</th>


                    <th>اقدامات</th>
                </tr>
                @foreach($products as $product)

                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->inventory}}</td>
                        <td>{{$product->percent}}</td>


                        <td class="d-flex">
                            {{--                            @can('user',$user)--}}
                            <a href="{{route('admin.products.edit',$product->id)}}"
                               class="btn btn-primary">ویرایش</a>
                            <form method="post" action="{{route('admin.products.destroy',$product->id)}}"
                                  id="{{$product->id}}">
                                @csrf
                                @method('delete')
                            </form>
                            <a href="#"
                               class="btn btn-danger mx-2"
                               onclick="document.getElementById('{{$product->id}}').submit()">حذف</a>
                            {{--                            @endcan--}}

                            <a href="{{route('admin.product.gallery.index',$product->id)}}"
                               class="btn btn-warning">گالری تصاویر</a>
                        </td>
                    </tr>

                @endforeach


                </tbody>

            </table>

            {{$products->render()}}
        </div>
        <!-- /.card-body -->
    </div>
@endcomponent

