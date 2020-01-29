<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\notas;

class NotaEvaController extends Controller
{

   public function index()
    {
        return view('hospital.nota_evaluacion');
    }

    public function showTable()
    {
        return Datatables::of(notas::query())->make(true);
    }
}
