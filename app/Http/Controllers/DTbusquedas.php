<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
USE DB;

class DTbusquedas extends Controller
{
     /**
     * @return mixed
     */
    public function dtindex()
    {
        return view('dtindex');
    }

    /**
     * @return mixed
     */
    public function getbusqueda()
    {
        $recetas_medicas = recetas_medicas::select(['Id_receta','Nombre','Apellido_P','Apellido_M']);

        return Datatables::of($recetas_medicas)

            ->make(true);
    }

}
