

    @foreach($comments as $comment)
        <div class="card p-3 d-flex justify-content-between  mb-2 ">
            <div style="float: right" class="d-flex align-items-center">
                <img src="{{$comment->user->image}}" alt="" class="img-rounded img-thumbnail "
                     style="float: right;height: 90px;width: 80px">
                <div class="m-2">
                    <span style="float: right">{{$comment->user->name}}  </span><br>
                    <span style="float: right">{{jdate($comment->created_at)->ago()}}</span>
                </div>
            </div>
            <div>
                <p class="p-3">{{$comment->comment}}</p>
                @auth
                    <span class="btn btn-sm btn-outline-blu" data-bs-toggle="modal" data-bs-target="#sendComment"
                          data-id="{{ $comment->id }}" style="float: left">پاسخ</span>
                @endauth
            </div>
        </div>
        <div class="card-body">
            @include('layouts.comment',['comments'=>$comment->child->where('approved',1)])
        </div>
    @endforeach


