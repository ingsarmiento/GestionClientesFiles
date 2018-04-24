<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center">Guardar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
          <div class="form-group">
            <label for="username" class="col-form-label">Usuario:</label>
            <input type="text" class="form-control" id="username" required>
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" required>
          </div>
          <div class="form-group">
            <label for="dni" class="col-form-label">dni:</label>
            <input type="text" class="form-control" id="dni" maxlength="9" required>
          </div>
          <div class="form-group">
            <label for="nombre" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" required>
          </div>
          <div class="form-group">
            <label for="apellido" class="col-form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" required>
          </div>
          <div class="form-group">
            <label for="direccion" class="col-form-label">Dirección:</label>
            <input type="text" class="form-control" id="direccion" required>
          </div>
          <div class="form-group">
            <label for="telefono" class="col-form-label">Telefono:</label>
            <input type="text" class="form-control" id="telefono" maxlength="9" required>
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" maxlength="60" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="checkbox" aria-label="Checkbox"> Administrador
                </div>
            </div>
          </div>
          <div class="form-group">
            <label for="fecha_alta" class="col-form-label">Fecha:</label>
            <input type="text" class="form-control" id="datepicker" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>