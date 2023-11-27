<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Livraisons;


class LivraisonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livraisons = Livraisons::all();
        return view('Livraisons.liste', compact('livraisons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Livraisons.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'date_heure'=>'required',
            'statut_livraison'=>'required',



        ]);

        $livraisons = new Livraisons();
        $livraisons->date_heure = $request->date_heure;
        $livraisons->statut_livraison = $request->statut_livraison;
        $livraisons->photo = $request->photo->store('photo','public');

        $livraisons->save();

        return redirect()->route('livraisons.index')->with('status', 'Samoussas a  été ajouté avec succes.');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {

        return view('Livraisons.detail', [

            'livraisons' => Livraisons::find($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livraisons = Livraisons::find($id);
        return view('Livraisons.modifier',compact('livraisons'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $livraisons = Livraisons::find($id);

        $livraisons->update([
            'date_heure' => $request->nom,
            'statut_livraison' => $request->description,
        
        ]);

        return redirect()->route('livraisons.index')->with('status', 'livraison a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $livraisons = Livraisons::find($id);
        $livraisons->delete();
        return redirect()->route('livraisons.index')->with('status', 'livraison a  été supprimé avec succes.');
    }
}
