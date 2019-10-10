<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function imprimir(){
        $pdf = \PDF::loadView('/generadorPDF');
        return $pdf->download('ejemplo.pdf');
    }

    function consultar(Request $request){

       
        $temperatura = $request->input("temperatura");

        $actividades = DB::table('actividad')->join('clima_ambiente','actividad.apiario_id','=','clima_ambiente.apiario_id')->where('clima_ambiente.temperatura',$temperatura)->get();

         return view('statistics',compact('actividades'));
    }
     
}
