<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{auth()->user()->image}}"
                         class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"> {{auth()->user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    @can('manage-user')
                        <li class="nav-item has-treeview {{isActive(['admin.users.index','admin.users.create','admin.users.edit'],'menu-open')}} ">
                            <a href="#"
                               class="nav-link {{isActive(['admin.users.index','admin.users.create','admin.users.edit'])}}">
                                <i class="nav-icon bi bi-people"></i>
                                <p>
                                    مدیریت کاربران
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.users.index')}}"
                                       class="nav-link {{isActive('admin.users.index')}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> لیست کاربران</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endcan
                    @can('manage-permessions')
                        <li class="nav-item has-treeview {{isActive(['admin.permissions.index','admin.permissions.create','admin.permissions.edit'],'menu-open')}} ">
                            <a href="#"
                               class="nav-link {{isActive(['admin.permissions.index','admin.permissions.create','admin.permissions.edit'])}}">
                                <i class="nav-icon bi bi-dpad-fill"></i>
                                <p>
                                    مدیریت دسترسی ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.permissions.index')}}"
                                       class="nav-link {{isActive('admin.permissions.index')}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> لیست دسترسی ها</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endcan
                    @can('manage-roles')
                        <li class="nav-item has-treeview {{isActive(['admin.roles.index','admin.roles.create','admin.roles.edit'],'menu-open')}} ">
                            <a href="#"
                               class="nav-link {{isActive(['admin.roles.index','admin.roles.create','admin.roles.edit'])}}">
                                <i class="nav-icon bi bi-ui-checks"></i>
                                <p>
                                    مدیریت گروه های دسترسی
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.roles.index')}}"
                                       class="nav-link {{isActive('admin.roles.index')}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> لیست گروه ها</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endcan
                    @can('manage-products')
                        <li class="nav-item has-treeview {{isActive(['admin.products.index','admin.products.create','admin.products.edit'],'menu-open')}} ">
                            <a href="#"
                               class="nav-link {{isActive(['admin.products.index','admin.products.create','admin.products.edit'])}}">
                                <i class="nav-icon bi bi-kanban"></i>
                                <p>
                                    مدیریت محصولات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.products.index')}}"
                                       class="nav-link {{isActive('admin.products.index')}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> لیست محصولات </p>
                                    </a>
                                </li>

                            </ul>

                        </li>
                    @endcan
                    @can('manage-comments')
                        <li class="nav-item has-treeview {{isActive(['admin.unapprovedcomments','admin.approvedcomments','admin.updatecomment','admin.editcomment'],'menu-open')}} ">
                            <a href="#"
                               class="nav-link {{isActive(['admin.unapprovedcomments','admin.approvedcomments','admin.updatecomment','admin.editcomment'])}}">
                                <i class="nav-icon bi bi-wallet2"></i>
                                <p>
                                    مدیریت نظرات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.approvedcomments')}}"
                                       class="nav-link {{isActive('admin.approvedcomments')}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> نظرات تایید شده </p>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{route('admin.unapprovedcomments')}}"
                                       class="nav-link {{isActive('admin.unapprovedcomments')}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> نظرات تایید نشده </p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endcan

                    @can('manage-categories')
                        <li class="nav-item has-treeview {{isActive(['admin.categories.index','admin.categories.create','admin.categories.store','admin.categories.edit'],'menu-open')}} ">
                            <a href="{{route('admin.categories.index')}}"
                               class="nav-link {{isActive(['admin.categories.index','admin.categories.create','admin.categories.store','admin.categories.edit'])}}">
                                <i class="nav-icon bi bi-tags"></i>
                                <p>
                                    مدیریت دسته بندی ها

                                </p>
                            </a>

                        </li>
                    @endcan

                    @can('manage-orders')
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview {{isActive(['admin.orders.index','admin.orders.create','admin.orders.edit'] , 'menu-open')}}">
                                <a href="#" class="nav-link {{isActive('admin.orders.index')}}">
                                    <i class="nav-icon bi bi-cart"></i>
                                    <p>
                                        بخش سفارشات
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.orders.index' , ['type' => 'unpaid']) }}"
                                           class="nav-link {{isUrl(route('admin.orders.index',['type' => 'unpaid']))}} ">
                                            <i class="fa fa-circle-o nav-icon text-warning"></i>
                                            <p>پرداخت نشده
                                                <span
                                                    class="badge badge-warning right">{{ \App\Models\Order::whereStatus('unpaid')->count() }}</span>
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        {{--                            {{ isUrl(route('admin.orders.index' , ['type' => 'paid'])) }}--}}
                                        <a href="{{ route('admin.orders.index' , ['type' => 'paid']) }}"
                                           class="nav-link {{isUrl(route('admin.orders.index',['type' => 'paid']))}} ">
                                            <i class="fa fa-circle-o nav-icon text-info"></i>
                                            <p>پرداخت شده
                                                <span
                                                    class="badge badge-info right">{{ \App\Models\Order::whereStatus('paid')->count() }}</span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.orders.index'  , ['type' => 'preparation']) }}"
                                           class="nav-link {{isUrl(route('admin.orders.index',['type' => 'preparation']))}} ">
                                            <i class="fa fa-circle-o nav-icon text-primary"></i>
                                            <p>در حال پردازش
                                                <span
                                                    class="badge badge-primary right">{{ \App\Models\Order::whereStatus('preparation')->count() }}</span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.orders.index' , ['type' => 'posted']) }}"
                                           class="nav-link {{isUrl(route('admin.orders.index',['type' => 'posted']))}}">
                                            <i class="fa fa-circle-o nav-icon text text-light"></i>
                                            <p>ارسال شده
                                                <span
                                                    class="badge badge-light right">{{ \App\Models\Order::whereStatus('posted')->count() }}</span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.orders.index' , ['type' => 'received']) }}"
                                           class="nav-link {{isUrl(route('admin.orders.index',['type' => 'received']))}}">
                                            <i class="fa fa-circle-o nav-icon text-success"></i>
                                            <p>دریافت شده
                                                <span
                                                    class="badge badge-success right">{{ \App\Models\Order::whereStatus('received')->count() }}</span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.orders.index' , ['type' => 'canceled']) }}"
                                           class="nav-link {{isUrl(route('admin.orders.index',['type' => 'canceled']))}}">
                                            <i class="fa fa-circle-o nav-icon text-danger"></i>
                                            <p>کنسل شده
                                                <span
                                                    class="badge badge-danger right">{{ \App\Models\Order::whereStatus('canceled')->count() }}</span>
                                            </p>
                                        </a>
                                    </li>
                                    {{--                            </ul>--}}


                                </ul>
                            </li>


                        </ul>
                    @endcan

                    @can('manage-dicounts')
                        <li class="nav-item has-treeview {{isActive(['admin.discounts.index','admin.discounts.create','admin.discounts.edit'],'menu-open')}} ">
                            <a href="#"
                               class="nav-link {{isActive(['admin.discounts.index','admin.discounts.create','admin.discounts.edit'])}}">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    مدیریت تخفیف ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.discounts.index')}}"
                                       class="nav-link {{isActive('admin.discounts.index')}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> لیست تخفیف ها </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan

                    @can('manage-articles')

                        <li class="nav-item has-treeview {{isActive(['admin.articles.index','admin.articles.create','admin.articles.edit'],'menu-open')}} ">
                            <a href="#"
                               class="nav-link {{isActive(['admin.articles.index','admin.articles.create','admin.articles.edit'])}}">
                                <i class="nav-icon bi bi-bar-chart"></i>
                                <p>
                                    مدیریت مقالات
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.articles.index')}}"
                                       class="nav-link {{isActive('admin.articles.index')}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> لیست مقالات </p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                    @endcan

                    @can('manage-news')
                        <li class="nav-item has-treeview {{isActive(['admin.news.index','admin.news.create','admin.news.edit'],'menu-open')}} ">
                            <a href="#"
                               class="nav-link {{isActive(['admin.news.index','admin.news.create','admin.news.edit'])}}">
                                <i class="nav-icon bi bi-newspaper"></i>                                <p>
                                    مدیریت اخبار
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.news.index')}}"
                                       class="nav-link {{isActive('admin.news.index')}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> لیست اخبار </p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                    @endcan
                    @can('manage-slides	')
                        <li class="nav-item has-treeview {{isActive(['admin.slides.index','admin.slides.create','admin.slides.edit'],'menu-open')}} ">
                            <a href="#"
                               class="nav-link {{isActive(['admin.slides.index','admin.slides.create','admin.slides.edit'])}}">
                                <i class="nav-icon bi bi-images"></i>
                                <p>
                                    مدیریت تصاویر اسلاید
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.slides.index')}}"
                                       class="nav-link {{isActive('admin.slides.index')}}">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p> لیست اسلاید ها </p>
                                    </a>
                                </li>
                            </ul>

                        </li>
                    @endcan

                    @can('manage-aboutus')
                        <li class="nav-item has-treeview {{isActive(['admin.about.index','admin.about.create','admin.about.edit'],'menu-open')}} ">
                            <a href="{{route('admin.about.index')}}"
                               class="nav-link {{isActive(['admin.about.index','admin.about.create','admin.about.edit'])}}">
                                <i class="nav-icon fa fa-dashboard"></i>
                                <p>
                                    مدیریت : درباره ما

                                </p>
                            </a>
                        </li>
                    @endcan
                </ul>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
