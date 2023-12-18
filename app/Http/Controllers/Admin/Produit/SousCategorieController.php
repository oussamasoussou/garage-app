<?php

namespace App\Http\Controllers\Admin\Produit;

use App\Http\Controllers\Controller;
use App\Http\Requests\SousCategorie\StoreSousCategorieRequest;
use App\Http\Requests\SousCategorie\UpdateSousCategorieRequest;
use App\Models\SousCategorie;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Sous_categories = SousCategorie::all();
            return view('admin.components.sousCategorie.index', compact('Sous_categories'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $Sous_categories = SousCategorie::all();
            return view('admin.components.sousCategorie.create', compact('Sous_categories'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.' . $e);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSousCategorieRequest $request)
    {
        try {
            $Sous_categories = new SousCategorie();
            $Sous_categories->libelle = $request->libelle;
            $Sous_categories->categorie_id = $request->categorieId;
            $Sous_categories->save();

            return redirect('/sousCategories')->with('status', 'Sous categorie ajouté avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.' . $e);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $Sous_categories = SousCategorie::findOrFail($id);
            return view('admin.components.sousCategorie.edit', compact('Sous_categories'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.' . $e);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSousCategorieRequest $request, $id)
    {
        try {
            $Sous_categories = SousCategorie::findOrFail($id);
            if ($request->has('libelle')) {
                $Sous_categories->libelle = $request->libelle;
            }
            if ($request->has('categorieId')) {
                $Sous_categories->categorie_id = $request->categorieId;
            }
            $Sous_categories->save();
            return redirect('/sousCategories')->with('status', 'Mecanicien a été modifier avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.' . $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $Sous_categories = SousCategorie::findOrFail($id);
            $Sous_categories->delete();
            return redirect('/sousCategories')->with('status', 'Sous_categories a été Supprimer avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.' . $e);
        }
    }
}
