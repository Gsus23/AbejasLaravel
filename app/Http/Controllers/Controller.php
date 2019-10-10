<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
>>>>>>> 13fc306447caaeb6437ade16f0f3ec779f90c2f5
=======
use Illuminate\Support\Facades\DB;
>>>>>>> 13fc306447caaeb6437ade16f0f3ec779f90c2f5

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function imprimir(Request $request){

        $fecha = $request-> input("fecha_ingresada");
        $apiario = \DB::table('apiario')
                    ->join('users','apiario.user_id','=','users.id')
                    ->join('ubicacion','apiario.ubicacion_id','=','ubicacion.id')
                    ->join('clima_apiario','clima_apiario.apiario_id','=','apiario.id')
                    ->select('apiario.nombre','users.name','ubicacion.url')
                    ->where('clima_apiario.fecha','=',$fecha)
                    ->get();
        $pdf = \PDF::loadView('/generadorPDF',compact('apiario'));
        return $pdf->download('ejemplo.pdf');
    }

    function consultar(Request $request){

       
        $temperatura = $request->input("temperatura");

        $actividades = DB::table('actividad')->join('clima_ambiente','actividad.apiario_id','=','clima_ambiente.apiario_id')->where('clima_ambiente.temperatura',$temperatura)->get();

         return view('statistics',compact('actividades'));
    }
     
}
