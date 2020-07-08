<?php

namespace App\Http\Requests; 
use Illuminate\Foundation\Http\FormRequest;

class ActivitieRequest extends FormRequest
{

    public  function rules()
    {
        return [
            'title' => 'required | max:50',
            'description' => 'max:200',
            'date' => 'required | max:10 ', // | regex:/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/
            'hour' => 'required | max:10 ', // | regex:/(([0-1][0-9])|([2][0-3])):([0-5][0-9]):([0-5][0-9])/
            'employee_id' => 'required'
        ];
    }

    public  function messages()
    {
        return [
            'title.required'  => 'El Titulo de actividad es requerido',
            'title.max'  => 'El Titulo supera los :max caracteres',
            'description.max'  => 'La Descripcion supera los :max caracteres',
            'date.required'  => 'La Fecha Estimada de actividad es requerida',
            'date.max'  => 'La Fecha Estimada supera los :max caracteres',
            //'date.regex'  => 'Patron para la Fecha Estimada no concuerda. Ejm. 2020-10-25',
            'hour.required'  => 'La Hora Estimada de actividad es requerida',
            'hour.max'  => 'La Hora Estimada supera los :max caracteres',
            //'hour.regex'  => 'Patron para la Hora Estimada no concuerda. Ejm. 00:00:00',
            'employee_id.required'  => 'El Empleado Id es requerido',
        ];
    }
    
}