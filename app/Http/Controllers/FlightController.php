<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    //
    public function top()
    {
        // $Flights = Flight::all();
        $Flights = Flight::where('name', 'takaaki')->orderby('name')->take(10)->get();

        return view('flights.flight', compact('Flights'));
    }
}
