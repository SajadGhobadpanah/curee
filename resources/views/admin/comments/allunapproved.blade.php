@component('admin.layouts.content',['title'=>' مدیریت  نظرات تایید نشده '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت نظرات تایید نشده</a></li>
    @endslot
    <div class="card">
        <div class="card-header ">


            <div class="card-tools ">
                <div class="input-group input-group-sm ">
                    <div class="d-flex align-items-center">
                        @if(request('search'))
                            <a href="{{route('admin.unapprovedcomments')}}" class="btn btn-outline-danger  ml-2">بازگشت
                            </a>
                        @endif


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


                    <th> نام کاربر</th>
                    <th> مربوط به..</th>


                    <th>اقدامات</th>
                </tr>
                @foreach($comments as $comment)

                    <tr>
                        <td>{{$comment->user->name}}</td>
                        <td>{{$comment->commentable->title ?? 'نظر مورد نظر'}}</td>


                        <td class="d-flex">

                            <a href="{{route('admin.editcomment',$comment->id)}}"
                               class="btn btn-primary">ویرایش</a>
                            <form method="post" action="{{route('admin.deletecomment',$comment->id)}}"
                                  id="{{$comment->id}}">
                                @csrf
                                @method('delete')
                            </form>
                            <a href="#"
                               class="btn btn-danger mr-2"
                               onclick="document.getElementById('{{$comment->id}}').submit()">حذف</a>
                            {{--                            @endcan--}}


                        </td>
                    </tr>

                @endforeach


                </tbody>

            </table>

            {{$comments->render()}}
        </div>
        <!-- /.card-body -->
    </div>
@endcomponent

