<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Plane;
use App\AirlinePlane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AirlinePlaneController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'airline_id' => 'required|integer|max:20',
            'plane_id' => 'required|integer|max:20',
        ]);
    }

    public function create($id)
    {
        $airlines = Airline::all();
        $plane = Plane::findOrFail($id);
        return view('airlinesplanes.create',['airlines'=>$airlines],['plane'=>$plane]);
    }

    public function showPlanesAirline($id)
    {
        $planes = DB::table('planes')
                      ->join('airlinesplanes','airlinesplanes.plane_id','=','planes.id')
                      ->join('airlines','airlines.id','=','airlinesplanes.airline_id')
                      ->select('planes.*')
                      ->where('airlines.id','=',$id)
                      ->get();
        return view('airlinesplanes.showPlanesAirline',['planes'=>$planes]);
    }

    public function showAirlines()
    {
        $airlines = Airline::all();
        return view('airlinesplanes.showAirlines',['airlines'=>$airlines]);
    }

    public function save(Request $request, $id)
    {
        $asignacion = new AirlinePlane();
        $airline_id = $request->get('airline');
        $airline = Airline::findOrFail($airline_id);
        $asignacion->airline_id = $airline_id;
        $plane = Plane::findOrFail($id);
        $asignacion->plane_id = $plane->id;
        $asignacion->save();
        return view('planes.showDetail',['plane'=>$plane,'airline'=>$airline]);
    }
}
