<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar Genero</h4>
      </div>
      <div class="modal-body">
        <h2>¿Estas seguro de esto? :L</h2>
      	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      	<input type="hidden" id="id">
        
      </div>
      <div class="modal-footer">
        <button id="YES" class='btn btn-danger' OnClick="Eliminar();">Si</button>
        <button id="NO" class='btn btn-primary' data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>