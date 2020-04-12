<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CityController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'country_id' => 'required|integer|max:20',
            'name' => 'required|string|max:191',
        ]);
    }

    public function showCities()
    {
        $cities = City::with('Country')->orderBy('name','ASC')->paginate(3);
        return view('cities.showCities',['cities'=>$cities]);
    }

    public function create()
    {
        $countries = Country::all();
        return view('cities.create',['countries'=>$countries]);
    }

    public function delete($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect()->action("CityController@showCities")->with('status','Ciudad borrada correctamente');
    }

    public function save(Request $request)
    {
        $city = new City();
        $city->country_id = $request->get('country');
        $city->name = $request->input('name');
        $image_path = $request->file('file-city');
        if($image_path)
        {
            $image_name = time().$image_path->getClientOriginalName();
            Storage::disk('cities')->put($image_name,File::get($image_path));
            $city->image = $image_name;
        }
        $city->save();
        return redirect()->action("CityController@showCities")->with('status','Ciudad insertada correctamente');
    }

    public function getImage($filename)
    {
        $file = Storage::disk('cities')->get($filename);
        return new Response($file,200);
    }
}
