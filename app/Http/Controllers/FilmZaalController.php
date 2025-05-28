<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilmZaalRequest;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\FilmZaal;
use App\Models\Zaal;

class FilmZaalController extends Controller
{
    public function index()
    {
        $filmzalen = FilmZaal::with(['film', 'zaal'])->get();
        return view('filmzaal.index', compact('filmzalen'));
    }

    public function create()
    {
        $films = Film::all();
        $zalen = Zaal::all();

        return view('filmzaal.create', compact('films', 'zalen'));
    }

    public function store(FilmZaalRequest $request)
    {
        $film = Film::findOrFail($request->validated('film_id'));
        $film->zalen()->syncWithoutDetaching($request->validated('zaal_id'));


        return redirect()->route('filmzaal.index')->with('success', 'Film en zaal succesvol gekoppeld.');
    }

    public function show($id)
    {
        $filmzaal = FilmZaal::with(['film', 'zaal'])->findOrFail($id);
        return view('filmzaal.show', compact('filmzaal'));
    }

    private function save($filmzaal, FilmZaalRequest $request)
    {
        $filmzaal->film_id = $request->input('film_id');
        $filmzaal->zaal_id = $request->input('zaal_id');
        $filmzaal->save();
    }
}
