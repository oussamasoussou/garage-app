<?php

namespace App\Http\Requests\Produit;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'libelle' => 'required',
            'reference' => 'required|unique:produit,reference',
            'quantiteStock' => 'required|integer',
            'quantiteAlert' => 'required|integer',
            'categorie_id' => 'required|exists:categorie,id',
        ];
    }
    
    public function messages()
    {
        return [
            'libelle.required' => 'Le champ libellé est obligatoire.',
            'reference.required' => 'Le champ référence est obligatoire.',
            'reference.unique' => 'La référence doit être unique.',
            'quantiteStock.required' => 'Le champ quantité en stock est obligatoire.',
            'quantiteStock.integer' => 'La quantité en stock doit être un nombre entier.',
            'quantiteAlert.required' => 'Le champ quantité d\'alerte est obligatoire.',
            'quantiteAlert.integer' => 'La quantité d\'alerte doit être un nombre entier.',
            'categorie_id.required' => 'Le champ catégorie est obligatoire.',
            'categorie_id.exists' => 'La catégorie sélectionnée n\'existe pas.',
        ];
    }
    
}
