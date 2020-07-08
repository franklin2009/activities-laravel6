<div class="modal fade" id="EmployeemModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 id="myEmployeeModalLabel"> <i class="fa fa-user"></i> Lista de Empleados </h4>
      </div>
      <div class="modal-body">
      
        <input type="text" class="form-control" id="search" placeholder="Filtro ...">
        
        <div class="table-responsive table-box">
                <table class="table table-bordered table-striped table-hover" id="lista">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Sexo</th>
                      <th>Cargo</th>
                      <th> - </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( $employees as $register )
                    <tr {{ ($register->deleted_at!=null?' class="red" ':'') }} >
                      <td width="50px">{{ $register->id }}</td>
                      <td>{{ $register->code }}</td>
                      <td>{{ $register->name }}</td>
                      <td>{{ $register->lastname }}</td>
                      <td>{{ $register->getSex() }}</td>
                      <td>{{ $register->getPosition() }}</td>
                      <td width="25px"> <i class="fa fa-download  btn-download-emp"  data-id="{{ $register->id }}" data-detail="{{ $register->getDetail() }}"></i>  </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="btnModalNo"> Cerrar </button>
      </div>
    </div>
  </div>
</div>