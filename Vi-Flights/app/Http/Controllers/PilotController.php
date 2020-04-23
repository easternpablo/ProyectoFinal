<?php

namespace App\Http\Controllers;

use App\Pilot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PilotController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'pilot_number' => 'required|string|pilot_number|max:191|unique:pilots,pilot_number,'.$data->id,
            'nif' => 'required|string|nif|max:191|unique:pilots,nif,'.$data->id,
            'name' => 'required|string|max:191',
            'lastname' => 'required|string|max:191',
            'email' => 'required|string|email|max:30|unique:pilots,email,'.$data->id,
            'phone' => 'required|string|phone|max:191|unique:pilots,phone,'.$data->id,
            'rank' => 'required|string|max:191',
            'birth_date' => 'required|date',
            'license_date' => 'required|date',
            'nationality' => 'required|string|max:191',
        ]);
    }

    public function showDetail($id)
    {
        $pilot = Pilot::findOrFail($id);
        return view('pilots.showDetail',['pilot'=>$pilot]);
    }

    public function showPilots()
    {
        $pilots = Pilot::orderBy('lastname','ASC')->paginate(4);
        return view('pilots.show',['pilots'=>$pilots]);
    }

    public function create()
    {
        return view('pilots.create');
    }

    public function delete($id)
    {
        $pilot = Pilot::findOrFail($id);
        $pilot->delete();
        return redirect()->action('PilotController@showPilots')->with('status','Piloto eliminado correctamente');
    }

    public function save(Request $request)
    {
        $pilot = new Pilot();
        $pilot->pilot_number = $request->input('pilot_number');
        $pilot->license_date = $request->input('license_date');
        $pilot->nif = $request->input('nif');
        $pilot->name = $request->input('name');
        $pilot->lastname = $request->input('lastname');
        $pilot->email = $request->input('email');
        $pilot->phone = $request->input('phone');
        $pilot->birth_date = $request->input('birth_date');
        $pilot->nationality = $request->input('nationality');
        $pilot->rank = $request->get('rank');
        $image_path = $request->file('file-pilot');
        if($image_path)
        {
            $image_name = time().$image_path->getClientOriginalName();
            Storage::disk('pilots')->put($image_name,File::get($image_path));
            $pilot->image = $image_name;
        }
        $pilot->save();
        return redirect()->action("PilotController@showPilots")->with('status','Piloto insertado correctamente');
    }

    public function getImage($filename)
    {
        $file = Storage::disk('pilots')->get($filename);
        return new Response($file,200);
    }
}
