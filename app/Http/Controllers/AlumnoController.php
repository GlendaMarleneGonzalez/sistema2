<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Depto;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /** Display a listing of the resource. **/
    public function index()
    {
        if (request('txtbuscar')){
            $txtbuscar = request('txtbuscar');
        }
            else{
                $txtbuscar = " ";
            }

        $alumnos = Alumno::with('carrera.depto')
                            ->where('nombre','like', $txtbuscar.'%') //el porciento lleva es un a funcion depende de 
                            ->paginate(5);
        $deptos = Depto::get();
        //return view("alumnos/index", ['alumnos' => $alumno]);
        return view("alumnos2/index", compact("alumnos"));
    }


    /** Show the form for creating a new resource. **/
    public function create()
    {
        $alumnos = Alumno::paginate(5);
        $alumno = new Alumno;
        $alumno = "C";
        return view ("alumnos.frm", compact("alumnos", "alumno", "accion"));
    }


    /** Store a newly created resource in storage. **/
    public function store(Request $request)
    {
        $val = $request->validate([
            'nombre'=>'required',
            'apellidop'=>'required',
            'email'=>'required',
        ]);
        Alumno::create($val);
        return redirect()->route("alumnos2.index")->with("mensaje","se inserto correctamente");
    }

    /** Display the specified resource. **/
    public function show(Alumno $alumno)
    {
        $alumnos = Alumno::paginate(5);
        return view('alumnos.show', compact('alumnos', 'alumno'));
    }

    /** Show the form for editing the specified resource. **/
    public function edit(Alumno $alumno)
    {
        $alumnos=Alumno::paginate(5);
        $alumno = "C";
        return view('alumnos/edit', compact('alumnos', 'alumno', 'accion'));
    }

    /** Update the specified resource in storage. **/
    public function update(Request $request, Alumno $alumno)
    {
        //aqui se actualizaran los datos
        $alumno->update($request->all());
        return redirect()->route('alumnos.index');
    }

    /** Remove the specified resource from storage. **/
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route("alumnos.index");
    }
}