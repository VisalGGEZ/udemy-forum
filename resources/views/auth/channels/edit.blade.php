@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Channel: </div>

                    <div class="panel-body">
                        <form action="{{route('channel.update', ['channel'=> $channel->id])}}" method="post">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="title">Channel Title: </label>
                                <input type="text" name="title" class="form-control" placeholder="Title of Channel" value="{{$channel->title}}">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-default"> Update </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
