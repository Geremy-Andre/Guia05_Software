<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
{
    public function index(){

        //return DB::select("select * from alumnos");
        $alumnos = Alumno::all();

        return view('Alumnos.index',compact('alumnos'));

    }

    public function create()
    {
        return view('alumnos.create');
    }

    public function store(Request $request)
    {
        //return $request->all();
        $alumno = new Alumno();
        $alumno->cod_estudiante = $request->codigo;
        $alumno->dni = $request->dni;
        $alumno->nombres = $request->name;
        $alumno->apellidos = $request->apellidos;
        $alumno->save();

        return redirect()->route('alumnos.index');
    }

    public function edit($codigo)
    {
        $alumno=Alumno::where('cod_estudiante','=',$codigo)->first();
        return view('alumnos.edit',compact('alumno'));
    }
    public function update(Request $request,$codigo)
    {
        Alumno::where('cod_estudiante','=',$codigo)->update(array(
            'cod_estudiante'=>$request->codigo,
            'nombres'=>$request->nombres,
            'apellidos'=>$request->apellidos,
            'dni'=>$request->dni));

        return redirect()->route('alumnos.index');
    }
    public function destroy($codigo)
    {
        $alumno = Alumno::where('cod_estudiante','=',$codigo);
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
