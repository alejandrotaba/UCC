<div class="modal fade" id="modalCategoria" tabindex="-1" aria-labelledby="modalCategoriaLabel" aria-hidden="true">

  <div class="modal-dialog">

    <form id="formCategoria" class="modal-content" method="post" autocomplete="off">

      <div class="modal-header">
        <h5 class="modal-title" id="modalCategoriaLabel">
          <i class="fas fa-plus me-1 text-primary"></i> Nueva categoría
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <div class="modal-body">

        <div class="mb-3">
          <label for="inputCategoria" class="form-label">
            <i class="fas fa-tag me-1 text-secondary"></i> Nombre de la categoría
          </label>
          <input type="text" class="form-control" id="inputCategoria" name="nombre_categoria" placeholder="Ejemplo: Computadores" required>
          <div class="invalid-feedback">Por favor, escribe un nombre válido.</div>
        </div>

        <?php
            $crearCategoria = new ControllerCategory();
            $crearCategoria->crearCategoria();
        ?>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-light" data-bs-dismiss="modal">

          <i class="fas fa-times me-1"></i> Cancelar

        </button>

        <button type="submit" class="btn btn-primary">

          <i class="fas fa-save me-1"></i> Guardar

        </button>

      </div>

      

    </form>

</div>

</div>
