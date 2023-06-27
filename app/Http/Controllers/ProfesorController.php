<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response(Profesor::all(), 200);
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
    public function store(StoreProfesorRequest $request)
    {
        Profesor::create($request->all());
        return redirect()->back()->with('success', 'Profesor created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        return response($profesor, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesor)
    {
        $profesor->update($request->all());
        return redirect()->back()->with('success', 'Profesor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()->back()->with('success', 'Profesor deleted successfully');
    }

    public function buscarPorNombre($nombre)
    {
        $profesor = Profesor::where("nombre", "like", "%" . $nombre . "%")->get();
        return dd($profesor);
    }
}
