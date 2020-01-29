<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\minventarios;
use Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use View;


class MinventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inventario.inventarios');
    }

    public function showTable()
    {
        return Datatables::of(minventarios::query())->make(true);
    }

    public function show($id)
    {
        $data = minventarios::findOrFail($id);
        $dat = ["u"=>$data];
        $html = View::make('inventario.verInventario',$dat)->render();
        return ['title'=>'Detalle','html'=>$html]; 
    }


    public function edit($id)
    {
        $u = minventarios::findOrFail($id);
        
        return view('inventario.editaInventario', ["u" => $u]); 
    }


    public function update(Request $request, $id)
    {
        $u = minventarios::findOrFail($id);
        $u->name = $request->name;
        $u->save();

        return ['status'=>true,
                'out'=>'redirect',
                "route" => route('inventarios.index')];
    }


}
