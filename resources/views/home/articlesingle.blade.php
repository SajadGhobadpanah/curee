@include('layouts.header')
@include('layouts.navbar')


<div class="container">
    <div class="card my-3 p-3">
        <div class="card-header">
            <img class="mb-2 img-fluid text-center " src="{{$article->image}}" alt="" width="100%" >
        </div>
        <h5>{{$article->title}}</h5><br>


        <p class="text-justify">{!! $article->content !!}</p>
    </div>
</div>


@include('layouts.footer')
