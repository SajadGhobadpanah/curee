@extends('layouts.content')
@section('title')

    ورود
@endsection
@section('index')

    <div class="col-md-8">
        <div class="card">

            <div class="card-header" style="background: #86b8e1">

                تایید کد
            </div>

            <div class="card-body">
                <form action="" method="post">
                    @csrf

                    <input type="text" name="code" class="form-control "
                           placeholder="کد دریافتی را در این قسمت وارد کنید...">

                    <br>

                    <button type="submit" class="btn btn-primary">بررسی</button>
                </form>

                @include('layouts.errors')
            </div>
        </div>
    </div>

@endsection
