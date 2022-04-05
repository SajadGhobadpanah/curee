@component('admin.layouts.content',['title'=>' ویرایش گروه دسترسی  '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.roles.index')}}">مدیریت گروه ها</a></li>
        <li class="breadcrumb-item"><a>ویرایش گروه دسترسی</a></li>
    @endslot


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ویرایش گروه </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.roles.update',$role->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('patch')

            <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نام گروه</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputEmail3"
                               placeholder="نام گروه را وارد کنید" value="{{$role->name}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">توضیح گروه</label>

                    <div class="col-sm-10">
                        <textarea name="label" class="form-control" id="" cols="30"
                                  rows="10">{{$role->label}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"> لیست دسترسی ها</label>

                    <select name="permissions[]" id="" class="form-control" multiple>
                        @foreach(\App\Models\Permission::all() as $permission)

                            <option
                                value="{{$permission->id}}" {{in_array($permission->id,$role->permissions->pluck('id')->toArray()) ? 'selected' : ''}}>{{$permission->name}}</option>
                        @endforeach

                    </select>


                </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ویرایش</button>
                <button type="submit" class="btn btn-default">لغو</button>
            </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
