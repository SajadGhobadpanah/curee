@extends('layouts.content')
@section('title')

   ثبت نام
@endsection
@section('index')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: #86b8e1">{{ __('ثبت نام') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-12 col-form-label text-md-start">{{ __('نام کاربری') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label text-md-start">{{ __('ایمیل') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="text-md-start form-control" name="email" value="{{ old('email') }}" required autocomplete="email">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-12 col-form-label text-md-start">{{ __('شماره تلفن') }}</label>

                            <div class="col-md-12">
                                <input id="phone" type="text" class="text-md-start form-control" name="phone" value="{{ old('phone') }}" required autocomplete="email">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-12 col-form-label text-md-start">{{ __('رمز عبور') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password">


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-12 col-form-label text-md-start">{{ __('تکرار رمز عبور ') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-outline-blu">
                                    {{ __('ثبت نام') }}
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
