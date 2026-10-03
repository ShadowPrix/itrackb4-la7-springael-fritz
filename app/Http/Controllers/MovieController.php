<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function getMovies()
    {
        $path = storage_path('app/movies.json');
        return json_decode(file_get_contents($path), true);
    }

    private function saveMovies(array $movies)
    {
        file_put_contents(storage_path('app/movies.json'), json_encode($movies, JSON_PRETTY_PRINT));
    }

    public function index(Request $request)
    {
        $genre = $request->query('genre', 'all');
        $year = $request->query('year', 'all');

        $movies = $this->getMovies();

        if ($genre !== 'all') {
            $movies = array_filter($movies, fn($m) => $m['genre'] === $genre);
        }
        if ($year !== 'all') {
            $movies = array_filter($movies, fn($m) => $m['year'] == $year);
        }

        return view('movies.index', [
            'movies' => $movies,
            'genre' => $genre,
            'year' => $year,
        ]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'genre' => 'required|in:Action,Comedy,Drama',
            'rating' => 'required|numeric|min:0|max:10',
            'year' => 'required|integer|min:1900|max:2100',
        ]);

        $movies = $this->getMovies();
        $id = max(array_keys($movies)) + 1;

        $movies[$id] = [
            'id' => $id,
            'title' => $request->input('title'),
            'genre' => $request->input('genre'),
            'rating' => (float) $request->input('rating'),
            'year' => (int) $request->input('year'),
        ];

        $this->saveMovies($movies);

        return redirect()->route('movies.index')->with('success', 'Movie added successfully.');
    }

    public function show(string $id)
    {
        $movies = $this->getMovies();

        if (!isset($movies[$id])) {
            abort(404);
        }

        $movie = $movies[$id];

        return view('movies.show', ['movie' => $movie]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        $movies = $this->getMovies();
        $movie = $movies[3];

        return view('movies.show', ['movie' => $movie]);
    }
}
