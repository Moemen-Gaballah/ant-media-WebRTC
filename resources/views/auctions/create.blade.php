@extends('layout')

@section('content')
    <form method="post" action="{{route('auctions.store')}}">
        @csrf
        <h3>Create Auction</h3>

        <div class="form-group">

            <label for="title">Auction title:</label>
            <input type="text"  required class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea required class="form-control" name="description" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
