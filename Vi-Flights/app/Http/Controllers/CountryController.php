<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CountryController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:191',
        ]);
    }

    public function showCountries()
    {
        $countries = Country::orderBy('name','ASC')->paginate(3);
        return view('countries.showCountries',['countries'=>$countries]);
    }

    public function create()
    {
        return view('countries.create');
    }

    public function delete($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return redirect()->action("CountryController@showCountries")->with('status','País borrado correctamente');
    }

    public function save(Request $request)
    {
        $country = new Country();
        $country->name = $request->input('name');
        $image_path = $request->file('file-country');
        if($image_path)
        {
            $image_name = time().$image_path->getClientOriginalName();
            Storage::disk('countries')->put($image_name,File::get($image_path));
            $country->image = $image_name;
        }
        $country->save();
        return redirect()->action("CountryController@showCountries")->with('status','País insertado correctamente');
    }

    public function getImage($filename)
    {
        $file = Storage::disk('countries')->get($filename);
        return new Response($file,200);
    }
}
