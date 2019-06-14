<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio()
    {
        $notas = App\Nota::paginate(4);
        return view('welcome', compact('notas'));
    }

    public function fotos()
    {
        return view('fotos');
    }

    public function blog()
    {
        $blog = App\blog::paginate(4);
        return view('blog', compact('blog'));
    }

    public function nosotros($nombre = null)
    {
        $equipo = App\User::paginate(3);
        //return view('nosotros', ['equipo' => $equipo, 'nombre']=>$nombre);
        return view('nosotros', compact('equipo', 'nombre'));
    }

    public function detalle($id)
    {
        $nota = App\Nota::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }

    public function crear(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;
        $notaNueva->save();
        return back()->with('mensaje', 'Nota Agregada');
    }

    public function editar($id)
    {
        $nota = App\Nota::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }

    public function update(Request $request, $id)
    {
        $notaUpdate = App\Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;
        $notaUpdate->save();
        return back()->with('mensaje', 'Nota actualizada');
    }

    public function eliminar($id)
    {
        $notaEliminar = App\Nota::findOrFail($id);
        $notaEliminar->delete();
        return back()->with('mensaje', 'Nota Eliminada');
    }
}
