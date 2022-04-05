<section x-cloak class="sidebar scroller" :class="open || 'inactive'">
    <div class="d-flex align-items-center justify-content-between justify-content-lg-center">
        <h3 class="fw-bold "><span class="text-success">CuRee</span> سایتی از جنس سلامتی</h3>
        <i @click="toggle" class="fs-1 bi bi-x text-sa d-lg-none"></i>

    </div>
    <div class=" mt-3 d-flex align-items-center hover-style">

        <ul class="list-unstyled  mb-0 dash-link">
            <li class="{{request()->is('profile') ? 'activee' : ''}}">
                <a href="">
                    <i class="me-2 bi bi-grid-fill"></i>
                    <span class="mb-0"><a href="{{url('/')}}">بازگشت</a></span>
                </a>
            </li>

            <li x-data="dropdown" class="mt-3">


                <div @click="toggle" class="d-flex justify-content-between align-items-center sa-link">

                    <div>

            <li class="{{request()->is('profile/phone') ? 'activee' : ''}}">
                <span class="mb-0 "><a href="{{route('profile.phone')}}" class="active">فعال سازی شماره تلفن </a></span>
            </li>


            <li x-data="dropdown" class="mt-3">


                <div @click="toggle" class="d-flex justify-content-between align-items-center sa-link">

                    <div>

            <li class="{{request()->is('profile/orders') ? 'activee' : ''}}">
                <span class="mb-0 "><a href="{{route('profile.orders')}}" class="active">لیست سفارشات شما </a></span>
            </li>


            <li x-data="dropdown" class="mt-3">


                <div @click="toggle" class="d-flex justify-content-between align-items-center sa-link">

                    <div>

            <li class="{{request()->is('profile/users') ? 'activee' : ''}}">
                <span class="mb-0 "><a href="{{route('users.index')}}" class="active">اطلاعات کاربری </a></span>
            </li>


            <li x-data="dropdown" class="mt-3">


                <div @click="toggle" class="d-flex justify-content-between align-items-center sa-link">

                    <div>

            <li class="">
                <form action="{{route('logout')}}" method="post">
                    @csrf

                    <button type="submit" class="btn btn-danger">خروج </button>

                </form>
            </li>

    </div>


    </div>
    </li>
    </ul>
    </div>
    </div>
</section>

<section class="main" :class="open || 'active'">
    <header class="d-flex align-items-center  justify-content-between p-4">
        <div>
            <i @click="toggle" class="bi bi-justify fs-3 marginmobile"></i>
        </div>
        <div class="d-flex align-items-center">
            <div class="dropdown ">


            </div>

            <div class="dropdown ">
                <div class="dropdown-toggle profile mb-2" data-bs-toggle="dropdown"
                     aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <img width="40" class="img-fluid rounded-circle" src="{{asset(auth()->user()->image)}}" alt="">
                        <div>
                            <p class="mb-0">{{auth()->user()->name}}</p>
                            <span
                                class="mb-0">{{auth()->user()->is_staff || auth()->user()->is_supervisor ? 'مدیر سایت' : 'کاربر'}}</span>
                        </div>
                    </div>
                </div>

                </ul>
            </div>
        </div>
    </header>
