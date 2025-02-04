@extends('layouts.app')

@section('title', 'Create new Blog')

@section('content')
<h1 class="my-5">Create new blog</h1>

@if (session('success'))
    <p class="text-success">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('store.blog') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="title" class="col-3">title:</label>
        <input type="text" name="title" required class="form-control col-9" placeholder="Enter title" id="title">
    </div>
    <div class="form-group row">
        <label for="description" class="col-3">title:</label>
        <textarea name="description" id="description" cols="30" rows="5" class="form-control col-9" placeholder="Enter description"></textarea>
    </div>
    <div class="form-group row">
        <label for="file" class="col-3">Image:</label>
        <input class="form-control col-9" type="file" id="file" name="image" accept="image/*" required>
    </div>
    <a href="/blogs" class="btn btn-secondary">back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
