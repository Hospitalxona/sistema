<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\consultas_urgencias;

class ConsultaUrgController extends Controller
{
   public function index()
    {
        return view('hospital.consulta_urgencia');
    }

   public function showTable()
    {
        return Datatables::of(consultas_urgencias::query())->make(true);
    }
}
