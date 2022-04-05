@extends('layouts.content')
@section('title')

    ورود
@endsection

@section('script')
    <script src="https://www.google.com/recaptcha/api.js?hl=fa" async defer></script>

@endsection
@section('index')

    <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="background: #86b8e1">{{ __('ورود') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-md-12 col-form-label text-md-start">{{ __('ایمیل') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email"
                                   class="text-md-start form-control " name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>


                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password"
                               class="col-md-12 col-form-label text-md-start">{{ __('رمز عبور') }}</label>

                        <div class="col-md-12">
                            <input id="password" type="password"
                                   class="form-control " name="password" required
                                   autocomplete="current-password">

                        </div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="{{env('RECAPTCAH_SITE_KEY')}}"></div>


                    <div class="row mb-3">
                        <div class="col-md-12 d-flex ">
                            <label class="form-check-label mx-2" for="remember">
                                {{ __('مرا به خاطر بسپار') }}
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>


                            </div>
                        </div>
                    </div>


                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4 ">
                            <button type="submit" class="btn btn-outline-blu px-4">
                                {{ __('ورود') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('فراموشی رمز') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <a href="{{route('register')}}" class="btn btn-outline-blu px-4">
                                {{ __('ثبت نام') }}
                            </a>
                            <a href="{{route('login.google')}}" class="btn btn-outline-blu">ورود با حساب گوگل</a>
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
