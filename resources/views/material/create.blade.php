@extends('layouts.app')

@section('content')
    <div class="col-6 p-5 m-5 m-auto">
        <form action="/materials" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Material Name</label>
                <br>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Material Name">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
