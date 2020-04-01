<?php

namespace App\Http\Controllers;

use App\Airline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AirlineController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'iata' => 'required|string|iata|max:191|unique:airlines,iata',
            'oaci' => 'required|string|oaci|max:191|unique:airlines,oaci',
            'name' => 'required|string|name|max:100|unique:airlines,name',
            'company' => 'required|string|max:100',
            'director' => 'required|string|max:100',
            'headquarter' => 'required|string|max:50',
        ]);
    }

    public function showAirlines(){
        $airlines = Airline::all();
        return view('airlines.show',['airlines'=>$airlines]);
    }
}
