@extends('layouts.app')

@section('content')
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="mb-4">Menu Items</h2>
            <a href="{{ route('menus.create') }}" class="btn btn-primary">Add New Item</a>
        </div>
        
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $menu->name }}</td>
                        <td>${{ $menu->price }}</td>
                        <td>{{ $menu->description }}</td>
                        <td>
                            <img src="{{ $menu->image ? asset('storage/' . $menu->image) : asset('images/logo.png') }}"
                                alt="{{ $menu->title }}" class="img-fluid" style="height: 200px; object-fit: cover;">
                        </td>
                        <td>
                            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
