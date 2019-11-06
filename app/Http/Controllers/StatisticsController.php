<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
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

        

        $conexion = mysqli_connect('ec2-174-129-226-234.compute-1.amazonaws.com','gpyccnctwooafc','0e95e9275e84d6e924e6f0f2b9c31c928b8c6a4fa5928cfbaa2a99844fd10b85','ddf14bvpv247b');
        $variable=$_POST['temperatura'];
        $variable1=$_POST['humedad'];
        $variable2=$_POST['temperatura_apiario'];
             
        $sql="SELECT c.id,c.temperatura,a.id,a.entrada,c.apiario_id,a.apiario_id
            FROM clima_ambiente c 
            JOIN actividad a ON a.apiario_id=c.apiario_id
            WHERE c.temperatura=$variable";

        $sql1="SELECT c.id,c.temperatura,a.id,a.entrada,c.apiario_id,a.apiario_id
            FROM clima_ambiente c 
            JOIN actividad a ON a.apiario_id=c.apiario_id
            WHERE c.Porcentaje_humedad=$variable1";

        $sql2="SELECT c.id,c.temperatura,a.id,a.entrada,c.apiario_id,a.apiario_id
            FROM clima_apiario c 
            JOIN actividad a ON a.apiario_id=c.apiario_id
            WHERE c.temperatura=$variable2";    

        $result=mysqli_query($conexion,$sql);
        $result1=mysqli_query($conexion,$sql1);
        $result2=mysqli_query($conexion,$sql2);

        $consulta=[];
        $i=0;
            while($c=mysqli_fetch_array($result)){

                $consulta[$i]=$c['entrada'];
                $i++;
             }
        $consulta1=[];
        $i1=0;
             while($c2=mysqli_fetch_array($result1)){

                $consulta1[$i1]=$c2['entrada'];
                $i1++;
             }
        $consulta2=[];
        $i2=0;
             while($c3=mysqli_fetch_array($result2)){

                $consulta2[$i2]=$c3['entrada'];
                $i2++;
             }
                

    return view('statistics2',compact('consulta1','consulta','consulta2'));
                
    }
}

