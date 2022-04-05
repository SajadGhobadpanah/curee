@extends('profile.index')


@section('profileindex')


    <div class="col-md-12 ">
        <div class="card p-3">

            <div class="card-header text-center" style="background: #86b8e1">

                اطلاعات کاربری شما
            </div>

            <div class="card-body p-3">

                <form action="{{route('users.update',auth()->user()->id)}}" method="post" enctype="multipart/form-data">

                    @csrf
                    @method('patch')
                    <div style="width: 100%" class="text-center">
                        <img class="text-center" src="{{asset(auth()->user()->image)}}" alt="" width="200vw">
                    </div>
                    <div class="form-group">
                        <label for="">انتخاب تصویر جدید</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="row my-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">نام کاربری</label>
                                <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">ایمیل</label>
                                <input type="text" class="form-control" name="email" value="{{auth()->user()->email}}"
                                       disabled>
                            </div>


                        </div>

                        <div class="col-md-6 my-2">
                            <div class="form-group">
                                <label for="">شماره تلفن</label>
                                <input type="text" class="form-control" name="phone"
                                       value="{{auth()->user()->phone ?? 'شماره ای ثبت نشده است!'}}">
                            </div>


                        </div>

                        <div class="col-md-6 my-2">
                            <div class="form-group">
                                <label for="">تاریخ ثبت نام</label>
                                <input type="text" class="form-control" value="{{jdate(auth()->user()->created_at)}}"
                                       disabled>
                            </div>


                        </div>


                        <button type="submit" class="btn btn-primary">ویرایش</button>

                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>



@endsection
