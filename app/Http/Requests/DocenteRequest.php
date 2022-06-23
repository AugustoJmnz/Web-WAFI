<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocenteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
                        //FORMLUARIO2
                        'nombre' => 'bail|required|alpha',
                        'apellidos' => 'bail|required|alpha',
                        'area' => 'bail|required|alpha',
                        'numero_nomina' => 'bail|required|numeric'
            
        ];
    }
}
