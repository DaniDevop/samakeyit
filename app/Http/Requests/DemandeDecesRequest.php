<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeDecesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'numero_registre'=>'required',
           'centre'=>'required',
           'date_deces'=>'required',
           'lieu_deces'=>'required',
           'nom_pere'=>'required',
           'sexe'=>'required',
           'date_naissance'=>'required',
           'nom_mere'=>'required',
           'id'=>'required|exists:demandeurs,id',

        ];
    }


     /**
     * Get messages
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages(): array
    {
        return [
            'numero_registre.required'=>'Le numéro du registre est requis',
            'centre.required'=>'Le centre est requis',
            'date_deces'=>'La date de déces est requis ',
            'lieu_deces'=>'Le lieu de déces est requis',
            'nom_pere.required'=>'Veuillez rentré le nom du père ',
            'nom_mere.required'=>'Veuillez rentré le nom de la mère ',
            'sexe'=>'Veuillez choisir le sexe ',
            'date_naissance'=>'Entrer le nom de la mère ',

        ];
    }
}
