<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CarCreateRequest extends FormRequest
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
            "licensePlate"  => "bail|required|unique:cars,license_plate",
		    "color"   => "bail|required|max:30",
            "mark"    => "bail|required|max:45",
            "typeCar" => "bail|required",
            "ownerId" => "bail|required",
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
