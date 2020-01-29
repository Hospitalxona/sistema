<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\minventarios;
use Illuminate\Validation\Rule;
use View;
use Validator;


class RolController extends Controller
{
    public function index()
    {
        return view('datatables.Rol');
    }

    public function showTable()
    {
        return Datatables::of(minventarios::query())->make(true);
    }


  public function show($id)
    {
        $data = minventarios::findOrFail($id);
        $dat = ["u"=>$data];
        $html = View::make('datatable.verRol',$dat)->render();
        return ['title'=>'Detalle de existencia a modificar','html'=>$html]; 
    }
////////////////////////////////////////////////////////////
    
  public function update(Request $request, $id)
    {
        $u = minventarios::findOrFail($id);

        $regla = ['nombre'=>'required'
                ];

        $valida = Validator::make($request->all(),$regla);
        
        if ($valida->fails()) {
            return ['status' => false,
                    'errors' => $valida->messages()];
        }        

        $u->nombre = $request->nombre;
        $u->save();

        return ['status'=>true,
                'out'=>'redirect',
                "route" => route('rol.index')];
    }

    public function home()
    {
        return view('home');
    }




}


