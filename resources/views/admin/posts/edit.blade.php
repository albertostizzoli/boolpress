@extends('layouts.app')
@section('content')
    <section class="container">
        <h1> Edit {{$post->title}}</h1>
        <form action="{{ route('admin.posts.update', $post->id) }} " method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    required maxlength="200" minlength="3" value="{{old('title', $post->title)}}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body">Body</label>
                <input type="text" class="form-control @error('body') is-invalid @enderror" name="body" id="body"
                    required maxlength="200" minlength="3" value="{{old('body', $post->body)}}">
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="url" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{old('image', $post->image)}}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="submit" class="btn btn-danger">Reset</button>
        </form>
    </section>
@endsection
