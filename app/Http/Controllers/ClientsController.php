<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clients;


class ClientsController extends Controller
{
    /**
     * Display a  listing of the resource.
     */
    public function index()
    {
        $clients = Clients::all();
        return view('Clients.liste', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clients.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'nom'=>'required',
            'prenom'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',


        ]);

        $clients = new Clients();
        $clients->nom = $request->nom;
        $clients->prenom = $request->prenom;
        $clients->adresse = $request->adresse;
        $clients->telephone = $request->telephone;

        $clients->save();

        return redirect()->route('clients.index')->with('status', 'Client a  été ajouté avec succes.');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {

        return view('Clients.details', [

            'Clients' => Clients::find($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clients = Clients::find($id);
        return view('Clients.modifier',compact('clients'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $clients = Clients::find($id);

        $clients->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,

        ]);

        return redirect()->route('clients.index')->with('status', 'Client a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients = Clients::find($id);
        $clients->delete();
        return redirect()->route('clients.index')->with('status', 'Client a  été supprimé avec succes.');
    }
}
