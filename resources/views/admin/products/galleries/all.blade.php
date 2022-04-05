@component('admin.layouts.content',['title'=>' مدیریت گالری محصولات '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت گالری محصولات</a></li>
    @endslot
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">


                    <div class="card-tools d-flex">
                        <div class="btn-group-sm mr-1">
                            <a href="{{ route('admin.product.gallery.create' , ['product' => $product->id]) }}"
                               class="btn btn-info">ثبت تصویر جدید</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        @foreach($products as $image)
                            <div class="col-sm-2">
                                <a href="{{ url($image['image']) }}">
                                    <img src="{{ $image->image }}" class="img-fluid mb-2"
                                         alt="{{ $image->alt }}">
                                </a>
                                <form
                                    action="{{ route('admin.product.gallery.destroy' , ['product' => $product->id , 'gallery' => $image->id]) }}"
                                    id="{{$image->id}}" method="post">
                                    @method('delete')
                                    @csrf
                                </form>
                                <a href="{{ route('admin.product.gallery.edit' , ['product' => $product->id , 'gallery' => $image->id]) }}"
                                   class="btn btn-sm btn-primary">ویرایش</a>
                                <a href="#" class="btn btn-sm btn-danger"
                                   onclick="document.getElementById('{{$image->id}}').submit()">حذف</a>
                            </div>
                        @endforeach


                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{--                    {{ $images->render() }}--}}
                </div>
            </div>

@endcomponent
