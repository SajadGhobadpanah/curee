<link rel="icon" href="https://curee.ir/images/logo/logo.png">

<nav class="navbar navbar-light p-3 fixed-top" style="background-color: #86b8e1;">
    <div class="container">
        <a class="navbar-brand" href="/">CuRee . iR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">CuRee</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">صفحه ی اصلی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('products')}}">فروشگاه</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active " href="{{route('articles')}}" id="offcanvasNavbarDropdown"
                           role="button"
                        >
                            مقالات
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('about')}}">درباره ما</a>
                    </li>

                </ul>
                <!--                <form class="d-flex">-->
                <!--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                <!--                    <button class="btn btn-outline-success" type="submit">Search</button>-->
                <!--                </form>-->
            </div>
        </div>
    </div>
</nav>
<br>
<br>
<br>

