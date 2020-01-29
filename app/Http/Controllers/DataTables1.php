<?php

namespace App\Http\Controllers;
use Datatables;
use app\recetas_medicas;

use Illuminate\Http\Request;

class DataTables1 extends Controller
{
    public function index()

    {
       return view('datatables.home');
    }

    public function getresultado()

    {
         $recetas_medicas = recetas_medicas::select(['Id_receta','Nombre','Apellido_P']);

        return Datatables::of($recetas_medicas)

            ->make(true);
    }





}
