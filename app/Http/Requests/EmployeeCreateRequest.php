<?php

namespace App\Http\Requests; 
use Illuminate\Foundation\Http\FormRequest;

class EmployeeCreateRequest extends FormRequest
{

    public  function rules()
    {
        return [
            'code' => 'required | max:15 | unique:employees',
            'name' => 'required | max:20',
            'lastname' => 'required | max:20',
            'sex' => 'required | max:1'
        ];
    }

    public  function messages()
    {
        return [
            'code.required'  => 'Codigo de empleado es requerido',
            'code.max'  => 'El Codigo supera los :max caracteres',
            'code.unique'  => 'El Codigo ya se encuentra registrado',
            'name.required'  => 'Nombre de empleado es requerido',
            'name.max'  => 'El Nombre supera los :max caracteres',
            'lastname.required'  => 'Apellido de empleado es requerido',
            'lastname.max'  => 'El Apellido supera los :max caracteres',
            'sex.required'  => 'Sexo de empleado es requerido',
            'sex.max'  => 'El Sexo supera los :max caracteres'
        ];
    }
    
}