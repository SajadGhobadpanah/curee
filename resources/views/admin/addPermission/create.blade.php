@component('admin.layouts.content',['title'=>' اعمال دسترسی برای کاربران مدیر '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item"><a>اعمال دسترسی برای کاربران مدیر</a></li>
    @endslot

    @slot('script')
        <script>
            $('#permissions').select2({
                'placeholder' : 'دسترسی مورد نظر را انتخاب کنید'
            })
            $('#roles').select2({
                'placeholder' : 'گروه مورد نظر را انتخاب کنید'
            })
        </script>
    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.storepermissios',$user->id)}}" method="post" class="form-horizontal">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"> لیست دسترسی ها</label>

                    <select name="permissions[]" id="permissions" class="form-control" multiple>
                        @foreach(\App\Models\Permission::all() as $permission)

                            <option
                                value="{{$permission->id}}" {{ in_array($permission->id , $user->permissions->pluck('id')->toArray()) ? 'selected' :''}}>{{$permission->name}}</option>
                        @endforeach

                    </select>


                </div>


                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"> لیست گروه ها</label>

                    <select name="roles[]" id="roles" class="form-control" multiple>
                        @foreach(\App\Models\Role::all() as $role)

                            <option
                                value="{{$role->id}}" {{ in_array($role->id , $user->roles->pluck('id')->toArray()) ? 'selected' :''}}>{{$role->name}}</option>
                        @endforeach

                    </select>


                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">اعمال</button>

            </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
