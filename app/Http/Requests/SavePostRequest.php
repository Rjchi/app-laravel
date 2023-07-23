<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
{
    /**
     * este metodo devuelve un boolean para verificar si una peticion esta autorizada para el usuario de la peticion
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Este metodo es para definir las reglas de validacion
     */
    public function rules(): array
    {
        /**
         * Validamos si es por el metodo create o update
         */
        if ($this->isMethod('PATCH')) {
            return [];
        } else {
            return [
                'title' => ['required', 'min:4'],
                'body' => ['required'],
            ];
        }
    }
}
