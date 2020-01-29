<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\citas;
use Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use View;

class CitasController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('citas.Vcitas');
    }

    public function showTable()
    {
        return Datatables::of(citas::query())->make(true);
    }

    public function show($id)
    {
        $data = citas::findOrFail($id);
        $dat = ["u"=>$data];
        $html = View::make('citas.VerCitas',$dat)->render();
        return ['title'=>'Registrar Asistencia','html'=>$html]; 
    }


    public function edit($id)
    {
        $u = citas::findOrFail($id);
        
        return view('inventario.editaInventario', ["u" => $u]); 
    }


    public function update(Request $request, $id)
    {
        $u = citas::findOrFail($id);      

        $u->asistencia = $request->asistencia;
        $u->save();

        return ['status'=>true,
                'out'=>'redirect',
                "route" => route('citas.index')];
    }

}
