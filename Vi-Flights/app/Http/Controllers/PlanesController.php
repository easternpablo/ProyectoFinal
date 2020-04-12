<?php

namespace App\Http\Controllers;

use App\Plane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PlanesController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:191',
            'engines' => 'required|integer|max:11',
            'length' => 'required|string|max:191',
            'wingspan' => 'required|string|max:191',
            'range' => 'required|string|max:191',
            'seats' => 'required|integer|max:11',
            'routes' => 'required|string|max:191',
            'units' => 'required|integer|max:11',
        ]);
    }

    public function index()
    {
        return view('planes.gestion');
    }

    public function showPlanes()
    {
        $planes = Plane::orderBy('name','ASC')->paginate(3);
        return view('planes.show',['planes'=>$planes]);
    }

    public function showDetail($id)
    {
        $plane = Plane::findOrFail($id);
        $airline = DB::table('airlines')
                    ->join('airlinesplanes','airlines.id','=','airlinesplanes.airline_id')
                    ->join('planes','planes.id','=','airlinesplanes.plane_id')
                    ->select('airlines.name','airlines.image')
                    ->where('planes.id','=',$id)
                    ->first();
        return view('planes.showDetail',['plane'=>$plane,'airline'=>$airline]);
    }

    public function create()
    {
        return view('planes.create');
    }

    public function delete($id)
    {
        $plane = Plane::findOrFail($id);
        $plane->delete();
        return redirect()->action("PlanesController@showPlanes")->with('status','Avión eliminado correctamente');
    }

    public function save(Request $request)
    {
        $plane = new Plane();
        $plane->name = $request->input('name');
        $plane->engines = $request->input('engines');
        $plane->length = $request->input('length');
        $plane->wingspan = $request->input('wingspan');
        $plane->range = $request->input('range');
        $plane->seats = $request->input('seats');
        $plane->routes = $request->input('routes');
        $plane->units = $request->input('units');
        $image_path1 = $request->file('file-plane1');
        if($image_path1)
        {
            $image_name1 = time().$image_path1->getClientOriginalName();
            Storage::disk('planes')->put($image_name1,File::get($image_path1));
            $plane->image = $image_name1;
        }
        $image_path2 = $request->file('file-plane2');
        if($image_path2)
        {
            $image_name2 = time().$image_path2->getClientOriginalName();
            Storage::disk('planes')->put($image_name2,File::get($image_path2));
            $plane->image2 = $image_name2;
        }
        $plane->save();
        return redirect()->action("PlanesController@showPlanes")->with('status','Avión insertado correctamente');
    }

    public function getImage($filename)
    {
        $file = Storage::disk('planes')->get($filename);
        return new Response($file,200);
    }
}
