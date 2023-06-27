<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\Clase;
use App\Models\Imparte;
use App\Models\Profesor;

class ViewController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function aula()
    {
        $aulas = Aula::all();
        return view('aula', compact('aulas'));
    }

    public function aulaEdit($id)
    {
        $aula = Aula::find($id);
        return view('aula-edit', compact('aula'));
    }

    public function clase()
    {
        $clases = Clase::all();
        return view('clase', compact('clases'));
    }

    public function claseEdit($clase)
    {
        $clase = Clase::where('codclase', $clase)->first();
        return view('clase-edit', ['clase' => $clase]);
    }

    public function profesor()
    {
        $profesores = Profesor::all();
        return view('profesor', compact('profesores'));
    }

    public function profesorEdit($id)
    {
        $profesor = Profesor::find($id);
        return view('profesor-edit', compact('profesor'));
    }

    public function imparte()
    {
        $impartes = Imparte::all();
        return view('imparte', compact('impartes'));
    }

    public function imparteEdit($c_codclase, $p_idprofesor, $a_idaula)
    {
        $imparte = Imparte::where('c_codclase', $c_codclase)
            ->where('p_idprofesor', $p_idprofesor)
            ->where('a_idaula', $a_idaula)
            ->firstOrFail();

        return view('imparte-edit', compact('imparte'));
    }
}
