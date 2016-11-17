<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
      </div>
      <div class="modal-body">
        <form id="frm-usuario" class="form-horizontal">
          <div class="form-group">
              <div class="col-sm-10">
                  <input type="text" name="nombre" placeholder="Nombre" class="form-control" id="nombre" required>
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-10">
                  <input type="text" name="apellido" placeholder="Apellido" class="form-control" id="apellido" required>
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-10">
                  <input type="email" name="email" placeholder="Email" class="form-control" id="email" required>
              </div>
          </div>
          <div class="form-group">
              <div class="col-sm-10">
                  <input type="password" name="password" placeholder="Password" class="form-control" id="password" required>
              </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btn-save" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>