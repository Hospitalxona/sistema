<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\estudios_gabinetes;

class EstudioGabiController extends Controller
{
    public function index()
    {
        return view('hospital.estudio_gabinete');
    }

    public function showTable()
    {
        return Datatables::of(estudios_gabinetes::query())->make(true);
    }
}
