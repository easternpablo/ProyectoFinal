<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Airport;
use App\Plane;
use App\Pilot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FlightController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'number' => 'required|integer|max:11',
            'flight_number' => 'required|string|max:191',
            'origin_airport' => 'required|integer|max:20',
            'destination_airport' => 'required|integer|max:20',
            'boarding_time' => 'time',
            'departure_time' => 'time',
            'arrival_time' => 'time',
            'boarding_gate' => 'string|max:191',
            'status' => 'required|string|max:191',
            'occupied_seats' => 'required|integer|max:11',
            'flight_date' => 'required|date',
            'flight_time' => 'required|time',
            'category' => 'required|string|max:191',
            'travel' => 'required|string|max:191',
            'plane_id' => 'required|integer|max:20',
            'commander_id' => 'required|integer|max:20',
            'co_pilot_id' => 'required|integer|max:20',
        ]);
    }

    public function showFlights()
    {
        $flights = Flight::orderBy('number','ASC')->paginate(4);
        return view('flights.show',['flights'=>$flights]);
    }

    public function create()
    {
        $airports = Airport::all();
        $planes = Plane::all();
        $pilots = Pilot::all();
        return view('flights.create',['airports'=>$airports, 'planes'=>$planes, 'pilots'=>$pilots]);
    }

    public function showDetail($id)
    {
        $flight = Flight::findOrFail($id);
        $origin = DB::table('airports')
                    ->join('flights','airports.id','=','flights.origin_airport')
                    ->select('airports.*')
                    ->where('flights.id','=',$id)
                    ->first();
        $destination = DB::table('airports')
                         ->join('flights','airports.id','=','flights.destination_airport')
                         ->select('airports.*')
                         ->where('flights.id','=',$id)
                         ->first();
        $plane = DB::table('planes')
                   ->join('flights','planes.id','=','flights.plane_id')
                   ->select('planes.*')
                   ->where('flights.id','=',$id)
                   ->first();
        $commander = DB::table('pilots')
                       ->join('flights','pilots.id','=','flights.commander_id')
                       ->select('pilots.*')
                       ->where('flights.id','=',$id)
                       ->first();
        $co_pilot = DB::table('pilots')
                      ->join('flights','pilots.id','=','flights.co_pilot_id')
                      ->select('pilots.*')
                      ->where('flights.id','=',$id)
                      ->first();
        return view('flights.showDetail',['flight'=>$flight,
                                          'origin'=>$origin,
                                          'destination'=>$destination,
                                          'plane'=>$plane,
                                          'commander'=>$commander,
                                          'co_pilot'=>$co_pilot]);
    }

    public function delete($id)
    {
        $flight = Flight::findOrFail($id);
        $flight->delete();
        return redirect()->action("FlightController@showFlights")->with('status','Vuelo eliminado correctamente');
    }

    public function save(Request $request)
    {
        $flight = new Flight();
        $flight->number = $request->input('number');
        $flight->flight_number = $request->input('flight');
        $flight->origin_airport = $request->get('origin');
        $flight->destination_airport = $request->get('destination');
        $flight->boarding_time = $request->input('boarding');
        $flight->departure_time = $request->input('departure');
        $flight->arrival_time = $request->input('arrival');
        $flight->boarding_gate = $request->input('gate');
        $flight->status = $request->input('status');
        $flight->flight_date = $request->input('flight-date');
        $flight->flight_time = $request->input('flight-time');
        $flight->category = $request->input('category');
        $flight->travel = $request->input('travel');
        $flight->plane_id = $request->get('plane');
        $flight->commander_id = $request->get('commander');
        $flight->co_pilot_id = $request->get('co-pilot');
        $flight->save();
        return redirect()->action("FlightController@showFlights")->with('status','Vuelo insertado correctamente');
    }
}
