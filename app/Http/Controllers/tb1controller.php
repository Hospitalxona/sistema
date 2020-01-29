<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\minventarios;
use Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use View;


class tb1controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventario.tb1');
    }

    public function showTable()
    {
        return Datatables::of(minventarios::query())->make(true);
    }
    public function show($id)
    {
        $data = minventarios::findOrFail($id);
        $dat = ["u"=>$data];
        $html = View::make('inventario.tb1',$dat)->render();
        return ['title'=>'Detalle','html'=>$html]; 
    }


    public function edit($id)
    {
        $u = minventarios::findOrFail($id);
        
        return view('inventario.tb1', ["u" => $u]); 
    }


   


}
