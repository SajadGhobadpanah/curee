@component('admin.layouts.content',['title'=>' ایجاد دسته جدید '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.categories.index')}}">مدیریت دسته ها</a></li>
        <li class="breadcrumb-item"><a>ایجاد دسته جدید</a></li>
    @endslot


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد دسته </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.categories.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نام دسته</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputEmail3"
                               placeholder="نام دسته را وارد کنید">
                    </div>
                </div>

                @if(request('parent'))

                    @php

                        $parent=\App\Models\Category::find(request('parent'));
                    @endphp
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">نام والد</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$parent->name}}"
                                   id="inputEmail3"
                                   disabled>
                        </div>
                    </div>
                    <input type="hidden" name="parent" value="{{$parent->id}}">


            @endif



            <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">ایجاد</button>
                    <a href="{{route('admin.categories.index')}}" class="btn btn-default">لغو</a>
                </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
