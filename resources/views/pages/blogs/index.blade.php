@extends('layouts.app')

@section('title', 'Blogs')

@section('content')
<main class="mt-4">
    @if(count($blogs) == 0)
        <div class="mt-5 justify-content-center text-center">
            <div class="alert alert-warning text-center">موردی یافت نشد!</div>
            <a href="/blog/create" class="btn btn-primary m-auto">Create new blog</a>
        </div>
    @else
        <a href="/blog/create" class="btn btn-primary m-auto">Create new blog</a>
        <div class="row mt-4">
            @foreach($blogs as $post)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">

                            <img src="{{ $post->getFirstMediaUrl('images') }}" class="card-img-top" alt="Thumbnail">
                            <img class="mt-2 rounded" src="{{ $post->getFirstMediaUrl('images', 'thumb') }}" width="50px" alt="Thumbnail">
                            <h5 class="card-title mt-2">{{ $post->title }}</h5>
                            <p class="card-text">{{  $post->description}} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</main>
@endsection
