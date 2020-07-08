<?php

namespace App\Http\Models;

class Employee extends ModelBase
{
	protected $table = "employees";
	protected $fillable = ["code","name","lastname","sex","position"];
	protected $appends = [ "full_name", "count_activities" ];
	//protected $hidden = ["created_at", "updated_at", "deleted_at"];

	/**
     * Sexos. Funcion estatica que retorna los diferentes tipo de sexos asociados a un empleado
     * @return array
     */
	public static function getArraySex(){
		return array("F"=>"Femenino","M"=>"Masculino","O"=>"Otro");
	}
	
	/**
     * Sexo. Funcion retorna el sexo (nombre)  de un empleado de acuerdo a su clave (key=>id)
     * @return string
     */
	public function getSex(){
		$sex=static::getArraySex();
		return $sex[$this->sex];
	}

	/**
     * Posicion. Funcion estatica que retorna los diferentes tipo de cargos/posiciones asociados a un empleado
     * @return array
     */
	public static function getArrayPosition(){
		return array("1"=>"Analista","2"=>"Programador","3"=>"QA","4"=>"Lider","5"=>"Gerente","0"=>"Otro");
	}
	
	/**
     * Posicion. Funcion retorna el cargo/posicion (nombre)  de un empleado de acuerdo a su clave (key=>id)
     * @return string
     */
	public function getPosition(){
		$position=static::getArrayPosition();
		return $position[$this->position];
	}

	/**
     * Detalle. Funcion retorna apellido, nombre y posicion de un empleado
     * @return string
     */
	public function getDetail(){
		$position=static::getArrayPosition();
		return $this->lastname.", ".$this->name." | ".$position[$this->position];
	}

	/**
     * Nombre completo. Funcion retorna el atributo nombre completo de un empleado.
     * @return string
     */
	public function getFullNameAttribute(){
    	return $this->code . ") " .$this->lastname . ", " . $this->name;
	}

	/**
     * Actividades relacionadas. Funcion retorna la relacion de actividades que un empleado tiene asociado.
     * @return Employee
     */
	public function activities(){
        return $this->hasMany(Activitie::class);
	}
	
	/**
     * Total Actividades. Funcion retorna el total de actividades asociadas a un empleado.
     * @return string
     */
	public function getCountActivitiesAttribute(){
    	return $this->activities()->count();
	}

}