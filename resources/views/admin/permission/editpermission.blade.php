@component('admin.layouts.content',['title'=>' ویرایش دسترسی  '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.permissions.index')}}">مدیریت دسترسی ها</a></li>
        <li class="breadcrumb-item"><a>ویرایش دسترسی </a></li>
    @endslot


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ویرایش دسترسی </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.permissions.update',$permission->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('patch')
            <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نام دسترسی</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputEmail3"
                               placeholder="نام دسترسی را وارد کنید" value="{{$permission->name}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">توضیح دسترسی</label>

                    <div class="col-sm-10">
                        <textarea name="label" class="form-control" id="" cols="30" rows="10">{{$permission->label}}</textarea>
                    </div>
                </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ویرایش</button>
                <a href="{{route('admin.permissions.index')}}" class="btn btn-default">لغو</a>
            </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
