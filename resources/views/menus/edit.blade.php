@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Menu Item</h2>

    <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('menus.form')

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('menus.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
