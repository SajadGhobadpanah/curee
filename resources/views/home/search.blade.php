@include('layouts.header')
@include('layouts.navbar')
@include('layouts.sidebar')

    <div class="col-md-8 mr-2">
        <div class="row">

            <h3>نتایج جستجو برای <span class="text text-danger">{{request('search')}}</span></h3>

                @if($articles)
                @foreach($articles as $article)
                    <div class="col-md-6 my-2">
                        <div class="card p-2">
                            <div class="card-header">

                                {{$article->title}}
                            </div>

                            <div class="card-body">
                                <img src="{{$article->image}}" alt="" width="100%">

                            </div>

                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="{{route('article.single',$article->id)}}" class="btn btn-outline-blu text-center">ادامه
                                    مطلب...</a>

                                <span style="float: left">   بازدید: {{$article->view_count}}</span>
                            </div>

                        </div>
                    </div>

                @endforeach

                @else

                    <span> چیزی یافت نشد </span>
                    @endif

        </div>
    </div>


    </div>
