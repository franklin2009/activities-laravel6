<div class="modal fade" id="DeleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 id="myModalLabel"><i class="fa fa-trash-o"></i> Borrar Registro</h4>
      </div>
      <div class="modal-body">
        <p>Estas seguro en borrar registro <span class="label-uname strong" id='delete-id'></span> ?</p>
      </div>
      <div class="modal-footer">
        {{ Form::open(array('url' => $action, 'method' => 'DELETE', 'id'=>'formDelete')) }}
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger" >Borrar</button>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>