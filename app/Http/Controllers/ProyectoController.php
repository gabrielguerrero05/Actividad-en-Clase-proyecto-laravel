<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;


class ProyectoController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyecto.index', ['proyectos' => $proyectos]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:proyectos',
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
        ]);
        $proyecto = new Proyecto();
        $proyecto->id = $request->id;
        $proyecto->nombre = $request->nombre;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->imagen = $request->imagen;
        $proyecto->save();
        return redirect()->route('proyecto.view')->with('success', 'Proyecto creado exitosamente.');
    }
    public function store(Request $request)
    {
        $request->validate([
            "nombre"=>"required",
            "descripcion"=>"required",
            "imagen"=>"required"
        ]);
        Proyecto::create($request->all());
        return redirect()->route("proyecto.index")
        ->with("success","Proyecto creado correctamente");
    }
    public function show(Proyecto $proyecto)
    {
        Proyecto::find($proyecto);
        return view("proyecto.show",["proyecto"=>$proyecto]);
    }
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyecto.edit', compact('proyecto'));
    }
    public function update(Request $request, Proyecto $id)
    {
        $request->validate([
            'id' => 'required|unique:proyectos,id,'.$id,
            'nombre' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required',
        ]);

        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());

        return redirect()->route('proyecto.index')->with('success', 'Proyecto actualizado correctamente');
    }
    public function destroy($id)
    {
        $producto = Proyecto::find($id);
        $producto->delete();
        return redirect( )->route("proyecto.index")
        ->with("success","Proyecto eliminado correctamente");
    }
}
