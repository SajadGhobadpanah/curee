@include('layouts.header')
@section('title')
    محصولات
@endsection
@include('layouts.navbar')


<div class="container">


    <div class="row mb-4 mt-4">
        @foreach($articles as $article)
            <div class="col-md-3 my-2">
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

    </div>

</div>


@include('layouts.footer')



