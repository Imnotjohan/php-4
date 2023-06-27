<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAulaRequest;
use App\Http\Requests\UpdateAulaRequest;
use Illuminate\Http\Request;
use App\Models\Aula;
use App\Models\Imparte;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aula = Aula::all();
        return response()->json($aula);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAulaRequest $request)
    {
        Aula::create($request->all());
        return response("Creado", 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Aula $aula)
    {
        return response($aula, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aula $aula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAulaRequest $request, Aula $aula)
    {
        // Update the Aula record based on the request data
        $aula->nombre = $request->input('nombre');
        $aula->ubicacion = $request->input('ubicacion');
        // Update any other fields as needed

        $aula->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aula $aula)
    {
        $aula->delete();
        return response("Profesor borrado", 200);
    }

    public function buscarPorNombre($nombre)
    {
        $aula = Aula::where("nombre", "like", "%" . $nombre . "%")->get();
        return dd($aula);
    }

    public function imparte($id)
    {
        $aula = Aula::find($id);
        $imparters = $aula->imparter;
        return response()->json($imparters);
    }
}
