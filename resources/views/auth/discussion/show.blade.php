@extends('layouts.app')

@section('style')
    <style>
        .padding_body_discussion {
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
        }
    </style>


@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <img class="img-circle" src="{{$discussion->user->avatar}}" alt="{{$discussion->user->name}}"
                 width="40px"
                 height="40px"> &nbsp;
            <span>
                            {{$discussion->user->name}}
                <b>{{$discussion->created_at->diffForHumans()}}</b>
                        </span>

            @if(!$discussion->isWatched())
                <a href="{{route('discussion.watch', ['user_id' => Auth::user()->id, 'discussion_id' => $discussion->id] )}}"
                   class="btn btn-default pull-right"> Watch </a>
            @else
                <a href="{{route('discussion.unwatch', ['user_id' => Auth::user()->id, 'discussion_id' => $discussion->id])}}"
                   class="btn btn-info pull-right"> <b>Unwatch</b> </a>
            @endif


        </div>
        <div class="panel-body">
            <h4 class="text-center text-success">
                {{$discussion->title}}
            </h4>
            <h5>
                {!! $discussion->content !!}
            </h5>
        </div>
    </div>


    @foreach($discussion->replies as $reply)

        <div class="panel panel-default">
            <div class="panel-heading">
                <img class="img-circle" src="{{$reply->user->avatar}}" alt="{{$reply->user->name}}"
                     width="40px"
                     height="40px"> &nbsp;
                <span>
                    {{$reply->user->name}}
                    <b>{{$reply->created_at->diffForHumans()}}</b>
                        </span>
            </div>
            <div class="panel-body">
                <h4 class="text-center text-success">
                    {{$reply->title}}
                </h4>
                <h5>
                    {!! $reply->content !!}
                </h5>
            </div>
            <div class="panel-footer">
                @if($reply->isLiked())
                    <a href="{{route('like.destroy', ['user_id' => Auth::user()->id, 'reply_id' => $reply->id])}}"
                       class="btn btn-info btn-xs"><b><span>{{$reply->likes->count()}}</span> Likes</b></a>
                @else
                    <a href="{{route('like.store', ['user_id' => Auth::user()->id, 'reply_id' => $reply->id])}}"
                       class="btn btn-default btn-xs"><span>{{$reply->likes->count()}}</span> Likes</a>
                @endif
            </div>

        </div>

    @endforeach

    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{route('reply.store')}}" method="post">
                {{csrf_field()}}

                <input type="hidden" name="discussion_id" value="{{$discussion->id}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">


                <div class="form-group">
                    <label for="contentReply">Leave your reply here:</label>
                    <textarea name="contentReply" class="form-control" rows="5" cols="5"
                              id="contentReply">
                    </textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-default"> Reply</button>
                </div>
            </form>
        </div>
    </div>


@endsection
