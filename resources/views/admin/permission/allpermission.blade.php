@component('admin.layouts.content',['title'=>' مدیریت دسترسی ها '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت دسترسی ها</a></li>
    @endslot
    <div class="card">
        <div class="card-header ">

            <div class="card-tools ">
                <div class="input-group input-group-sm ">
                    <div class="d-flex align-items-center">
                        @if(request('search'))
                            <a href="{{route('admin.permissions.index')}}" class="btn btn-outline-danger  ml-2">بازگشت
                            </a>
                        @endif

                        <a href="{{route('admin.permissions.create')}}" class="btn btn-outline-info  ml-2">ساخت دسترسی
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

                    <th>نام دسترسی</th>

                    <th> توضیح دسترسی</th>
                    <th>اقدامات</th>
                </tr>
                @foreach($permissions as $permission)

                    <tr>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->label}}</td>


                        <td class="d-flex">
                            {{--                            @can('user',$user)--}}
                            <a href="{{route('admin.permissions.edit',$permission->id)}}"
                               class="btn btn-primary">ویرایش</a>
                            <form method="post" action="{{route('admin.permissions.destroy',$permission->id)}}" id="{{$permission->id}}">
                                @csrf
                                @method('delete')
                            </form>
                            <a href="#"
                               class="btn btn-danger mr-2"
                               onclick="document.getElementById('{{$permission->id}}').submit()">حذف</a>
                            {{--                            @endcan--}}


                        </td>
                    </tr>

                @endforeach


                </tbody>

            </table>

            {{$permissions->render()}}
        </div>
        <!-- /.card-body -->
    </div>
@endcomponent

