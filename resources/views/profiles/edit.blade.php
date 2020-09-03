@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                        <input  id="title" 
                                type="text" 
                                class="form-control @error('title') is-invalid @enderror" 
                                title="title" value="{{ old('title') ?? $user->profile->title }}"   
                                autocomplete="title" 
                                autofocus
                                name="title">

                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>
                        <input  id="description" 
                                type="text" 
                                class="form-control @error('description') is-invalid @enderror" 
                                description="description" value="{{ old('description') ?? $user->profile->description }}"   
                                autocomplete="description" 
                                autofocus
                                name="description">

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">URL</label>
                        <input  id="url" 
                                type="text" 
                                class="form-control @error('url') is-invalid @enderror" 
                                url="url" value="{{ old('url') ?? $user->profile->url }}"   
                                autocomplete="url" 
                                autofocus
                                name="url">

                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                        <input  id="image" 
                                type="file" 
                                class="form-control-file @error('image') is-invalid @enderror" 
                                image="image" value="{{ old('image') }}"   
                                autocomplete="image" 
                                autofocus
                                name="image">

                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="row justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary">Save Profile</button>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
