@extends('layouts.app');

@section('content')
    <div class="col-6 m-auto m-3">
        <a href="/products/create" class="btn btn-primary">Add a new product</a>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Code</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <th scope="row">{{ $product->name }}</th>
                    <th scope="row">{{ $product->code }}</th>
                    <th scope="row">
                        <a href="/products/{{ $product->id }}/edit" class="btn btn-primary" style="display: inline-block">
                            Edit
                        </a>
                        <form action="/products/{{ $product->id }}" method="POST" class="pt-3" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </th>
                </tr>
            @empty
                <p>There're no products</p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
