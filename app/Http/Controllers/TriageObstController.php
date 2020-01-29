<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;
use App\triages16_obstetricos;

class TriageObstController extends Controller
{
   public function index()
    {
        return view('hospital.triage_obstetricos');
    }

    public function showTable()
    {
        return Datatables::of(triages16_obstetricos::query())->make(true);
    }

}
