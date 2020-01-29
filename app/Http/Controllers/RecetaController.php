<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;
use App\recetas_medicas;

class RecetaController extends Controller
{
    public function index()
    {
        return view('hospital.receta');
    }

    public function showTable()
    {
        return Datatables::of(recetas_medicas::query())->make(true);
    }
}
