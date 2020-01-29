<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\consentimientos_informados;

class ConsentimientoInfController extends Controller
{
     public function index()
    {
        return view('hospital.consentimiento_informado');
    }

    public function showTable()
    {
        return Datatables::of(consentimientos_informados::query())->make(true);
    }
}
