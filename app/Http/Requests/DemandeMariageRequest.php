<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeMariageRequest extends FormRequest
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
           'numero_registre_mariage'=>'required',
           'centre'=>'required',
           'date_mariage'=>'required',
           'lieu_mariage'=>'required',
           'date_naissance_marie'=>'required',
           'date_naissance_mariee'=>'required',
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
          'numero_registre_mariage.required'=>'Le numéro de registre est requis ',
           'centre.required'=>'Ce champs est requis  le centres',
           'date_mariage.required'=>'Ce champs est requis date de Mariage',
           'lieu_mariage.required'=>'Ce champs est requis Lieu de Mariage',
           'date_naissance_marie.required'=>'Ce champs est requis Date de naissance  du Marie 👨',
           'date_naissance_mariee.required'=>'Ce champs est requis Date de naissance de la Mariée 👩' ,

        ];
    }
}
