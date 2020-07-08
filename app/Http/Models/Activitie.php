<?php

namespace App\Http\Models;
use Carbon\Carbon;

class Activitie extends ModelBase
{
	protected $table = 'activities';
	protected $fillable = ['title','description','status'];
	//protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
	
	/**
     * Estatus. Funcion estatica que retorna los diferentes tipo de estatus de una actividad
     * @return array
     */
	public static function getArrayStatus(){
		return array("1"=>"Hecho","0"=>"pendiente");
	}
	
	/**
     * Estatus. Funcion retorna el estatus (nombre)  de una actividad de acuerdo a su clave (key=>id)
     * @return string
     */
	public function getStatus(){
		$status=static::getArrayStatus();
		return $status[$this->status];
	}

	/**
     * Dias de retraso. Funcion retorna la cantidad de dias de retrazo segun la fecha de estimacion para el dia de hoy.
	 * Retorna vacio si no hay retrazo. Solo aplica para actividades pendientes.
     * @return string
     */
	public function getDays(){
		$created = new Carbon($this->estimate_date);
		$now = Carbon::now();
		$difference = $created->diffInDays($now,false);
		return ($this->status=='0' && $difference > 0 ? $difference." dias " : "");
	}

	/**
     * Estimacion. Funcion retorna la fecha o hora estimada de acuerdo a un indice.
	 * @param  $index Integer
     * @return string
     */
	public function getEstimate($index){
		$date=explode(" ",$this->estimate_date);
		return $date[$index];
	}

	/**
     * Empleado relacionado. Funcion retorna la relacion (un empleado) al empleado asociado con la actividad.
     * @return Employee
     */
	public function employee(){
        return $this->belongsTo(Employee::class);
    }

}