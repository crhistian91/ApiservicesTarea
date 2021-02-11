<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Traits\ApiResponser;
use App\Models\Tarea;

class TareaController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Description
     * @return type
     */
    public function index()
    {
         $tareas = Tarea::all();   
         return $this->successResponse($tareas);
    }

    public function store(Request $request)
    {
        $rules = [
            'Descripcion' => 'required|max:255',
            'prioridad'   => 'required|min:1',
            'usuario_id'  => 'required|min:1',
        ];

        $this->validate($request, $rules);
        $tarea = Tarea::create($request->all());
        return $this->successResponse($tarea, Response::HTTP_CREATED);
    }

    public function show($tarea)
    {
        
        $tarea = Tarea::findOrfail($tarea);
        return $this->successResponse($tarea, Response::HTTP_CREATED);   

    }

    public function update(Request $request, $tarea)
    {
        
        $rules = [
            'Descripcion' => 'max:255',
            'prioridad'   => 'min:1',
            'usuario_id'  => 'min:1',
        ];

        $this->validate($request, $rules);
        $tarea = Tarea::findOrfail($tarea);

        $tarea->fill($request->all());

        if ($tarea->isClean()) {
            return $this->errorResponse('Al Menos debe de cambiar un error', Response::HTTP_UNPROCESSABLE_ENTITY);       
        }

        $tarea->save();

        return $this->successResponse($tarea, Response::HTTP_CREATED);   
    }

    public function destroy($tarea)
    {
        
        $tarea = Tarea::findOrfail($tarea);
        $tarea->delete();

        return $this->successResponse($tarea);   
    }

}
