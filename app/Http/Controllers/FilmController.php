<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        $films = DB::table('films')->get();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        return view('films.create');
    }

    public function store(FilmRequest $request)
    {
        $films = new Film();
        $this->save($films, $request);

        return redirect()->route('films.index')->with('success', 'Film toegevoegd!');
    }

    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('films.show', compact('film'));
    }

    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('films.edit', compact('film'));
    }

    public function update(FilmRequest $request, Film $film)
    {
        $this->save($film, $request);
        return redirect()->route('films.index')->with('success', 'Film bijgewerkt!');
    }

    public function delete(film $film)
    {
        $film = Film::findOrFail($film->id);
        $film->delete();


        return redirect()->route('films.index')->with('success', 'Film verwijderd!');
    }

    private function save($film, FilmRequest $request)
    {
        $film->title = $request->input('title');
        $film->description = $request->input('description');
        $film->duration = $request->input('duration');
        $film->release_date = $request->input('release_date');
        $film->age_rating = $request->input('age_rating');
        $film->availability = $request->input('availability');
        $film->save();
    }
}
