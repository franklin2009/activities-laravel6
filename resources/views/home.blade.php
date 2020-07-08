@extends('layouts.publico')

@section('my-contenido')

      <div class="jumbotron">
        <p>Ejercicio a modo de prueba</p>
		<p>
		Se requiere hacer un sistema web para registrar actividades o tareas en una empresa para saber qué trabajo está pendiente por hacer. A dichas actividades se les debe asignar quién de los empleados las ejecutará desde una lista. De la actividad que debe realizar el empleado se desea saber el estatus: (si se realizó, o si por el contrario, está pendiente), la fecha y hora estimada de ejecución, días de retraso de la ejecución respecto al día de hoy (si no hay retraso omitirlo) y plasmar quién está asignado a dicha actividad.
		</p>
        <p>  
			<a class="btn btn-md btn-primary" href="{{ Url('activities') }}" role="button"> Actividades »</a>  
			|  <a class="btn btn-md btn-info" href="{{ Url('employees') }}" role="button"> Empleados »</a>
		</p>
		<p>Observaciones: </p>
		<ul>
			<li> Una actividad se le puede asignar sólo un empleado.  </li>
			<li> Un empleado puede estar asignado a más de una actividad. </li>
		</ul>
      </div>

@endsection
