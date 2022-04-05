@extends('layouts.content')
@section('title')

    بازیابی رمز عبور
@endsection
@section('index')

    <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="background: #86b8e1">{{ __('بازیابی رمز عبور') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row mb-3">
                        <label for="email" class="col-md-12 col-form-label text-md-start">{{ __('ایمیل') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="text-md-start form-control " name="email"
                                   value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>


                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password"
                               class="col-md-12 col-form-label text-md-start">{{ __('رمز عبور') }}</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control " name="password" required
                                   autocomplete="new-password">

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm"
                               class="col-md-12 col-form-label text-md-start ">{{ __('تکرار رمز عبور') }}</label>

                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="text-md-start form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-outline-blu">
                                {{ __('بازیابی رمز عبور') }}
                            </button>
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
