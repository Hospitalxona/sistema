<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\triages_obstetricos;

class HojaTriageController extends Controller
{
    public function index()
    {
        return view('hospital.hoja_triage');
    }

    public function showTable()
    {
        return Datatables::of(triages_obstetricos::query())->make(true);
    }
}
