<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AnalysisController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('analysis');
    }

    public function store(){

        $variable = $_POST['fecha_ingresada'];    

        $con = \DB::table('clima_ambiente')
                ->join('actividad','clima_ambiente.fecha','=','actividad.fecha')
                ->select('actividad.fecha')
                ->where('clima_ambiente.fecha','=',$variable,'&&','actividad.entrada','Between ','00','And','6')
                ->max('actividad.entrada');

        $con1 = \DB::table('clima_ambiente')
                ->join('actividad','clima_ambiente.fecha','=','actividad.fecha')
                ->select('actividad.fecha')
                ->where('clima_ambiente.fecha','=',$variable,'&&','actividad.entrada','Between ','6','And','12')
                ->max('actividad.entrada');

        $con2 = \DB::table('clima_ambiente')
                ->join('actividad','clima_ambiente.fecha','=','actividad.fecha')
                ->select('actividad.fecha')
                ->where('clima_ambiente.fecha','=',$variable,'&&','actividad.entrada','Between ','12','And','18')
                ->max('actividad.entrada');

        $con3 = \DB::table('clima_ambiente')
                ->join('actividad','clima_ambiente.fecha','=','actividad.fecha')
                ->select('actividad.fecha')
                ->where('clima_ambiente.fecha','=',$variable,'&&','actividad.entrada','Between ','18','And','00')
                ->max('actividad.entrada');




                
        return view('analysis2',compact('con','con1','con2','con3'));  
    }
}
