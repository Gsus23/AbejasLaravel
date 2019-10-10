<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiarioController extends Controller
{
    public function index()
    {
        $apiario = \DB::table('apiario')->select('nombre','user_id','ubicacion_id')->get();
        return view('reports', compact('apiario'));
    }
}
