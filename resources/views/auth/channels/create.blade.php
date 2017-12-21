@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Create Channel:</div>

                <div class="panel-body">
                    <form action="{{route('channel.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="title">Channel Title: </label>
                            <input type="text" name="title" class="form-control" placeholder="Title of Channel">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-default"> Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
