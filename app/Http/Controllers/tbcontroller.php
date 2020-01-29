<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_cie10;
use Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use View;


class tbcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventario.tb');
    }

    public function showTable()
    {
        return Datatables::of(tb_cie10::query())->make(true);
    }
    public function show($id)
    {
        $data = tb_cie10::findOrFail($id);
        $dat = ["u"=>$data];
        $html = View::make('inventario.tb',$dat)->render();
        return ['title'=>'Detalle','html'=>$html]; 
    }


    public function edit($id)
    {
        $u = tb_cie10::findOrFail($id);
        
        return view('inventario.tb', ["u" => $u]); 
    }


   


}
