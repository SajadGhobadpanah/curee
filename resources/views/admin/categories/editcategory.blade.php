@component('admin.layouts.content',['title'=>' ویرایش دسته  '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.categories.index')}}">مدیریت دسته ها</a></li>
        <li class="breadcrumb-item"><a>ویرایش دسته </a></li>
    @endslot


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ویرایش دسته </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.categories.update',$category->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('patch')
            <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نام دسته</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputEmail3"
                               placeholder="نام دسته را وارد کنید" value="{{$category->name}}">
                    </div>
                </div>

                @if($category->parent !=0)
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">نام والد</label>

                        @php

                            $find=\App\Models\Category::find($category->parent);
                        @endphp

                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$find->name}}"
                                   id="inputEmail3"
                                   disabled>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">تغییر والد</label>

                        <select name="parent" id="" class="form-control">
                            @foreach(\App\Models\Category::where('parent',0)->get() as $cat)

                                <option value="{{$cat->id}}">{{$cat->name}}</option>


                            @endforeach
                        </select>

                    </div>

@endif
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش</button>
                        <a href="{{route('admin.categories.index')}}" class="btn btn-default">لغو</a>
                    </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
