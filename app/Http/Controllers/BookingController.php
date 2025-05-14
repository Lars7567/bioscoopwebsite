<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Http\Requests\ReseveringRequest;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Film;

class BookingController extends Controller
{
    public function index()
    {
    
        $reserveringen = Booking::all();
        $films = Film::all();
        return view('resevering.index', compact('reserveringen', 'films'));
    }

    public function create() 
    {
        $films = Film::all();
        return view('resevering.create', compact('films'));
    }

    public function store(BookingRequest $request)
    {
        $reservering = new Booking();
        $this->save($reservering, $request);

        return redirect()->route('resevering.index')->with('success', 'Reservering toegevoegd!');
    }

    private function save(Booking $resevering, BookingRequest $request)
    {
 
        $resevering->first_name = $request->input('first_name');
        $resevering->last_name = $request->input('last_name');
        $resevering->email = $request->input('email');
        $resevering->phone = $request->input('phone');
        $resevering->time = $request->input('time');
        $resevering->seats = $request->input('seats');
        $resevering->film_id = $request->input('film_id');
       
        $resevering->save();
    }

}
