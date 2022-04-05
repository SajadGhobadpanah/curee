@extends('profile.index')


@section('profileindex')

    <div class="col-md-12">
        <div class="card p-3">

            <div class="card-header" style="background: #86b8e1">

                تایید کد
            </div>

            <div class="card-body">
                <form action="" method="post">
                    @csrf

                    <input type="text" name="code" class="form-control @error('code')  is-invalid  @enderror"
                           placeholder="کد دریافتی را در این قسمت وارد کنید...">
                    @error('code')

                    <span class="invalid-feedback"></span>
                    @enderror
                    <br>

                    <button type="submit" class="btn btn-primary">بررسی</button>
                </form>

                @include('layouts.errors')
            </div>
        </div>
    </div>

@endsection
