@extends('layouts.publico')

@section('my-contenido')

<div class="jumbotron">

<div class="row">
  <div class="col-lg-8"><h3>{{ $title }}</h3></div>
  <div class="col-lg-4">
		<a href="{{ url('employees/create') }}" title='Nuevo' class='btn btn-sm btn-primary pull-right mt-1' > <i class="fa fa-plus"></i> Agregar </a>		
  </div>
</div>


<div class="row">

	<div class="col-12">
    <hr>
    <input type="text" class="form-control" id="search" placeholder="Filtro ...">
	
	<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="lista">
      <thead>
        <tr>
          <th>#</th>
          <th>Codigo</th>
		  <th>Nombre</th>
		  <th>Apellido</th>
		  <th>Sexo</th>
		  <th>Cargo</th>
		  <th>Registro</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach( $registers as $register )
        <tr {{ ($register->deleted_at!=null?' class="red" ':'') }} >
          <td width="50px">{{ $register->id }}</td>
		  <td>{{ $register->code }}</td>
		  <td>{{ $register->name }}</td>
		  <td>{{ $register->lastname }}</td>
		  <td>{{ $register->getSex() }}</td>
		  <td>{{ $register->getPosition() }}</td>
		  <td>{{ $register->created_at }}</td>
          <td width="180px">
			
			<a href="{{ url('employees/'.$register->id) }}" title='Ver' class='btn btn-sm btn-info' > <i class="fa fa-search"></i> </a>
			
			<a href="{{ url('employees/'.$register->id.'/edit') }}" title='Editar' class='btn btn-sm btn-primary' > <i class="fa fa-edit"></i> </a>
			
			<a href="#DeleteModal" title='Borrar' class='btn btn-sm btn-danger btn-remove-modal' data-toggle='modal'  role='button' data-id='{{ $register->id }}' data-control='employees'> 
				<i class="fa fa-trash-o"></i> 
			</a>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
	</div>
	
	<div class="paging btn-group page-buttons">
		{!! $registers->render() !!}
  </div>
  

  <br />
			
      <div class="pre_box">	
        <b>Acciones</b>
        <br />  <i class="text-info fa fa-search"></i> => Ver Detalle
        <br />  <i class="text-primary fa fa-edit"></i> => Editar
        <br />  <i class="text-danger fa fa-trash-o"></i> => Borrar
      </div>	
	
  </div>
</div>

</div>

@include('modals.deleted')

@endsection