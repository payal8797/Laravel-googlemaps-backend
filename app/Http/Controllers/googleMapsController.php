<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\googleMaps;

class googleMapsController extends Controller
{
    //
    public function index()
    {
        $data = googleMaps::all();
        return response()->json(['myData' => $data],200);
    }

    public function store(Request $request)
    {
        //return response()->json( json_decode($request->arrayMaps), 200);
        $places = json_decode($request->arrayMaps);
        foreach($places as $place){
        $GoogleMaps = new GoogleMaps;
        $GoogleMaps->types = $request->type;
        $GoogleMaps->name = $place->name;
        $GoogleMaps->vicinity = $place->vicinity;
        $GoogleMaps->save();
        }
        return 'Congrats!! Places Submitted!!';
    }

}
