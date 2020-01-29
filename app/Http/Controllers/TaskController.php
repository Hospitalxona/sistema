<?php

namespace App\Http\Controllers;

use App\Task;
use App\recetas_medicas;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
USE DB;

/**
 * Class TaskController
 * @package App\Http\Controllers
 */
class TaskController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @return mixed
     */
    public function getTasks()
    {
        $tasks = Task::select(['id','name','category','state']);

        return Datatables::of($tasks)

            ->make(true);
    }
     /**
     * @return mixed
     */
    public function recetas()
    {
        return view('recetas');
    }

    /**
     * @return mixed
     */
    public function getrecetas()
    {
        $recetas_medicas = recetas_medicas::select(['Id_receta','Nombre','Apellido_P','Apellido_M']);

        return Datatables::of($recetas_medicas)

            ->make(true);
    }

}
