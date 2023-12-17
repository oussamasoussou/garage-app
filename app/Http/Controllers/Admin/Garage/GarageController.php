<?php

namespace App\Http\Controllers\Admin\Garage;

use App\Http\Controllers\Controller;
use App\Models\Garage;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $garages = Garage::all();
            if ($request->has('keyword')) {
                $keyword = '%' . $request->input('keyword') . '%';
                $garages->where(function ($query) use ($keyword) {
                    $query->where('nom', 'like', $keyword)
                        ->orWhere('telephone', 'like', $keyword)
                        ->orWhere('adresse', 'like', $keyword);
                });
            }
            return view('admin.components.garage.index', compact('garages'));
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
            $garage = Garage::all();
            return view('admin.components.garage.create', compact('garage'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'nom' => 'required',
                'telephone' => 'required',
                'adresse' => 'required',
            ]);

            Garage::create([
                'nom' => $request->nom,
                'telephone' => $request->telephone,
                'adresse' => $request->adresse,
            ]);

            return redirect('/garage')->with('status', 'Garage ajouté avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.');
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
            $garage = Garage::findOrFail($id);
            return view('admin.components.garage.edit', compact('garage'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'nom' => 'sometimes',
                'telephone' => 'sometimes',
                'adresse' => 'sometimes',
            ]);
            $garage = Garage::findOrFail($id);
            $garage->fill($request->only(['nom', 'telephone', 'adresse']));
            $garage->save();
            return redirect('/garage')->with('status', 'Garage a été modifier avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.');
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
            $garage = Garage::findOrFail($id);
            $garage->delete();
            return redirect('/garage')->with('status', 'Garage a été Supprimer avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.');
        }
    }
}
