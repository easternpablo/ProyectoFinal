<?php

namespace App\Http\Controllers;

use App\FlightAirline;
use App\Airline;
use App\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FlightAirlineController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'flight_id' => 'required|integer|max:20',
            'airline_id' => 'required|integer|max:20',
        ]);
    }

    public function create()
    {
        $flights = Flight::all();
        $airlines = Airline::all();
        return view('flightsairlines.create',['flights'=>$flights, 'airlines'=>$airlines]);
    }

    public function save(Request $request)
    {
        $oferta = new FlightAirline();
        $oferta->flight_id = $request->get('flight');
        $oferta->airline_id = $request->get('airline');
        $oferta->save();
        return redirect()->action("FlightController@showFlights")->with('status','Oferta insertada correctamente');
    }
}
