@extends('layouts.publico')

@section('my-contenido')
<div class="jumbotron">

<div class="row">
  <div class="col-lg-8 col-lg-offset-2">  
  {{ Form::open(array('url' => 'employees')) }}
		<div class="center"> <h2>{{ $title }}</h2> </div>
		<hr>
		
				<div class="form-group">
					{{ Form::label("code", "Codigo *") }}
					{{ Form::text("code", old("code"), array("class" => "form-control" , "maxlength" => 15,  "required" )) }}
				</div>
				
				<div class="form-group">
					{{ Form::label("name", "Nombre *") }}
					{{ Form::text("name", old("name"), array("class" => "form-control" , "maxlength" => 20,  "required" )) }}
				</div>

				<div class="form-group">
					{{ Form::label("lastname", "Apellido *") }}
					{{ Form::text("lastname", old("lastname"), array("class" => "form-control" , "maxlength" => 20,  "required" )) }}
				</div>

				<div class="form-group">
					{{ Form::label("sex", "Sexo") }}
					{{ Form::select("sex", $sex, old("sex"), array("class" => "form-control")) }}
				</div>

				<div class="form-group">
					{{ Form::label("position", "Cargo") }}
					{{ Form::select("position", $position, old("position"), array("class" => "form-control")) }}
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

@endsection