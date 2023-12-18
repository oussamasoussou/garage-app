<?php

namespace App\Http\Requests\SousCategorie;

use Illuminate\Foundation\Http\FormRequest;

class StoreSousCategorieRequest extends FormRequest
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
            'categorieId' => 'required|exists:categorie,id',
        ];
    }
    public function messages()
    {
        return [
            'libelle.required' => 'Le champ libellé est obligatoire.',
            'categorieId.required' => 'Le champ catégorie est obligatoire.',
            'categorieId.exists' => 'La catégorie sélectionnée n\'existe pas.',
        ];
    }
}
