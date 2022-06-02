@extends('layouts.app')

@section('content')
    <div class="col-6 p-5 m-5 m-auto">
        <form action="/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Product Name</label>
                <br>
                <input type="text" value="{{ $product->name }}" class="form-control" id="name" name="name" placeholder="Enter Product Name">
            </div>
            <br>
            <div class="form-group">
                <label for="code">Product Code</label>
                <br>
                <input type="text" value="{{ $product->code }}" class="form-control" id="code" name="code" placeholder="Enter Product Code">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
