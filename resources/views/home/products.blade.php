@include('layouts.header')
@include('layouts.navbar')
@section('title')
محصولات
@endsection
<div class="container">

    <div class="row mb-4 mt-4">
        @foreach($products as $product)
            <div class="col-md-3 my-2">
                <div class="card  ">

                    <div class="card-header text-center">
                        {{$product->title}}
                    </div>

                    <div class="card-body">
                        <img src="{{$product->image}}" alt="" width="100%">
                    </div>

                    <div class="card-footer text-center">
                        <a href="{{route('singleproduct',$product->id)}}"
                           class="btn btn-outline-blu btn-sm">{{$product->price}}</a>
                        @if($product->percent)
                            <sapn
                                style="background: #d90b31;color: #fff; padding: 2px;border-radius: 30%">{{$product->percent}} </sapn>
                            <span>%</span>
                        @endif
                    </div>

                </div>
            </div>

        @endforeach

    </div>

</div>
</div>
</div>

@include('layouts.footer')
