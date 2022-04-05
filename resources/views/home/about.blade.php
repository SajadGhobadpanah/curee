@include('layouts.header')
@include('layouts.navbar')

<div class="container my-3">
    <div class="row">
        <div class="col-md-10">
            @foreach($abouts as $about)
                <p class="text-justify">{!! $about->about !!}</p>
            @endforeach
        </div>
    </div>
</div>

@include('layouts.footer')
