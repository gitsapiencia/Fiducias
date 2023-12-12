<?=  $this->extend('templates/admin_template') ?> 
<?=  $this->section('content') ?> 


<!-- Contenido del formulario de contratos -->



<h2 style="padding: 1%;">LINEAS / FONDOS</h2>
    <form action="<?= base_url('guardarFondo'); ?>" method="post">
        <div class="card custom-card-body">
            <div class="card-body custom-card-body">
                
            
                <div class="row">
                    <div class="form-group col-lg-3 col-6">
                        <label for="numero_contrato">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" 
                        value="<?= isset($contrato['nombre']) ? esc($contrato['nombre']) : ''; ?>">
                    </div>
                </div>
                
                

            </div>
            <div class="card-footer card-footer-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>

            <?php if (isset($contrato['id'])) : ?>
                    <!-- Si se está editando, incluir un campo oculto con el ID -->
                    <input type="hidden" name="id" value="<?= esc($contrato['id']); ?>">
            <?php endif; ?>

        </div>
    </form>


<?=  $this->endSection() ?> 

