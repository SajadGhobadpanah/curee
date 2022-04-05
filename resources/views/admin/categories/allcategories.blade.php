@component('admin.layouts.content',['title'=>' مدیریت دسته بندی ها '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت دسته بندی ها</a></li>
    @endslot
    <div class="card">
        <div class="card-header ">


            <div class="card-tools ">

                <div class="card-tools d-flex ">

                    @if(request('search'))
                        <a href="{{route('admin.categories.index')}}" class="btn btn-outline-danger  ml-2">بازگشت
                        </a>
                    @endif

                    <a href="{{route('admin.categories.create')}}" class="btn btn-outline-info ذفد-سپ  ml-2">ساخت دسته
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
            <!-- /.card-header -->
            <div class="card-body table-responsive p-3">

                @include('admin.categories.layout',['categories'=>$categories])

            </div>
            <!-- /.card-body -->
        </div>
@endcomponent

