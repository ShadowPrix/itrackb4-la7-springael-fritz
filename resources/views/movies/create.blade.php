@extends('layouts.app')

@section('title', 'Add New Movie')

@section('content')
    <h1>Add New Movie</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('movies.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="genre">Genre</label>
                    <select class="form-select" id="genre" name="genre">
                        <option value="">-Choose a genre-</option>
                        <option value="Action" @selected(old('genre') == 'Action')>Action</option>
                        <option value="Comedy" @selected(old('genre') == 'Comedy')>Comedy</option>
                        <option value="Drama" @selected(old('genre') == 'Drama')>Drama</option>
                    </select>
                    @error('genre')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="{{ old('rating') }}">
                    @error('rating')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="year">Year</label>
                    <input type="text" class="form-control" id="year" name="year" value="{{ old('year') }}">
                    @error('year')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Movie</button>
            </form>
        </div>
    </div>
@endsection 