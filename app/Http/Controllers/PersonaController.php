<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PersonaModel;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $persona = PersonaModel::paginate();
        return view('persona.index', compact('personas'))
        ->with('i', (request()->input('page', 1)-1)* $persona->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
        $personas = PersonaModel::all();
        return view('persona.create', compact('personas' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
