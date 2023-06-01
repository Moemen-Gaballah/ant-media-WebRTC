@extends('layout')

@section('content')

    <h3>All Auctions </h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">start_meeting_admin</th>
            <th scope="col">user_show_meeting</th>
        </tr>
        </thead>
        <tbody>
        @foreach($auctions as $auction)
        <tr>
            <th scope="row">{{$auction->id}}</th>
            <td>{{$auction->title}}</td>
            <td>{{substr($auction->description, 0 , 200)}}</td>
            <td><a target="_blank" href="{{url('http://localhost:5080/LiveApp?id='.$auction->stream_id)}}">Start Meeting</a></td>
{{--            <td><a target="_blank" href="{{route('stream.publish') . '?id=' . $auction->stream_id}}">Start Meeting</a></td>--}}
            <td><a target="_blank" href="{{url('http://localhost:5080/LiveApp/play.html?id='.$auction->stream_id)}}">Show Live Meeting</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
