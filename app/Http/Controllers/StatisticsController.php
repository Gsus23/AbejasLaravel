<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class StatisticsController extends Controller
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
        return view('statistics');
    }

    public function store(){

        $variable=$_POST['temperatura'];              
        $actividades = DB::table('actividad')->join('clima_ambiente','actividad.apiario_id','=','clima_ambiente.apiario_id')->where('clima_ambiente.temperatura',$variable)->get();
        
      
        return view('statistics',compact('actividades'));


    }
}

