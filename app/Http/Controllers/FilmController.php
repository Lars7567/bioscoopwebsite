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

    

    private function save($film, FilmRequest $request)
    {
        $film->title = $request->input('title');
        $film->beschrijving = $request->input('beschrijving');
        $film->duur = $request->input('duur');
        $film->release_datum = $request->input('release_datum');
        $film->leeftijdskeuring = $request->input('leeftijdskeuring');
        $film->beschikbaarheid = $request->input('beschikbaarheid');
        $film->save();
    }
}
