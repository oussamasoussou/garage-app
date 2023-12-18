<?php

namespace App\Http\Controllers\Admin\Produit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categorie\StoreCategorieRequest;
use App\Http\Requests\Categorie\UpdateCategorieRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $categories = Categorie::all();
            return view('admin.components.categorie.index', compact('categories'));
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
            $categories = Categorie::all();
            return view('admin.components.categorie.create', compact('categories'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.'.$e);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieRequest $request)
    {
        try {
            $categories = new Categorie();
            $categories->libelle = $request->libelle;
            $categories->save();
            return redirect('/categories')->with('status', 'Categorie ajouté avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.'.$e);
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
            $categories = Categorie::findOrFail($id);
            return view('admin.components.categorie.edit', compact('categories'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.'.$e);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorieRequest $request, $id)
    {
        try {
            $categories = Categorie::findOrFail($id);
            $categories->fill($request->only(['libelle']));
            $categories->save();
            return redirect('/categories')->with('status', 'Categorie a été modifier avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.'.$e);
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
            $categories = Categorie::findOrFail($id);
            $categories->delete();
            return redirect('/categories')->with('status', 'Categorie a été Supprimer avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.'.$e);
        }
    }
}
