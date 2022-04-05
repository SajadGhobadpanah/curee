@component('admin.layouts.content',['title'=>' مدیریت درباره ما   '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a> درباره ما </a></li>
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
        @foreach($abouts as $about)
            <form action="{{route('admin.about.update',$about->id)}}" method="post" class="form-horizontal">
                @csrf
                @method('PATCH')
                <div class="card-body">


                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">متن </label>

                        <div class="col-sm-10">
                        <textarea name="about" class="form-control" id="description" cols="30"
                                  rows="10">{{$about->about}}</textarea>
                        </div>

                    </div>

                    <button class="btn btn-primary">ذخیره</button>
                </div>

        @endforeach
    </div>
    </form>

    @include('layouts.errors')

    </div>
@endcomponent
