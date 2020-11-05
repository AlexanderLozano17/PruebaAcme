<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PersonCreateRequest extends FormRequest
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
            "numberDocument"   => "bail|required||max:11|unique:persons,number_document",
		    "firstName"        => "bail|required|max:30",
            "secondName"       => "bail|max:30",
            "lastName"         => "bail|required|max:60",
            "address"          => "bail|required|max:80",
            "telephone"        => "bail|required|max:10",
            "city"             => "bail|required",
        ];
    } 

        /**
     * Respuesta en formato JSON si existen errores en el request
     *
     * @param  array  $errors
     *
     * @return JSON response()
     */

    public function response(array $errors)
    {
        return response([
            'message' => 'El formulario contiene errores!',
            'errors'  => $errors,
        ], 400);
    }

    public function failedValidation(Validator $validator)
    {
       throw new HttpResponseException(
           response()->json([
               'message' => 'Existen errores en el formulario',
               'errors' => $validator->errors(),
           ], 422)
       );
    }

    /**
     * Get the response for a forbidden operation.
     *
     * @return \Illuminate\Http\Response
     */
    public function forbiddenResponse()
    {
        return response()->json([
            'message' => 'No esta autorizado!',
            'errors' => [],
        ], 401);
    }
}
