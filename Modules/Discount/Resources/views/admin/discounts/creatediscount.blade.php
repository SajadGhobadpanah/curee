@component('admin.layouts.content',['title'=>' ایجاد کد تخفیف جدید '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.discounts.index')}}">مدیریت تخفیفات</a></li>
        <li class="breadcrumb-item"><a>ایجاد کد تخفیف جدید</a></li>
    @endslot
    @slot('script')
        <script>
            $('#users').select2({
                'placeholder': 'کاربر  مورد نظر را انتخاب کنید'
            })

            $('#products').select2({
                'placeholder': 'محصول  مورد نظر را انتخاب کنید'
            })

            $('#categories').select2({
                'placeholder': 'محصول  مورد نظر را انتخاب کنید'
            })
        </script>
    @endslot

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد کد تخفیف </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.discounts.store')}}" method="post" class="form-horizontal">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">عنوان کد تخفیف</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="code" id="inputEmail3"
                               placeholder="عنوان کد تخفیف را اینجا وارد کنید" value="{{old('code')}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">درصد تخفیف</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="percent" id="inputEmail3"
                               placeholder="درصد تخفیف را اینجا وارد کنید" value="{{old('percent')}}"></div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"> کاربران مجاز</label>
                    <div class="col-sm-10">
                        <select name="users[]" id="users" class="form-control" multiple>

                            <option value="">همه ی کاربران</option>
                            @foreach(\App\Models\User::all() as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>

                            @endforeach


                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">محصولات مجاز</label>
                    <div class="col-sm-10">
                        <select name="products[]" id="products" class="form-control" multiple>

                            <option value="">همه ی محصولات</option>
                            @foreach(\App\Models\Product::all() as $product)
                                <option value="{{$product->id}}">{{$product->title}}</option>

                            @endforeach


                        </select>
                    </div>
                </div>



                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">دسته های مجاز</label>
                    <div class="col-sm-10">
                        <select name="categories[]" id="categories" class="form-control" multiple>

                            <option value="">همه ی دسته ها</option>
                            @foreach(\App\Models\Category::all() as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>

                            @endforeach


                        </select>
                    </div>
                </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label"> زمان مجاز استفاده کد تخفیف</label>

                        <div class="col-sm-10">
                            <input type="datetime-local" class="form-control" name="expired_at" id="inputEmail3"
                                   placeholder="زمان مجاز کد تخفیف را اینجا وارد کنید" value="{{old('expired_at')}}">
                        </div>
                    </div>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">ایجاد</button>
                    <a href="{{route('admin.discounts.index')}}" class="btn btn-default">لغو</a>
                </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
