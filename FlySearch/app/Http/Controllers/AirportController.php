<?php

namespace App\Http\Controllers;

use App\Airport;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AirportController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'iata' => 'required|string|iata|max:191|unique:airports,iata,'.$data->id,
            'oaci' => 'required|string|oaci|max:191|unique:airports,oaci,'.$data->id,
            'name' => 'required|string|name|max:191|unique:airports,name,'.$data->id,
            'coordinates' => 'required|string|max:191',
            'city_id' => 'required|integer|max:20',
            'type' => 'required|string|max:191',
            'owner' => 'required|string|max:191',
            'operator' => 'required|string|max:191',
        ]);
    }

    public function form()
    {
        return view('airports.gestion-destinos');
    }

    public function showAirports()
    {
        $airports = Airport::with('City')->orderBy('name','ASC')->paginate(4);
        return view('airports.showAirports',['airports'=>$airports]);
    }

    public function showDetail($id)
    {
        $airport = Airport::with('City')->findOrFail($id);
        return view('airports.showDetail',['airport'=>$airport]);
    }

    public function create()
    {
        $cities = City::all();
        return view('airports.create',['cities'=>$cities]);
    }

    public function delete($id)
    {
        $airport = Airport::findOrFail($id);
        $airport->delete();
        return redirect()->action("AirportController@showAirports")->with('status','Aeropuerto borrado correctamente');
    }

    public function save(Request $request)
    {
        $airport = new Airport();
        $airport->iata = $request->input('iata');
        $airport->oaci = $request->input('oaci');
        $airport->name = $request->input('name');
        $airport->coordinates = $request->input('coordinates');
        $airport->city_id = $request->get('city');
        $airport->type = $request->input('type');
        $airport->owner = $request->input('owner');
        $airport->operator = $request->input('operator');
        $image_path = $request->file('file-airport');
        if($image_path)
        {
            $image_name = time().$image_path->getClientOriginalName();
            Storage::disk('airports')->put($image_name,File::get($image_path));
            $airport->image = $image_name;
        }
        $airport->save();
        return redirect()->action("AirportController@showAirports")->with('status','Aeropuerto insertado correctamente');
    }

    public function getImage($filename)
    {
        $file = Storage::disk('airports')->get($filename);
        return new Response($file,200);
    }
}
