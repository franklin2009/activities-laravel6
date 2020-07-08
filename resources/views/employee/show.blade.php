@extends("layouts.publico")

@section("my-contenido")
<div class="jumbotron">

<div class="row">
  <div class="col-lg-8 col-lg-offset-2">  
		<div class="center"> <h2>{{ $title }}</h2> </div>
		<hr>
		
				<div class="form-group">
					{{ Form::label("code", "Codigo *") }}
					{{ Form::text("code", $register->code, array("class" => "form-control" , "disabled")) }}
				</div>
				
				<div class="form-group">
					{{ Form::label("name", "Nombre *") }}
					{{ Form::text("name", $register->name, array("class" => "form-control" , "disabled" )) }}
				</div>

				<div class="form-group">
					{{ Form::label("lastname", "Apellido *") }}
					{{ Form::text("lastname", $register->lastname, array("class" => "form-control" , "disabled" )) }}
				</div>

				<div class="form-group">
					{{ Form::label("sex", "Sexo") }}
					{{ Form::select("sex", $sex, $register->sex, array("class" => "form-control", "disabled")) }}
				</div>

				<div class="form-group">
					{{ Form::label("position", "Cargo") }}
					{{ Form::select("position", $position, $register->position, array("class" => "form-control", "disabled")) }}
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
		
					
		<a href="{{ url('employees') }}" class="btn btn-default" >Regresar</a>

					

  </div>
</div>

</div>

@endsection