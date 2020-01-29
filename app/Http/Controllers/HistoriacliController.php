<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\historias_clinicas;

class HistoriacliController extends Controller
{
   public function index()
    {
        return view('hospital.Historiacli');
    }

    public function showTable()
    {
        return Datatables::of(historias_clinicas::query())->make(true);
    }
}
