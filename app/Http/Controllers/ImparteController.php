<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImparteRequest;
use App\Http\Requests\UpdateImparteRequest;
use App\Models\Imparte;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ImparteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response(Imparte::all(), 200);
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
    public function store(StoreImparteRequest $request)
    {
        Imparte::create($request->all());
        return redirect()->route('view.imparte')->with('success', 'Imparte created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Imparte $imparte)
    {
        return response($imparte, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Imparte $imparte)
    {
        //
    }

    /**
     * Update the specified resource in storage. UpdateImparteRequest
     */
    public function update(UpdateImparteRequest $request, $c_codclase, $p_idprofesor, $a_idaula)
    {
        $imparte = Imparte::where('c_codclase', $c_codclase)
            ->where('p_idprofesor', $p_idprofesor)
            ->where('a_idaula', $a_idaula)
            ->firstOrFail();

        $imparte->c_codclase = $request->input('c_codclase');
        $imparte->p_idprofesor = $request->input('p_idprofesor');
        $imparte->a_idaula = $request->input('a_idaula');
        // Update other fields as needed

        $imparte->save();

        return redirect()->route('view.imparte')->with('success', 'Imparte updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($c_codclase, $p_idprofesor, $a_idaula)
    {
        DB::table('imparte')
            ->where('c_codclase', $c_codclase)
            ->where('p_idprofesor', $p_idprofesor)
            ->where('a_idaula', $a_idaula)
            ->delete();

        return redirect()->back()->with('success', 'Imparte deleted successfully');
    }
}
