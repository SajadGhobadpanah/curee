@component('admin.layouts.content',['title'=>' ویرایش گالری تصویر    '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a> ویرایش گالری تصویر جدید</a></li>
    @endslot


    @slot('script')
        <script>
            let createNewPic = ({id}) => {
                return `
                    <div class="row image-field" id="image-${id}">
                        <div class="col-5">
                            <div class="form-group">
                                 <label>تصویر</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control image_label" name="images[${id}][image]"
                                           aria-label="Image" aria-describedby="button-image" value="{{$gallery->image}}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary button-image"  type="button">انتخاب</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                 <label>عنوان تصویر</label>
                                 <input type="text" name="images[${id}][alt]" value="{{$gallery->alt}}" class="form-control">
                            </div>
                        </div>
                         <div class="col-2">
                            <label >اقدامات</label>
                            <div>
                                <button type="button" class="btn btn-sm btn-warning" onclick="document.getElementById('image-${id}').remove()">حذف</button>
                            </div>
                        </div>
                    </div>
                `
            }

            $('#add_product_image').click(function () {
                let imagesSection = $('#images_section');
                let id = imagesSection.children().length;

                imagesSection.append(
                    createNewPic({
                        id
                    })
                );

            });
            $('#add_product_image').click();


            // input
            let image;
            $('body').on('click', '.button-image', (event) => {
                event.preventDefault();

                image = $(event.target).closest('.image-field');

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });

            // set file link
            function fmSetLink($url) {
                image.find('.image_label').first().val($url);
            }
        </script>
    @endslot


    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ثبت تصویر</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal"
                      action="{{ route('admin.product.gallery.update' , ['product' => $product->id,'gallery'=>$gallery->id]) }}"
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="card-body">
                        {{--                        <h6>ویژگی محصول</h6>--}}
                        {{--                        <hr>--}}
                        <div id="images_section">
                            <img src="{{$gallery->image}}" alt="{{$gallery->alt}}" width="300px">
                        </div>
                        <button class="btn btn-sm btn-danger" type="button" id="add_product_image">تصویر جدید</button>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش تصاویر</button>
                        <a href="{{ route('admin.product.gallery.index' , ['product' => $product->id]) }}"
                           class="btn btn-default ">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>


@endcomponent


