<?php

namespace App\Http\Requests\Categorie;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategorieRequest extends FormRequest
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
            'libelle' => 'sometimes|unique:categorie,libelle|min:3',
        ];
    }

    public function messages()
    {
        return [
            'libelle.unique' => 'La valeur du champ nom categorie doit être unique.',
            'libelle.min' => 'La valeur du champ nom categorie doit avoir au moins :min caractères.',
        ];
    }
}
