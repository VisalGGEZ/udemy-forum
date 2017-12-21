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
        <div class="panel-heading">List Discussions:</div>

        <div class="padding_body_discussion">

            @foreach($discussions as $discussion)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img class="img-circle" src="{{$discussion->user->avatar}}" alt="{{$discussion->user->name}}"
                             width="40px"
                             height="40px"> &nbsp;
                        <span>
                            {{$discussion->user->name}}
                             <b>{{$discussion->created_at->diffForHumans()}}</b>
                        </span>
                        <a href="#" class="btn btn-default pull-right"> V I E W </a>
                    </div>
                    <div class="panel-body">
                        <h4 class="text-center text-success">
                            {{$discussion->title}}
                        </h4>
                        <h5>
                            {{str_limit($discussion->content, 150)}}
                        </h5>
                    </div>
                    <div class="panel-footer">
                        {{$discussion->replies->count()}} Replies
                    </div>

                </div>
            @endforeach
        </div>

        <div class="text-center">
            {{$discussions->links()}}
        </div>

    </div>

@endsection
