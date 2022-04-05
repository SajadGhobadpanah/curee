@component('admin.layouts.content',['title'=>' مدیریت اسلاید '])


    @slot('breadcromp')

        <li class="breadcrumb-item"><a href="{{route('admin.')}}">صفحه ی اصلی</a></li>
        <li class="breadcrumb-item active"><a>مدیریت اسلاید</a></li>
    @endslot
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">تصاویر</h3>

                    <div class="card-tools d-flex">
                        <div class="btn-group-sm mr-1">
                            <a href="{{ route('admin.slides.create') }}"
                               class="btn btn-info">ثبت اسلاید جدید</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        @foreach($slides as $slide)
                            <div class="col-sm-2">
                                <a href="{{ url($slide['image']) }}">
                                    <img src="{{ $slide->image }}" class="img-fluid mb-2"
                                         alt="{{ $slide->alt }}">
                                </a>
                                <form
                                    action="{{ route('admin.slides.destroy' , $slide->id) }}"
                                    id="{{$slide->id}}" method="post">
                                    @method('delete')
                                    @csrf
                                </form>
                                <a href="{{ route('admin.slides.edit',$slide->id) }}"
                                   class="btn btn-sm btn-primary">ویرایش</a>
                                <a href="#" class="btn btn-sm btn-danger"
                                   onclick="document.getElementById('{{$slide->id}}').submit()">حذف</a>
                            </div>
                        @endforeach


                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{--                    {{ $images->render() }}--}}
                </div>
            </div>

@endcomponent
