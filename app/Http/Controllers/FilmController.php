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
        $films = DB::table('film')->get();
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

    public function edit($id)
    {
        $films = Film::findOrFail($id);
        return view('films.edit', compact('films'));
    }

    public function update(FilmRequest $request, film $film)
    {
        $films = Film::findOrFail($film->id);
        $this->save($films, $request);
        
        return redirect()->route('films.index')->with('success', 'Film bijgewerkt!');
    }

    private function save($films, FilmRequest $request)
    {
        $films->title = $request->input('title');
        $films->beschrijving = $request->input('beschrijving');
        $films->duur = $request->input('duur');
        $films->release_datum = $request->input('release_datum');
        $films->leeftijdskeuring = $request->input('leeftijdskeuring');
        $films->beschikbaarheid = $request->input('beschikbaarheid');
        $films->save();
    }
}
