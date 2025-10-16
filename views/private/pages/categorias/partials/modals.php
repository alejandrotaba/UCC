<div class="modal fade" id="modalCategoria" tabindex="-1" aria-labelledby="modalCategoriaÑabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="formCategoria" class="modal-content" autocomplete="off">

            <div class="modal-header">
                <h5 class="modal-title" id="modalCategoriaLabel">
                    <i class="fas fa-plus me-1 text-primary"></i>Nueva Categoria
                </h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>



            <div class="modal-body">
                <div class="mb-3">
                    <label for="inputCategoria" class="form-label">
                        <i class="fas fa tag me-1 text-secondary"></i>
                        Nombre de la categoria
                    </label>
                    <input type="text" class="form-control" id="inputCategoria" name="categoria" placeholder="ejemplo: computadores" requiered>
                    <div class="invalid-feedback">por favor,escribe un nombre valido</div>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-light" type="button" data-bs-dismiss="modal">
                    <i class="fas fa-times me-1"></i>Cancelar
                </button>

                <button class="btn btn-primary" type="submit" data-bs-dismiss="modal">
                    <i class="fas fa-save me-1"></i>Guardar
                </button>
            </div>
        </form>
    </div>
</div>