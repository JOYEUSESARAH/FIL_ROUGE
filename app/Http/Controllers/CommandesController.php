<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commandes;
use App\Models\Clients;
use App\Models\Livraisons;
class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commandes = Commandes::all();
        return view('Commandes.liste', compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Clients::all();
        return view('Commandes.ajouter',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate([

        //     'nom_commande'=>'required',
        //     'adresse_livraison'=>'required',
        //     'date_commande'=>'required',
        //     'statut_commande'=>'required',
        //     'quantites'=>'required',
        //     'montant_total'=>'required',

        // ]);

        $commandes = new Commandes();
        $commandes->nom_commande = $request->nom_commande;
        $commandes->adresse_livraison = $request->adresse_livraison;
        $commandes->date_commande = $request->date_commande;
        $commandes->statut_commande = $request->statut_commande;
        $commandes->quantites = $request->quantites;
        $commandes->montant_total = $request->montant_total ;
        $commandes->clients_id = $request->clients_id;
        $commandes->livraisons_id = $request->livraisons_id;

        $commandes->save();

        return redirect()->route('welcome')->with('status', 'Votre commandes a été pris en compte.');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $commandes = Commandes::find($id);
        return view('Commandes.details',compact('commandes'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $commandes = Commandes::find($id);
        return view('Commandes.modifier',compact('commandes'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $commandes = Commandes::find($id);

        $commandes->update([
            'statut' => $request->statut,
             ]);

        return redirect()->route('commandes.index')->with('status', 'Un Commandes-vous a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commandes = Commandes::find($id);
        $commandes->delete();
        return redirect()->route('commandes.index')->with('status', 'Commandes a  été supprimé avec succes.');
    }
}
