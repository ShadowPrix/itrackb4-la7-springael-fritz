@extends('layouts.app')

@section('title', 'My Movie List')

@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('movies.create') }}" class="btn btn-success mb-3">Add New Movie</a>
            <p>
                <strong>Genre:</strong>
                <a href="{{ route('movies.index', ['genre' => 'all', 'year' => $year]) }}"
                    class="btn btn-sm btn-outline-primary {{ $genre === 'all' ? 'active' : '' }}">All</a>
                <a href="{{ route('movies.index', ['genre' => 'Action', 'year' => $year]) }}"
                    class="btn btn-sm btn-outline-primary {{ $genre === 'Action' ? 'active' : '' }}">Action</a>
                <a href="{{ route('movies.index', ['genre' => 'Comedy', 'year' => $year]) }}"
                    class="btn btn-sm btn-outline-primary {{ $genre === 'Comedy' ? 'active' : '' }}">Comedy</a>
                <a href="{{ route('movies.index', ['genre' => 'Drama', 'year' => $year]) }}"
                    class="btn btn-sm btn-outline-primary {{ $genre === 'Drama' ? 'active' : '' }}">Drama</a>
            </p>

            <p>
                <strong>Year:</strong>
                <a href="{{ route('movies.index', ['genre' => $genre, 'year' => 'all']) }}"
                    class="btn btn-sm btn-outline-secondary {{ $year === 'all' ? 'active' : '' }}">All</a>
                <a href="{{ route('movies.index', ['genre' => $genre, 'year' => '2001']) }}"
                    class="btn btn-sm btn-outline-secondary {{ $year === '2001' ? 'active' : '' }}">2001</a>
                <a href="{{ route('movies.index', ['genre' => $genre, 'year' => '2002']) }}"
                    class="btn btn-sm btn-outline-secondary {{ $year === '2002' ? 'active' : '' }}">2002</a>
                <a href="{{ route('movies.index', ['genre' => $genre, 'year' => '2010']) }}"
                    class="btn btn-sm btn-outline-secondary {{ $year === '2010' ? 'active' : '' }}">2010</a>
                <a href="{{ route('movies.index', ['genre' => $genre, 'year' => '2014']) }}"
                    class="btn btn-sm btn-outline-secondary {{ $year === '2014' ? 'active' : '' }}">2014</a>
            </p>

            <a href="{{ route('movies.index') }}" class="btn btn-sm btn-dark">Clear all filters</a>

            <p class="mt-2">
                <strong>Active filters:</strong>
                @if ($genre !== 'all')<span class="badge bg-info">Genre: {{ $genre }}</span>@endif
                @if ($year !== 'all')<span class="badge bg-info">Year: {{ $year }}</span>@endif
                @if ($genre === 'all' && $year === 'all')<span class="badge bg-secondary">None</span>@endif
            </p>

            <table class="table table-bordered table-striped" border="1" cellpadding="5" cellspacing="8">
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Rating</th>
                    <th>Year</th>
                </tr>

                @foreach ($movies as $movie)
                    <tr>
                        <td><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></td>
                        <td>{{ $movie['genre'] }}</td>
                        <td>{{ $movie['rating'] }}</td>
                        <td>{{ $movie['year'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection