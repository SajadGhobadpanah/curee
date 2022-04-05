@include('layouts.header')
@include('layouts.navbar')
<div class="text-center my-3">
<img src="{{$news->image}}" alt="" class="img-fluid" width="700px" height="200px"><br>
</div>

<div class="container">
<h5 class="">{{$news->title}}</h5><br>

    <p class="text-justify">{!! $news->content !!}</p>
</div>



@include('layouts.footer')
