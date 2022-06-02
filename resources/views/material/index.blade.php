@extends('layouts.app');

@section('content')
    <div class="col-6 m-auto m-3">
        <a href="/materials/create" class="btn btn-primary">Add a new material</a>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($materials as $material)
                <tr>
                    <th scope="row">{{ $material->id }}</th>
                    <th scope="row">{{ $material->name }}</th>
                    <th scope="row">
                        <a href="/materials/{{ $material->id }}/edit" class="btn btn-primary" style="display: inline-block">
                            Edit
                        </a>
                        <form action="/materials/{{ $material->id }}" method="POST" class="pt-3" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </th>
                </tr>
            @empty
                <p>There're no materials</p>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
