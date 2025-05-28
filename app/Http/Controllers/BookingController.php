<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\ReseveringRequest;
use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\user;
use App\Models\Film;
use App\Models\seat;
use App\Models\FilmZaal;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $booking = Booking::with('filmzaal.zaal')->where('name', $user->name)->get();
        $filmzalen = FilmZaal::with(['film', 'zaal',])->get();

        return view('resevering.index', compact('booking', 'filmzalen'));
    }

    public function create(Film $film, seat $seat)
    {
        $filmId = $film->id;
        $film = Film::find($filmId);
        $seats = seat::all();

        // Check if the seat exists
        if (!$seat) {
            return redirect()->route('resevering.index')->with('error', 'Zitplaats niet gevonden.');
        }

        // Check if the film exists
        if (!$film) {
            return redirect()->route('film.index')->with('error', 'Film niet gevonden.');
        }

        $user = Auth::user();

        return view('resevering.create', compact('film', 'user', 'seats'));
    }


    public function store(BookingRequest $request)
    {
        $booking = new Booking();
        $this->save($booking, $request);

        return redirect()->route('resevering.index')->with('success', 'Reservering toegevoegd!');
    }

    public function delete(Booking $booking)
    {

        // Check if the booking exists
        $booking = Booking::findOrFail($booking->id);
        $booking->delete();


        return redirect()->route('resevering.index')->with('success', 'Reservering geannuleerd!');
    }

    private function save(Booking $booking, BookingRequest $request)
    {

        $booking->name = $request->input('name');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phone');
        $booking->time = $request->input('time');
        $booking->film_id = $request->input('film_id');
        $booking->seat_id = $request->input('seat_id');
        // $booking->film_zaal_id = $request->input('film_zaal_id');

        $booking->save();
    }
}
