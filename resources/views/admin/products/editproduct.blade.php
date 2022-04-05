@component('admin.layouts.content',['title'=>' ویرایش محصول  '])


    @slot('breadcromp')

        <li class="breadcrumb-item active"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a href="{{route('admin.products.index')}}">مدیریت محصولات </a></li>
        <li class="breadcrumb-item"><a>ویرایش محصول </a></li>
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
            <h3 class="card-title">فرم ویرایش محصول </h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.products.update',$product->id)}}" method="post" class="form-horizontal"
              enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="card-body">

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">عنوان محصول</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="inputEmail3"
                               placeholder="عنوان محصول را وارد کنید" value="{{$product->title}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">توضیح محصول</label>

                    <div class="col-sm-10">
                        <textarea name="content" class="form-control" id="description" cols="30"
                                  rows="10">{{$product->content}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">قیمت محصول</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" id="inputEmail3"
                               placeholder="قیمت محصول را وارد کنید" value="{{$product->price}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">موجودی محصول</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="inventory" id="inputEmail3"
                               placeholder="موجودی محصول را وارد کنید" value="{{$product->inventory}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">درصد تخفیف محصول</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="percent" id="inputEmail3"
                               placeholder="درصد تخفیف محصول را وارد کنید" value="{{$product->percent}}">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">دسته مورد نظر</label>
                <select name="categories[]" id="categories" class="form-control">

                    @foreach(\App\Models\Category::all() as $category)
                        <option value=""></option>
                        <option
                            value="{{$category->id}}" {{in_array($category->id,$product->categories->pluck('id')->toArray()) ? 'selected' :''}}>{{$category->name}}</option>

                    @endforeach

                </select>
            </div>

            <div class="input-group">

                <input type="text" id="image_label" class="form-control" name="image"
                       aria-label="Image" aria-describedby="button-image" value="{{$product->image}}">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب تصویر
                    </button>


                </div>

            </div>
            <br>
            <img class="mr-4 mb-3" src="{{$product->image}}" alt="" width="500px" height="400px"><br>
            <h6>ویژگی محصول</h6>
            <hr>
            <div id="attribute_section">
                @foreach($product->attributes as $attribute)

                    <div class="row" id="attribute-{{ $loop->index }}">
                        <div class="col-5">
                            <div class="form-group">
                                <label>عنوان ویژگی</label>
                                <select name="attributes[{{ $loop->index }}][name]"
                                        onchange="changeAttributeValues(event, {{ $loop->index }});"
                                        class="attribute-select form-control">
                                    <option value="">انتخاب کنید</option>
                                    @foreach(\App\Models\Attribute::all() as $attr)
                                        <option
                                            value="{{ $attr->name }}" {{ $attr->name ==  $attribute->name ? 'selected' : '' }}>{{ $attr->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label>مقدار ویژگی</label>
                                <select name="attributes[{{ $loop->index }}][value]"
                                        class="attribute-select form-control">
                                    <option value="">انتخاب کنید</option>
                                    @foreach($attribute->values as $value)
                                        <option
                                            value="{{ $value->value }}" {{ $value->id  === $attribute->pivot->value_id ? 'selected' : '' }}>{{ $value->value }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-2">
                            <label>اقدامات</label>
                            <div>
                                <button type="button" class="btn btn-sm btn-warning"
                                        onclick="document.getElementById('attribute-{{ $loop->index }}').remove()">
                                    حذف
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-sm btn-danger" type="button" id="add_product_attribute">ویژگی جدید
            </button>

            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ویرایش</button>
                <a href="{{route('admin.products.index')}}" class="btn btn-default">لغو</a>
            </div>
            @include('layouts.errors')
        </form>
        <!-- /.card-footer -->

    </div>


@endcomponent
