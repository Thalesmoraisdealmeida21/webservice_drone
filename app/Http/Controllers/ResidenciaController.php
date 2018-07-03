<?php

namespace App\Http\Controllers;


use App\Coletas;
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

    public function listCollects(){
        return Coletas::all();
    }

    public function collect(Request $request){
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i');
        $json = $request->all();
        Coletas::create($json);
        return response()->json($date, 201);
    }





}
