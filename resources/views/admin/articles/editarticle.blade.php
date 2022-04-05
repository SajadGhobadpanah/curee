@component('admin.layouts.content',['title'=>' ویرایش مقاله  '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.articles.index')}}">مدیریت مقالات</a></li>
        <li class="breadcrumb-item"><a>ویرایش مقاله </a></li>
    @endslot

    @slot('script')
        <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>

        <script>
            CKEDITOR.replace('description', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});

            document.addEventListener("DOMContentLoaded", function () {

                document.getElementById('button-image').addEventListener('click', (event) => {
                    event.preventDefault();

                    window.open('/file-manager/fm-button', 'fm', 'width=1000,height=800');
                });
            });

            // set file link
            function fmSetLink($url) {
                document.getElementById('image_label').value = $url;
            }
        </script>

    @endslot
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ویرایش مقاله </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.articles.update',$article->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('patch')
            <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">عنوان مقاله </label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="inputEmail3"
                               placeholder="عنوان مقاله  را وارد کنید" value="{{old('title',$article->title)}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">متن مقاله</label>

                    <div class="col-sm-10">
                        <textarea name="content" class="form-control" id="description" cols="30"
                                  rows="10">{{old('content',$article->content)}}</textarea>
                    </div>
                </div>

                <label for="inputEmail3" class="col-sm-2 control-label"> تصویر شاخص</label>

                <div class="input-group">

                    <input type="text" id="image_label" class="form-control" name="image"
                           aria-label="Image" aria-describedby="button-image" value="{{$article->image}}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب تصویر
                        </button>
                    </div>


                </div>
                <img class="mt-2" src="{{$article->image}}" alt="" width="500px" height="300px">

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ویرایش</button>
                <a href="{{route('admin.articles.index')}}" class="btn btn-default">لغو</a>
            </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
