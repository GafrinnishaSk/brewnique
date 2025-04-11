@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add New Menu Item</h2>

        <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('menus.form')

            <button class="btn btn-success">Save</button>
            <a href="{{ route('menus.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
