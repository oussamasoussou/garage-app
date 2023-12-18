<?php

namespace App\Http\Requests\Mecanicien;

use Illuminate\Foundation\Http\FormRequest;

class StoreMecanicienRequest extends FormRequest
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
            'nom' => 'required',
            'prenom' => 'required',
            'identite' => 'required|unique:mecanicien,identite|min:8|max:8',
            'telephone' => 'required|unique:mecanicien,telephone|min:8',
            'image' => 'sometimes',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire.',
            'prenom.required' => 'Le champ prénom est obligatoire.',
            'identite.required' => 'Le champ identité est obligatoire.',
            'identite.unique' => 'La valeur du champ identité doit être unique.',
            'identite.min' => 'La valeur du champ identité doit avoir au moins :min caractères.',
            'identite.max' => 'La valeur du champ identité ne peut pas dépasser :max caractères.',
            'telephone.required' => 'Le champ téléphone est obligatoire.',
            'telephone.unique' => 'La valeur du champ téléphone doit être unique.',
            'telephone.min' => 'La valeur du champ téléphone doit avoir au moins :min caractères.',
        ];
    }
}
