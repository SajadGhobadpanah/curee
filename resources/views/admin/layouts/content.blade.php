@extends('admin.index')

@section('dash')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{$title}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">{{$breadcromp}}</a></li>
                        {{--                        <li class="breadcrumb-item active">داشبورد ورژن 2</li>--}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    {{$slot}}
@endsection
@section('script')

    {{$script ?? ''}}

@endsection


