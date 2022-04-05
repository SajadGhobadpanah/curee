@component('admin.layouts.content',['title'=>' ویرایش کاربر  '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.users.index')}}">مدیریت کاربران</a></li>
        <li class="breadcrumb-item"><a>ویرایش کاربر </a></li>
    @endslot

    @slot('script')
        <script>

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
            <h3 class="card-title">فرم ویرایش کاربر </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.users.update',$user->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('patch')
            <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نام کاربری</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="inputEmail3"
                               placeholder="نام کاربری را وارد کنید" value="{{$user->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ایمیل </label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="inputEmail3"
                               placeholder="ایمیل  را وارد کنید" value="{{$user->email}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">پسورد</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="inputPassword3"
                               placeholder="پسورد را وارد کنید">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"> تکرار پسورد</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password_confirmation"
                               placeholder="تکرار پسورد را وارد کنید  ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label"> تصویر کاربر</label>
                </div>
                <div class="input-group">

                    <input type="text" id="image_label" class="form-control" name="image"
                           aria-label="Image" aria-describedby="button-image" value="{{$user->image}}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب تصویر
                        </button>
                    </div>
                </div>

                <img src="{{$user->image}}" alt="" width="300px">
                <br>

                @if(!$user->hasVerifiedEmail())

                    <div class="form-group">
                        <label for="input1" class="control-label"> ایمیل فعال</label>

                        <input type="checkbox" name="emailcheck" id="input1">


                    </div>

                    <div class="form-group">
                        <label for="input1" class="control-label"> کاربر مدیر</label>

                        <input type="checkbox" name="is_staff" id="input1">


                    </div>
            @endif
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
