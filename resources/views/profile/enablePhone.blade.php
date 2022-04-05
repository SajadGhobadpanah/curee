@extends('profile.index')


@section('profileindex')
    <div class="col-md-12">
        <div class="card p-3">

            <div class="card-header" style="background: #86b8e1">

                فعال سازی شماره تلفن
            </div>

            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <select name="type" id="" class="form-control">

                        @foreach(config('twoFactor.types') as $key => $item)
                            <option
                                value="{{$key}}" {{old('type' == $key) || auth()->user()->hasTwoFactor($key)   ? 'selected' : ''}}>{{$item}}</option>
                        @endforeach

                    </select><br>

                    <input type="text" name="phone" class="form-control"
                           placeholder="شماره تلفن خود را وارد کنید..."
                           value="{{ auth()->user()->phone}}"><br>

                    <button type="submit" class="btn btn-outline-primary">ثبت</button>
                </form>

                @include('layouts.errors')
            </div>
        </div>
    </div>
@endsection
