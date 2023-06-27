<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClaseRequest;
use App\Http\Requests\UpdateClaseRequest;
use App\Models\Clase;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response(Clase::all(), 200);
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
    public function store(StoreClaseRequest $request)
    {
        Clase::create($request->all());
        return redirect()->back()->with('success', 'Clase created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clase $clase)
    {
        return response($clase, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clase $clase)
    {
        //
    }

    public function update(UpdateClaseRequest $request, $codclase)
    {
        $clase = Clase::where('codclase', $codclase)->firstOrFail();
        $clase->nombre = $request->input('nombre');
        $clase->credito = $request->input('creditos');
        $clase->save();

        return redirect()->back()->with('success', 'Clase updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clase $clase)
    {
        $clase->delete();
        return redirect()->back()->with('success', 'Clase deleted successfully');
    }

    public function buscarPorNombre($nombre)
    {
        $clase = Clase::where("nombre", "like", "%" . $nombre . "%")->get();
        return response()->json($clase);
    }

    public function imparte($id)
    {
        $clase = Clase::find($id);
        $imparters = $clase->imparter;
        return response()->json($imparters);
    }
}
