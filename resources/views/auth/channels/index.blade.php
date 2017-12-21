@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Channels</div>

                <div class="panel-body">
                    <table class="table table-hover">

                        <thead>

                        <th class="col-lg-10 col-sm-10 col-xs-10">Name</th>
                        <th class="col-lg-1 col-sm-1 col-xs-1"></th>
                        <th class="col-lg-1 col-sm-1 col-xs-1"></th>

                        </thead>

                        <tbody>

                        @foreach($channels as $channel)

                            <tr>

                                <td>{{$channel->title}}</td>

                                <td>
                                    <form action="{{route('channel.destroy', ['channel' => $channel->id])}}"
                                          method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}

                                        <button class="btn btn-default" type="submit"> D E L E T E</button>

                                    </form>

                                </td>

                                <td>
                                    <a href="{{route('channel.edit', ['channel' => $channel->id])}}"
                                       class="btn btn-default"> E D I T </a>
                                </td>

                            </tr>

                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
