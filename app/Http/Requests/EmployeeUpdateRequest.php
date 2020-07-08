<?php

namespace App\Http\Requests; 
use Illuminate\Foundation\Http\FormRequest;

class EmployeeUpdateRequest extends FormRequest
{

    public  function rules()
    {
        return [
            'name' => 'required | max:20',
            'lastname' => 'required | max:20',
            'sex' => 'required | max:1'
        ];
    }

    public  function messages()
    {
        return [
            'name.required'  => 'Nombre de empleado es requerido',
            'name.max'  => 'El Nombre supera los :max caracteres',
            'lastname.required'  => 'Apellido de empleado es requerido',
            'lastname.max'  => 'El Apellido supera los :max caracteres',
            'sex.required'  => 'Sexo de empleado es requerido',
            'sex.max'  => 'El Sexo supera los :max caracteres'
        ];
    }
    
}