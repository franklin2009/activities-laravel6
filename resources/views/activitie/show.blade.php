@extends("layouts.publico")

@section("my-contenido")
<div class="jumbotron">

<div class="row">
  <div class="col-lg-8 col-lg-offset-2">  
		<div class="center"> <h2>{{ $title }}</h2> </div>
		<hr>


				<div class="form-group">
					{{ Form::label("title", "Titulo *") }}
					{{ Form::text("title", $register->title, array("class" => "form-control" , "disabled" )) }}
				</div>
				
				<div class="form-group">
					{{ Form::label("description", "Descripcion") }}
					{{ Form::text("description", $register->description, array("class" => "form-control" , "disabled" )) }}
				</div>

				<div class="form-group">
					{{ Form::label("estimate_date", "Fecha Estimacion *") }}
					{{ Form::text("estimate_date", $register->estimate_date, array("class" => "form-control" , "disabled" )) }}
				</div>

				<div class="form-group">
					{{ Form::label("days", "Retrazo") }}
					{{ Form::text("days", $register->getDays(), array("class" => "form-control" , "disabled" )) }}
				</div>

				<div class="form-group">
					{{ Form::label("employee", "Empleado *") }}
					{{ Form::text("employee", $register->employee->getDetail() , array("class" => "form-control" , "disabled" )) }}
				</div>

				<div class="form-group">
					{{ Form::label("status", "Estatus ") }}
					{{ Form::text("status", $register->getStatus(), array("class" => "form-control" , "disabled" )) }}
				</div>
			
		<br />
			
		<hr />
			<h4> Auditoria </h4>
		<hr />
		

		<div class="form-group">
			{{ Form::label("created_at", "Fecha Registro") }}
			{{ Form::text("created_at", $register->created_at, array("class" => "form-control", "disabled")) }}
		</div>
		
		<div class="form-group">
			{{ Form::label("updated_at", "Fecha Actualizacion") }}
			{{ Form::text("updated_at", $register->updated_at, array("class" => "form-control", "disabled")) }}
		</div>
		
			
		<div class="pre_box">	
			<b>NOTA</b>
			<br />Los campos <b>requeridos</b> estan marcados con <b>asterisco *</b>
		</div>			
			
		<br />
		
					
		<a href="{{ url('activities') }}" class="btn btn-default" >Regresar</a>

					

  </div>
</div>

</div>

@endsection