<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class FormularioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //Tener control de seguridad
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //Reglas que debe cumplir la peticion para que pueda ser autorizada
    public function rules()
    {
        return [
            //ESCRIBIMOS LAS VALIDADCIONES
            //Bail permite el acceso si cada una de las 
            //reglas que se estan colocando se cumplen.
            'tour' => 'bail|required|alpha',
            'precio' => 'bail|required|numeric',
            'guia' => 'bail|required|alpha',
            'amen' => 'bail|required|alpha',
            'descp' => 'bail|required|alpha',



        ];
    }
}
