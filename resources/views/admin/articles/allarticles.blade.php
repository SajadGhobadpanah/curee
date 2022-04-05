@component('admin.layouts.content',['title'=>' مدیریت مقالات  '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت مقالات</a></li>
    @endslot
    <div class="card">
        <div class="card-header ">


            <div class="card-tools ">
                <div class="input-group input-group-sm ">
                    <div class="d-flex align-items-center">
                        @if(request('search'))
                            <a href="{{route('admin.articles.index')}}" class="btn btn-outline-danger  ml-2">بازگشت
                            </a>
                        @endif

                        <a href="{{route('admin.articles.create')}}" class="btn btn-outline-info  ml-2">ساخت مقاله
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

                    <th>عنوان مقاله</th>


                    <th>اقدامات</th>
                </tr>
                @foreach($articles as $article)

                    <tr>
                        <td>{{$article->title}}</td>


                        <td class="d-flex">
                            {{--                            @can('user',$user)--}}
                            <a href="{{route('admin.articles.edit',$article->id)}}"
                               class="btn btn-primary">ویرایش</a>
                            <form method="post" action="{{route('admin.articles.destroy',$article->id)}}"
                                  id="{{$article->id}}">
                                @csrf
                                @method('delete')
                            </form>
                            <a href="#"
                               class="btn btn-danger mr-2"
                               onclick="document.getElementById('{{$article->id}}').submit()">حذف</a>
                            {{--                            @endcan--}}


                        </td>
                    </tr>

                @endforeach


                </tbody>

            </table>

            {{$articles->render()}}
        </div>
        <!-- /.card-body -->
    </div>
@endcomponent

