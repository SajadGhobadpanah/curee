


@foreach ($categories as $category)

    <ul class="my-2">
        <li class="list-unstyled my-1" >

            <div class="d-flex">
                <span class="ml-2 my-2">{{$category->name}}</span>
                <div>
                    <form action="{{route('admin.categories.destroy',$category->id)}}" method="post"
                          id="{{$category->id}}">

                        @csrf
                        @method('delete')
                    </form>
                    <a href="{{route('admin.categories.edit',$category->id)}}" class="badge badge-primary">ویرایش</a>
                    <a href="#"
                       onclick="event.preventDefault();document.getElementById('{{$category->id}}').submit()"
                       class="badge badge-danger mx-2">حذف</a>
                    <a href="{{route('admin.categories.create')}}?parent={{$category->id}}" class="badge badge-warning">ایجاد
                        زیر دسته جدید</a>
                </div>

            </div>
            <ul>
                @if($category->child->count())
                    <li class="list-unstyled mr-4 mt-1">
                        @include('admin.categories.layout',['categories'=>$category->child])
                    </li>
                @endif
            </ul>
        </li>
    </ul>

@endforeach
