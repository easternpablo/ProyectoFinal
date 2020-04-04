<?php

namespace App\Http\Controllers;

use App\Airline;
use App\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AirlineController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'iata' => 'required|string|iata|max:191|unique:airlines,iata,'.$data->id,
            'oaci' => 'required|string|oaci|max:191|unique:airlines,oaci,'.$data->id,
            'name' => 'required|string|name|max:100|unique:airlines,name,'.$data->id,
            'company' => 'required|string|max:100',
            'director' => 'required|string|max:100',
            'headquarter' => 'required|string|max:50',
            'airport_id' => 'required|integer|max:20',
        ]);
    }

    public function showAirlines()
    {
        $airlines = Airline::with('Airport')->orderBy('name','ASC')->paginate(3);
        return view('airlines.show',['airlines'=>$airlines]);
    }

    public function create()
    {
        $airports = Airport::all();
        return view('airlines.create',['airports'=>$airports]);
    }

    public function showDetail($id)
    {
        $airline = Airline::with('airport')->findOrFail($id);
        return view('airlines.showDetail',['airline'=>$airline]);
    }

    public function delete($id)
    {
        $airline = Airline::findOrFail($id);
        $airline->delete();
        return redirect()->action("AirlineController@showAirlines")->with('status','Aerolinea borrada correctamente');
    }

    public function save(Request $request)
    {
        $airline = new Airline();
        $airline->iata = $request->input('iata');
        $airline->oaci = $request->input('oaci');
        $airline->name = $request->input('name');
        $airline->company = $request->input('company');
        $airline->director = $request->input('director');
        $airline->headquarter = $request->input('headquarter');
        $airline->airport_id = $request->get('airport');
        $image_path = $request->file('file-airline');
        if($image_path)
        {
            $image_name = time().$image_path->getClientOriginalName();
            Storage::disk('airlines')->put($image_name,File::get($image_path));
            $airline->image = $image_name;
        }
        $airline->save();
        return redirect()->action("AirlineController@showAirlines")->with('status','Aerolinea insertada correctamente');
    }

    public function getImage($filename)
    {
        $file = Storage::disk('airlines')->get($filename);
        return new Response($file,200);
    }
}
