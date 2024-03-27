<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\matereil;

class matereils extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matereil = matereil::class::all();
        return view('matereils.index' , ['matereil' => $matereil]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matereils.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prix' => 'required'
        ]);
        $matereil = new matereil([
            'nom' => $request->get('nom'),
            'prix' => $request->get('prix')
        ]);
        $matereil->save();
        return redirect()->route('matereils.index')->with('success' , 'Matereil a bien Ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show($mt)
    {
        return view('matereils.show' , ['mt'  => matereil::findOrFail($mt)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($mt)
    {
        return view('matereils.edit' , ['mt'  => matereil::findOrFail($mt)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $mt)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prix' => 'required'
        ]);

        $matereils = matereil::findOrFail($mt);
        $matereils->nom = $request->get('nom');
        $matereils->prix = $request->get('prix');
        $matereils->save();
    
        return redirect()->route('matereils.show' , ['matereil' => $mt])->with('success' , 'Matereil a bien Modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($mt)
    {
        $matereils = matereil::findOrFail($mt);
        $matereils -> delete();
        return redirect()->route('matereils.index');
    }
}
