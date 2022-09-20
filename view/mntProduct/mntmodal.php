<div class="modal fade" id="modalmaintenance" style="display: none; padding-right: 17px;" tabindex="-1" role="dialog"
    aria-modal=" true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post" id="productForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="mdlTitulo"></h5>
                    <!-- <button type="button" class="close" data-dismiss="modal"><span>×</span> -->
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="font-icon-close-2"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="prod_id" name="prod_id">

                    <div class="form-group">
                        <label class="form-label" for="prod_nom">Nombre</label>
                        <input type="text" name="prod_nom" id="prod_nom" class="form-control"
                            placeholder="Ingrese Nombre" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="action" id="#" value="add" class="btn btn-primary">Crear
                        Producto</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>