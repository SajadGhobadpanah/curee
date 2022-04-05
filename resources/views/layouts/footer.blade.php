

<div class="container-fluid">
    <footer class=" p-4" style="background:#86b8e1 ">

        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <h5>CuRee . iR</h5>
                    <hr>
                    <p>خدمات پرستاری در منزل ویژه استان اصفهان <br> فروش محصولات پزشکی <br> ارایه ی جدید ترین مقالات آموزشی</p>

                </div>
                <div class="col-md-4">

                    <h5 class=""> دسترسی سریع </h5>
                    <hr>

                    <ul style="list-style: none">
                        <a href="/">
                            <li>صفحه ی اصلی</li>
                        </a>
                        <a class="p-3" href="{{route('products')}}">
                            <li>فروشگاه</li>
                        </a>
                        <a href="{{route('articles')}}">
                            <li>مقالات</li>
                        </a>

                    </ul>

                </div>
                <div class="col-md-4">
                    <h5 class=""> لینک های مرتبط </h5>
                    <hr>
                    <ul style="list-style: none">
                        <a href="{{route('login')}}">
                            <li> ورود به سایت</li>
                        </a>
                        <a class="p-3" href="{{route('register')}}">
                            <li>ثبت نام</li>
                        </a>


                    </ul>


                </div>
            </div>
        </div>


    </footer>

</div>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@yield('script')
</body>

<!--//-->


@include('sweet::alert')
</html>
