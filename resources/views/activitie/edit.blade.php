@extends('layouts.publico')

@section('my-contenido')
<div class="jumbotron">

<div class="row">
  <div class="col-lg-8 col-lg-offset-2">  
  {{ Form::open(array('url' => 'activities/'.$register->id, 'method' => 'PUT')) }}
		<div class="center"> <h2>{{ $title }}</h2> </div>
		<hr>

				<div class="form-group">
					{{ Form::label("title", "Titulo *") }}
					{{ Form::text("title", $register->title, array("class" => "form-control" , "maxlength" => 50,  "required" )) }}
				</div>
				
				<div class="form-group">
					{{ Form::label("description", "Descripcion") }}
					{{ Form::text("description", $register->description, array("class" => "form-control" , "maxlength" => 200 )) }}
				</div>

				<div class="form-group">
					{{ Form::label("date", "Fecha Estimada *") }}
					{{ Form::text("date", $register->getEstimate(0), array("class" => "form-control datepicker" , "maxlength" => 10,  "required", "autocomplete"=>"off" )) }}
				</div>

				<div class="form-group">
					{{ Form::label("hour", "Hora Estimada *") }}
					{{ Form::text("hour", $register->getEstimate(1), array("class" => "form-control timepicker" , "maxlength" => 10,  "required", "autocomplete"=>"off" )) }}
				</div>

				<div class="form-group">
					{{ Form::label("employee", "Empleado *") }}
					{{ Form::text("employee", $register->employee->getDetail(), array("class" => "form-control input-emp" , "maxlength" => 200, "required", "readonly" )) }}
					{{ Form::hidden('employee_id', $register->employee_id, array('id' => 'employee_id')) }}
				</div>
			
		<br />
			
		<div class="pre_box">	
			<b>NOTA</b>
			<br />Los campos <b>requeridos</b> estan marcados con <b>asterisco *</b>
			<br />Para poder guardar tiene que estar cargados todos los campos requeridos
		</div>			
			
		<br />
					
		{{ Form::submit('Guardar', array('class' => 'btn btn-primary', 'id' => 'btn-guardar')) }}

	{{ Form::close() }}
	
	
  </div>
</div>

</div>


@include('modals.employee')

@endsection