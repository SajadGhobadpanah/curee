@extends('layouts.content')
@section('title')

    تایید ایمیل
@endsection
@section('index')

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('تایید ایمیل') }}</div>

            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('   یک پیام متنی به آدرس ایمیل شما ارسال شد! ') }}
                    </div>
                @endif


                {{ __('لطفا ابتدا وارد ایمیل خود شده و پیام ارسالی از این قسمت را تایید کنید !') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">{{ __('درخواست  ایمیل فعال سازی ') }}</button>
                    .
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
