@component('admin.layouts.content',['title'=>' مدیریت گروه های دسترسی  '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت گروه های دسترسی</a></li>
    @endslot
    <div class="card">
        <div class="card-header ">


            <div class="card-tools ">
                <div class="input-group input-group-sm ">
                    <div class="d-flex align-items-center">
                        @if(request('search'))
                            <a href="{{route('admin.roles.index')}}" class="btn btn-outline-danger  ml-2">بازگشت
                            </a>
                        @endif

                        <a href="{{route('admin.roles.create')}}" class="btn btn-outline-info  ml-2">ساخت دسترسی
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

                    <th>نام گروه</th>

                    <th> توضیح گروه</th>
                    <th>اقدامات</th>
                </tr>
                @foreach($roles as $role)

                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->label}}</td>


                        <td class="d-flex">
                            {{--                            @can('user',$user)--}}
                            <a href="{{route('admin.roles.edit',$role->id)}}"
                               class="btn btn-primary">ویرایش</a>
                            <form method="post" action="{{route('admin.roles.destroy',$role->id)}}" id="{{$role->id}}">
                                @csrf
                                @method('delete')
                            </form>
                            <a href="#"
                               class="btn btn-danger mr-2"
                               onclick="document.getElementById('{{$role->id}}').submit()">حذف</a>
                            {{--                            @endcan--}}


                        </td>
                    </tr>

                @endforeach


                </tbody>

            </table>

            {{$roles->render()}}
        </div>
        <!-- /.card-body -->
    </div>
@endcomponent

