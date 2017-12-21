@extends('layouts.app')

@section('style')

    {{--<!-- include libraries(jQuery, bootstrap) -->--}}
    {{--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">--}}

    {{--<!-- include summernote css/js-->--}}
    {{--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">--}}
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Create Discussion:</div>
        <div class="panel-body">
            <form action="{{route('discussion.store')}}" method="post">
                {{csrf_field()}}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title of Discussion">
                </div>

                <div class="form-group">
                    <label for="channel_id">Select Channels:</label>
                    <select class="form-control" id="channel_id" name="channel_id">
                        @foreach($channels as $channel)
                            <option value="{{$channel->id}}">{{$channel->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="contentDiscussion">Contents:</label>
                    <textarea name="contentDiscussion" class="form-control" rows="5" cols="5"
                              id="contentDiscussion">
                    </textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-default"> Create</button>
                </div>
            </form>
        </div>
    </div>

@endsection


@section('script')
    {{--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>--}}
    {{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}

    {{--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>--}}

    {{--<script>--}}
        {{--$.noConflict();--}}
        {{--$(document).ready(function() {--}}
            {{--$('#contentDiscussion').summernote();--}}
        {{--});--}}
    {{--</script>--}}
@endsection