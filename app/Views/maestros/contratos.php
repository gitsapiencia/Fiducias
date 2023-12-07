<?=  $this->extend('templates/admin_template') ?> 
<?=  $this->section('content') ?> 


<!-- Contenido del formulario de contratos -->



<h2 style="padding: 1%;">CONTRATOS</h2>
    <form action="<?= base_url('guardarContrato'); ?>" method="post">
        <div class="card custom-card-body">
            <div class="card-body custom-card-body">
                
            
                <div class="row">
                    <div class="form-group col-lg-3 col-6">
                        <label for="numero_contrato">Contrato</label>
                        <input type="text" class="form-control" id="numero_contrato" placeholder="Número de Contrato" 
                        value="<?= isset($contrato['numero_contrato']) ? esc($contrato['numero_contrato']) : ''; ?>">
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="lineas_fondo">Lineas o Fondo</label>
                        <select class="form-control" id="lineas_fondo">
                            <!-- Agrega opciones según tus necesidades -->
                            <option value="opcion1">Opción 1</option>
                            <option value="opcion2">Opción 2</option>
                        </select>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="form-group col-lg-3 col-6">
                        <label for="operador_financiero">Operador Financiero</label>
                        <input type="text" class="form-control" id="operador_financiero" placeholder="Nombre del Operador Financiero"
                        value="<?= isset($contrato['operador_financiero']) ? esc($contrato['operador_financiero']) : ''; ?>">
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="fecha_inicial">Fecha Inicial</label>
                        <input type="text" class="form-control datepicker" id="fecha_inicial" placeholder="Fecha Inicial"
                        value="<?= isset($contrato['fecha_inicial']) ? esc($contrato['fecha_inicial']) : ''; ?>">
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="fecha_final">Fecha Final</label>
                        <input type="text" class="form-control datepicker" id="fecha_final" placeholder="Fecha Final"
                        value="<?= isset($contrato['fecha_final']) ? esc($contrato['fecha_final']) : ''; ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-3 col-6">
                        <label for="recurso_inicial">Recurso Inicial</label>
                        <input type="text" class="form-control" id="recurso_inicial" placeholder="Valor del Recurso Inicial ($)" 
                        value="<?= isset($contrato['recurso_inicial']) ? esc($contrato['recurso_inicial']) : ''; ?>" readonly>
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="comision">Comisión</label>
                        <input type="text" class="form-control" id="comision" placeholder="Valor de la Comisión ($)"
                        value="<?= isset($contrato['comision']) ? esc($contrato['comision']) : ''; ?>" readonly>
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="porcentaje_comision">% Comisión</label>
                        <input type="text" class="form-control" id="porcentaje_comision" placeholder="% Comisión"
                        value="<?= isset($contrato['porcentaje_comision']) ? esc($contrato['porcentaje_comision']) : ''; ?>" readonly>
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="porcentaje_adicion">% Adición</label>
                        <input type="text" class="form-control" id="porcentaje_adicion" placeholder="% Adición"
                        value="<?= isset($contrato['porcentaje_adicion']) ? esc($contrato['porcentaje_adicion']) : ''; ?>" readonly>
                    </div>
                </div>
            </div>

            <!-- Tabla para agregar Comunas, Recurso a administrar y Comisión -->
            <div class="card-body custom-card-body">
                <h5>Recurso Inicial</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Comuna</th>
                            <th>Recurso a Administrar (Valor)</th>
                            <th>Comisión (Valor)</th>
                        </tr>
                    </thead>
                    <tbody id="comuna_table_body">
                        <!-- Aquí se agregarán las filas dinámicamente -->
                    </tbody>
                </table>
                <button type="button" class="btn btn-success" onclick="agregarFilaComuna()">Agregar Fila</button>
            </div>

            <!-- Tabla para agregar Adiciones, tipo y Valor -->
            <div class="card-body custom-card-body">
                <h5>Adiciones</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Adiciones</th>
                            <th>Tipo</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody id="adiciones_table_body">
                        <!-- Aquí se agregarán las filas dinámicamente -->
                    </tbody>
                </table>
                <button type="button" class="btn btn-success" onclick="agregarFilaAdicion()">Agregar Fila</button>
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

