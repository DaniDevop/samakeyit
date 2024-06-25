<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeActeNaissance extends FormRequest
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
           'nom_pere'=>'required',
           'nom_mere'=>'required',
           'annee_de_naissance'=>'required',
           'departement'=>'required|min:4',
           'id'=>'required|exists:demandeurs,id',
           'numero_registre'=>'required',

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
           'nom_pere.required'=>'Le nom est requis dans le formulaire',
           'nom_mere.required'=>'Le nom de la mère  est requis pour le formulaire',
           'annee_de_naissance.required'=>'Le numéro de la carte est requis ',
           'numero_registre.required'=>'Le numéro de registre est requis dans le formulaire ',
           'departement.required'=>'Le departement est requis  ',

        ];
    }
}
