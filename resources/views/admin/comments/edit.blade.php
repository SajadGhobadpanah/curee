@component('admin.layouts.content',['title'=>' ویرایش و تایید نظر  '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.permissions.index')}}">مدیریت نظرات </a></li>
        <li class="breadcrumb-item"><a>ویرایش نظر </a></li>
    @endslot


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ویرایش نظر </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.updatecomment',$comment->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('put')
            <div class="card-body">


                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"> متن نظر</label>

                    <div class="col-sm-10">
                        <textarea name="comment" class="form-control" id="" cols="30"
                                  rows="10">{{$comment->comment}}</textarea>
                    </div>
                </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info"> ویرایش و تایید</button>
                <a href="{{route('admin.permissions.index')}}" class="btn btn-default">لغو</a>
            </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
