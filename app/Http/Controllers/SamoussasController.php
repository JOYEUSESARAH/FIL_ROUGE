<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Samoussas;


class SamoussasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $samoussas = Samoussas::all();
        return view('Samoussas.liste', compact('samoussas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Samoussas.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'nom'=>'required',
            'description'=>'required',
            'prix'=>'required',
            'stock_disponible'=>'required',
            'photo'=>'required',


        ]);

        $samoussas = new Samoussas();
        $samoussas->nom = $request->nom;
        $samoussas->description = $request->description;
        $samoussas->prix = $request->prix;
        $samoussas->stock_disponible = $request->stock_disponible;
        $samoussas->photo = $request->photo->store('photo','public');

        $samoussas->save();

        return redirect()->route('samoussas.index')->with('status', 'Samoussas a  été ajouté avec succes.');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {

        return view('Samoussas.detail', [

            'Samoussas' => Samoussas::find($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $samoussas = Samoussas::find($id);
        return view('Samoussas.modifier',compact('samoussas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $samoussas = Samoussas::find($id);

        $samoussas->update([
            'nom' => $request->nom,
            'description' => $request->prenom,
            'prix' => $request->date_naissance,
            'stock_disponible' => $request->adresse,
            'photo'  => $request->sexe,
        ]);

        return redirect()->route('samoussas.index')->with('status', 'Samoussa a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $samoussas = Samoussas::find($id);
        $samoussas->delete();
        return redirect()->route('samoussas.index')->with('status', 'Samoussa a  été supprimé avec succes.');
    }
}
