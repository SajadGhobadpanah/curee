@extends('profile.index')


@section('profileindex')

    <div class="row">

       <h5>{{auth()->user()->name}} عزیز به قسمت پروفایل کاربری خود خوش آمدید</h5>

    </div>

@endsection
