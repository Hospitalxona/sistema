<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\minventarios;
use Illuminate\Validation\Rule;



class modalController extends Controller
{


	Public function index()
	{
		return view('usuario.inventario');
	}

    public function update(Request $request)
    {

        $category = minventarios::findOrFail($request->id_inventario);

        $category->update($request->all());
       
        return back();
    }



}