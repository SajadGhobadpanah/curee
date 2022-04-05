@extends('layouts.content')
@section('title')

    تایید رمز عبور
@endsection
@section('index')

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('تایید رمزعبور') }}</div>

            <div class="card-body">
                {{ __('لطفا ابتدا رمز عبور خود را دوباره وارد کنید!') }}

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="password"
                               class="col-md-12 col-form-label text-md-start">{{ __('رمز عبور') }}</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required
                                   autocomplete="current-password">


                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('تایید رمز عبور') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('فراموشی رمز') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>

                @include('layouts.errors')
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
