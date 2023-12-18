<?php

namespace App\Http\Requests\SousCategorie;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSousCategorieRequest extends FormRequest
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
            'libelle' => 'sometimes',
            'categorieId' => 'sometimes|exists:categorie,id',
        ];
    }
    public function messages()
    {
        return [
            'categorieId.exists' => 'La catégorie sélectionnée n\'existe pas.',
        ];
    }
}
