@component('admin.layouts.content',['title'=>' مدیریت کاربران '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت کاربران</a></li>
    @endslot
    <div class="card">
        <div class="card-header ">

            <div class="card-tools ">
                <div class="input-group input-group-sm ">
                    <div class="d-flex align-items-center">
                        @if(request('search') || request('admin'))
                            <a href="{{route('admin.users.index')}}" class="btn btn-outline-danger  ml-2">بازگشت
                            </a>
                        @endif
                        <a href="{{request()->fullUrlWithQuery(['admin'=>1])}}" class="btn btn-outline-info  ml-2">کاربران
                            مدیر</a>
                        <a href="{{route('admin.users.create')}}" class="btn btn-outline-info  ml-2">ساخت کاربر جدید</a>
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
                    <th>شماره کاربر</th>
                    <th>نام کاربر</th>
                    <th>تاریخ ثبت نام کاربر</th>
                    <th> وضعیت ایمیل</th>
                    <th>اقدامات</th>
                </tr>
                @foreach($users as $user)

                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{jdate($user->created_at)->format('%B %d، %Y')}}</td>
                        <td>
                            @if($user->email_verified_at)

                                <span class="badge badge-success">تایید شده</span>

                            @else
                                <span class="badge badge-danger">تایید نشده</span>

                            @endif


                        </td>
                        <td class="d-flex">
                            {{--                            @can('user',$user)--}}
                            <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary">ویرایش</a>
                            {{--                            @endcan--}}
                            <form action="{{route('admin.users.destroy',$user->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">حذف</button>
                            </form>
                            @if($user->is_staff)
                                <a href="{{route('admin.createpermission',$user->id)}}" class="btn btn-warning mr-2">اعمال دسترسی</a>
                            @endif
                        </td>
                    </tr>

                @endforeach


                </tbody>

            </table>

            {{$users->render()}}
        </div>
        <!-- /.card-body -->
    </div>
@endcomponent

