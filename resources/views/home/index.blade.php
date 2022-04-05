@extends('layouts.content')
@section('title')

    صفحه ی اصلی
@endsection
@section('index')
    <div class="col-md-8 mr-2">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach(\App\Models\Slide::all() as $slide)
                    <a href="{{route('about')}}">
                        <div class="carousel-item active">
                            <img src="{{$slide->image}}" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">

                                <p style="color: black">{{$slide->alt}}</p>
                            </div>
                        </div>
                    </a>

                @endforeach

            </div>

        </div>
        <br>

        <h4 class="text-center">جدیدترین اخبار پزشکی</h4>


        <div class="row my-3 py-3 mb-3">
            @foreach(\App\Models\News::latest()->paginate(12) as $news)
                <div class="col-md-6  my-4">
                    <a href="{{route('newspage',$news->id)}}">
                        <img src="{{$news->image}}" alt="" class="img-fluid  " style="width: 100% ; height: 100%">
                        <br>
                        <div class="d-flex justify-content-between">
                            <span class="py-3">{{$news->title}} </span>
                            <span class="py-3">{{jdate($news->created_at)->ago()}} </span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>


    </div>
    </div>
    </div>
    </section>


@endsection
