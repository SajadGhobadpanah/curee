<section class="mt-4">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="card p-3 mb-2">
                    <div class="card-body">


                        <form class="d-flex mb-3" action="{{route('search')}}">
                            <button type="submit" class="btn btn-outline-blu">جستجو</button>
                            <input class="form-control ms-2" type="text" name="search" placeholder="جستجو"
                                   aria-label="Search">

                        </form>
                        @if(auth()->check())

                            <span class="font-weight-bold text-danger ">{{auth()->user()->name}}</span><span> ..عزیز خوش آمدید</span>
                            <a href="{{route('profile')}}" class="btn btn-outline-blu mt-3 d-block "> پروفایل کاربری</a>

                            @if(auth()->user()->is_supervisor() || auth()->user()->is_staff())
                                <a href="{{route('admin.')}}" class="btn btn-outline-blu mt-3 d-block "> بخش مدیریت</a>
                            @endif
                            <form action="{{route('logout')}}" method="post" id="{{auth()->user()->id}}">
                                @csrf

                            </form>
                            <a href=""
                               onclick="event.preventDefault();document.getElementById('{{auth()->user()->id}}').submit()"
                               class="btn btn-danger mt-3 d-block "> خروج</a>


                        @else
                            <a href="{{route('login')}}" class="btn btn-outline-blu mt-3 d-block "> ورود به سایت</a>
                        @endif
                    </div>
                </div>
                <div class="card  mb-2">
                    <div class="card-header text-center">
                        مقالات
                    </div>
                    @foreach(\App\Models\Article::all()->take(3) as $article)
                        <div class="card-body d-flex align-items-center galeri1 position-relative">


                            <img src="{{$article->image}}" alt="" class="img-fluid galeri-img1 " width="100px"
                                 height="200px">
                            <div class="p-3">
                                <!--                            <p>     -->
                                <a href="{{route('article.single',$article->id)}}">
                                    {{$article->title}}
                                </a>
                                <!--                            </p>-->
                                <!--                            <span>1 ساعت پیش</span>-->
                            </div>


                        </div>
                        <hr>
                    @endforeach

                    <span class="text-center pb-3"><a href="{{route('articles')}}">همه مقالات</a></span>

                </div>
                <div class="card  mb-2">
                    <div class="card-header text-center">
                        محصولات
                    </div>
                    @foreach(\App\Models\Product::all()->take(3) as $product)
                        <div class="card-body d-flex align-items-center galeri1 position-relative">


                            <img src="{{$product->image}}" alt="" class="img-fluid galeri-img1 " width="100px"
                                 height="200px">
                            <div class="p-3">
                                <!--                            <p>     -->
                                <a href="{{route('singleproduct',$product->id)}}">
                                    {{$product->title}}
                                </a>
                                <!--                            </p>-->
                                <!--                            <span>1 ساعت پیش</span>-->
                            </div>


                        </div>
                        <hr>
                    @endforeach

                    <span class="text-center pb-3"><a href="{{route('products')}}">همه محصولات</a></span>

                </div>
            </div>

