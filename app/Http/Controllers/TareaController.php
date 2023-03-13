<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Empleado;
use Illuminate\Http\Request;
use DB;
use Auth;

/**
 * Class TareaController
 * @package App\Http\Controllers
 */
class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::paginate();

        return view('tarea.index', compact('tareas'))
            ->with('i', (request()->input('page', 1) - 1) * $tareas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarea = new Tarea();
        $empleado = Empleado::pluck('nombre','id');
        return view('tarea.create', compact('tarea','empleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tarea::$rules);

        $tarea = Tarea::create($request->all());

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tarea::find($id);

        return view('tarea.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea = Tarea::find($id);
        $empleado = Empleado::pluck('nombre','id');

        return view('tarea.edit', compact('tarea','empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tarea $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        request()->validate(Tarea::$rules);

        $tarea->update($request->all());

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tarea = Tarea::find($id)->delete();

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea deleted successfully');
    }

    //buscar
    public function search(Request $request){
    
    
        $fromdate = $request->input('fromDate');
        $todate = $request->input('toDate');

        $query = DB::table('tareas')->select()
        ->where('fecha_inicio','>=',$fromdate)
        ->where('fecha_inicio','<=', $todate)
        ->get();
        dd($query);    
        
        //$query = \DB::select("SELECT * FROM tareas WHERE fecha_inicio BETWEEN '$fromdate 00:00:00'AND'$todate 23:59:59'");
    
       
        return view('tareas.index', compact('query'));
    }
    
    

}
