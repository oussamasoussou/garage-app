<?php

namespace App\Http\Requests\Mecanicien;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMecanicienRequest extends FormRequest
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
            'nom' => 'sometimes',
            'prenom' => 'sometimes',
            'identite' => 'sometimes|unique:mecanicien,identite|min:8|max:8',
            'telephone' => 'sometimes|unique:mecanicien,telephone|min:8',
            'image' => 'sometimes',
        ];
    }

    public function messages()
    {
        return [
            'identite.unique' => 'La valeur du champ identité doit être unique.',
            'identite.min' => 'La valeur du champ identité doit avoir au moins :min caractères.',
            'identite.max' => 'La valeur du champ identité ne peut pas dépasser :max caractères.',
            'telephone.unique' => 'La valeur du champ téléphone doit être unique.',
            'telephone.min' => 'La valeur du champ téléphone doit avoir au moins :min caractères.',    
        ];
    }
}
