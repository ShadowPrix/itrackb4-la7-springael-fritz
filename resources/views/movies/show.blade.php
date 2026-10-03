@extends('layouts.app')

@section('title', $movie['title'])

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>{{ $movie['title'] }}</td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>{{ $movie['genre'] }}</td>
                </tr>
                <tr>
                    <td>Rating</td>
                    <td>{{ $movie['rating'] }}</td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td>{{ $movie['year'] }}</td>
                </tr>
            </table>
        </div>
    </div>

    <p class="mt-3"><a href="{{ route('movies.index') }}" class="btn btn-primary">Back to list</a></p>
@endsection