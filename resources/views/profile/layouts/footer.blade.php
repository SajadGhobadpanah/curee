
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
                        <a style="color: black;text-decoration: none" href="/">
                            <li>صفحه ی اصلی</li>
                        </a>
                        <a style="color: black;text-decoration: none" class="p-3" href="{{route('products')}}">
                            <li>فروشگاه</li>
                        </a>
                        <a style="color: black;text-decoration: none" href="{{route('articles')}}">
                            <li>مقالات</li>
                        </a>

                    </ul>

                </div>
                <div class="col-md-4">
                    <h5 class=""> لینک های مرتبط </h5>
                    <hr>
                    <ul style="list-style: none">
                        <a style="color: black;text-decoration: none" href="{{route('login')}}">
                            <li> ورود به سایت</li>
                        </a>
                        <a style="color: black;text-decoration: none" class="p-3" href="{{route('register')}}">
                            <li>ثبت نام</li>
                        </a>


                    </ul>


                </div>
            </div>
        </div>


    </footer>

</div>

</section>


<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('toggleSidebar', () => ({
            open: window.innerWidth <= 992 ? false : true,

            toggle() {
                this.open = !this.open
            }
        })),
            Alpine.data('dropdown', () => ({
                open: false,

                toggle() {
                    this.open = !this.open
                }
            }))
    })

</script>
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

</body>
@include('sweet::alert')
</html>
