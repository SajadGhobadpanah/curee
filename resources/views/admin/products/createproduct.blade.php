@component('admin.layouts.content',['title'=>' ایجاد محصول جدید '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.products.index')}}">مدیریت محصولات </a></li>
        <li class="breadcrumb-item"><a>ایجاد محصول جدید</a></li>
    @endslot
    @slot('script')
        <script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>

        <script>
            CKEDITOR.replace('description', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});

            document.addEventListener("DOMContentLoaded", function () {

                document.getElementById('button-image').addEventListener('click', (event) => {
                    event.preventDefault();

                    window.open('/file-manager/fm-button', 'fm', 'width=1000,height=800');
                });
            });

            // set file link
            function fmSetLink($url) {
                document.getElementById('image_label').value = $url;
            }


            $('#categories').select2({
                'placeholder': 'دسته مورد نظر را انتخاب کنید'
            })
            let changeAttributeValues = (event, id) => {
                let valueBox = $(`select[name='attributes[${id}][value]']`);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json'
                    }
                })

                $.ajax({
                    type: 'POST',
                    url: '/admin/attribute/values',
                    data: JSON.stringify({
                        name: event.target.value
                    }),
                    success: function (data) {
                        valueBox.html(`
                            <option selected>انتخاب کنید</option>
                            ${
                            data.data.map(function (item) {
                                return `<option value="${item}">${item}</option>`
                            })
                        }
                        `);

                        $('.attribute-select').select2({tags: true});
                    }
                });
            }

            let createNewAttr = ({attributes, id}) => {
                return `
                    <div class="row" id="attribute-${id}">
                        <div class="col-5">
                            <div class="form-group">
                                 <label>عنوان ویژگی</label>
                                 <select name="attributes[${id}][name]" onchange="changeAttributeValues(event, ${id});" class="attribute-select form-control">
                                    <option value="">انتخاب کنید</option>
                                    ${
                    attributes.map(function (item) {
                        return `<option value="${item}">${item}</option>`
                    })
                }
                                 </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                 <label>مقدار ویژگی</label>
                                 <select name="attributes[${id}][value]" class="attribute-select form-control">
                                        <option value="">انتخاب کنید</option>
                                 </select>
                            </div>
                        </div>
                         <div class="col-2">
                            <label >اقدامات</label>
                            <div>
                                <button type="button" class="btn btn-sm btn-warning" onclick="document.getElementById('attribute-${id}').remove()">حذف</button>
                            </div>
                        </div>
                    </div>
                `
            }

            $('#add_product_attribute').click(function () {
                let attributesSection = $('#attribute_section');
                let id = attributesSection.children().length;

                attributesSection.append(
                    createNewAttr({
                        attributes: [],
                        id
                    })
                );

                $('.attribute-select').select2({tags: true});
            });
        </script>
    @endslot

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">فرم ایجاد محصول </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.products.store')}}" method="post" class="form-horizontal"
              enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">عنوان محصول</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="inputEmail3"
                               placeholder="عنوان محصول را وارد کنید" value="{{old('title')}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">توضیح محصول</label>

                    <div class="col-sm-10">
                        <textarea name="content" class="form-control" id="description" cols="30"
                                  rows="10">{{old('content')}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">قیمت محصول</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" id="inputEmail3"
                               placeholder="قیمت محصول را وارد کنید" {{old('price')}}>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">موجودی محصول</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inventory" id="inputEmail3"
                               placeholder="موجودی محصول را وارد کنید" {{old('inventory')}}>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">درصد تخفیف محصول</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="percent" id="inputEmail3"
                               placeholder="درصد تخفیف محصول را وارد کنید" {{old('percent')}}>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">دسته مورد نظر</label>
                <select name="categories[]" id="categories" class="form-control" multiple>

                    @foreach(\App\Models\Category::all() as $category)
                        <option value=""></option>
                        <option value="{{$category->id}}">{{$category->name}}</option>

                    @endforeach

                </select>
            </div>
            <label for="inputEmail3" class="col-sm-2 control-label"> تصویر شاخص</label>

            <div class="input-group">

                <input type="text" id="image_label" class="form-control" name="image"
                       aria-label="Image" aria-describedby="button-image">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب تصویر
                    </button>
                </div>
            </div>

            <h6>ویژگی محصول</h6>
            <hr>
            <div id="attribute_section">

            </div>
            <button class="btn btn-sm btn-danger" type="button" id="add_product_attribute">ویژگی جدید
            </button>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ایجاد</button>
                <a href="{{route('admin.products.index')}}" class="btn btn-default">لغو</a>
            </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
