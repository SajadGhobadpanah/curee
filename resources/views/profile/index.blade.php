@include('layouts.navbar')
@include('profile.layouts.header')


<section x-data="toggleSidebar">

    @include('profile.layouts.sidebar')
    <div class="content" style="height: 100vh">

        <div class="container-fluid">
            <div class="row p-lg-5 gy-3">
                <div class="col-lg-9">
                    <div class="row gy-4">


                        @yield('profileindex')


                    </div>
</section>
@include('profile.layouts.footer')



