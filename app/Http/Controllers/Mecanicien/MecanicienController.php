<?php

namespace App\Http\Controllers\Mecanicien;

use App\Http\Controllers\Controller;
use App\Models\Mecanicien;
use Illuminate\Http\Request;
use Image;

class MecanicienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {
            $mecaniciens = Mecanicien::all();
            if ($request->has('keyword')) {
                $keyword = '%' . $request->input('keyword') . '%';
                $mecaniciens->where(function ($query) use ($keyword) {
                    $query->where('nom', 'like', $keyword)
                        ->orWhere('prenom', 'like', $keyword);
                });
            }
            return view('admin.components.mecanicien.index', compact('mecaniciens'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.'.$e);
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
            $mecaniciens = Mecanicien::all();
            return view('admin.components.mecanicien.create', compact('mecaniciens'));
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
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'nom' => 'required',
                'prenom' => 'required',
                'identite' => 'required',
                'telephone' => 'required',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
            ]);
            $mecaniciens = new Mecanicien();
            $mecaniciens->nom = $request->nom;
            $mecaniciens->prenom = $request->prenom;
            $mecaniciens->identite = $request->identite;
            $mecaniciens->telephone = $request->telephone;

            if ($request->hasFile('image') != null) {
                dd($request->image);
                $fileName = time() . '.' . $request->image->extension();
                $path = 'uploads/image/';
                if (!is_dir($path)) {
                    mkdir($path, 0755, true);
                }
                $path = public_path('uploads/mecaniciens/') . $fileName;
                Image::make($request->image)->save($path);
                $mecaniciens->image = 'uploads/mecaniciens/' . $fileName;

            }    
            $mecaniciens->save();
    

            return redirect('/mecaniciens')->with('status', 'Mecanicien ajouté avec succès');
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
            $mecaniciens = Mecanicien::findOrFail($id);
            return view('admin.components.mecanicien.edit', compact('mecaniciens'));
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
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'nom' => 'required',
                'prenom' => 'required',
                'identite' => 'required',
                'telephone' => 'required',
                'image' => 'sometimes',
            ]);

            $mecaniciens = Mecanicien::findOrFail($id);
            $mecaniciens->fill($request->only(['nom', 'prenom', 'identite', 'telephone']));
            $mecaniciens->save();
            return redirect('/mecaniciens')->with('status', 'Mecanicien a été modifier avec succès');
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
            $mecaniciens = Mecanicien::findOrFail($id);
            $mecaniciens->delete();
            return redirect('/mecaniciens')->with('status', 'Mecanicien a été Supprimer avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite. Veuillez réessayer.'.$e);
        }
    }
}
