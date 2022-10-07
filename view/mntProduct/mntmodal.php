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
                        <label class="form-label" for="cat_id">Categoria</label>
                        <select class="form-control" name="cat_id" id="cat_id">
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="prod_nom">Nombre</label>
                        <input type="text" name="prod_nom" id="prod_nom" class="form-control"
                            placeholder="Ingrese Nombre" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="prod_desc">Descripción</label>
                        <textarea name="prod_desc" id="prod_desc" class="form-control" rows="4" id="comment"
                            placeholder="Ingrese Descripción" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="prod_cant">Cantidad</label>
                        <input type="number" name="prod_cant" id="prod_cant" class="form-control"
                            placeholder="Ingrese Cantidad" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="action" id="#" value="add" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>