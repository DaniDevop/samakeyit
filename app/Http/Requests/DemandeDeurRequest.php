<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeDeurRequest extends FormRequest
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
           'nom'=>'required',
           'prenom'=>'required',
           'email'=>'required|email|unique:demandeurs,email',
           'tel'=>'required|unique:demandeurs,tel',
           'password'=>'required|min:4',
           'password_confirm'=>'required|min:4',
           'profile'=>'nullable|image:png,jpeg,jpg|max:1024',

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
           'nom.required'=>'Le nom est requis dans le formulaire',
           'prenom.required'=>'Le prenom est requis pour l inscription',
           'email.email'=>'L email doit etre du bon format 📨',
           'tel.unique'=>'Le téléphone doit etre unique',
           'tel.required'=>'Le téléphone est requis dans le formulaire',
           'num_carte_id.required'=>'Le numéro de la carte est requis ',
           'num_carte_id.unique'=>'Le numéro de la carte est existes déjà ',
           'password.required'=>'Veuillez entrer votre mot de passe ',
           'password_confirm.required'=>'Veuillez entrer votre mot de passe de confirmation ',
           'email.unique'=>'L email existes déjà dans l application ',



        ];
    }
}
