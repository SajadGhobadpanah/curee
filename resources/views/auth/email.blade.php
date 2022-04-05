@extends('layouts.content')
@section('title')

    بازیابی رمز
@endsection
@section('index')



    <div class="col-md-8">
        <div class="card">
            <div class="card-header" style="background: #86b8e1">{{ __('بازیابی رمز عبور') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        لینک بازیابی رمز برای ایمیل شما ارسال شد!

                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-md-12 col-form-label text-md-start">{{ __('ایمیل') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email"
                                   class="text-md-start form-control " name="email"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>


                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-outline-blu">
                                {{ __('ارسال لینک بازیابی رمز عبور') }}
                            </button>
                        </div>
                    </div>
                </form>
                @include('layouts.errors')
            </div>

        </div>
    </div>

@endsection
