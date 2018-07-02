<?php

namespace App\Http\Controllers;


use App\Residencias;
use Illuminate\Http\Request;

class ResidenciaController extends Controller
{

    public function listResidences(){
        return Residencias::all();
    }

    public function store(Request $request)
    {
        $json = $request->all();
        Residencias::create($json);
        return response()->json('', '201');
    }

}
