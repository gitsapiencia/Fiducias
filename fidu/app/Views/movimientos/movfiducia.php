<?=  $this->extend('templates/admin_template') ?> 
<?=  $this->section('content') ?> 


<form action="<?= base_url('guardarMovFiducia'); ?>" method="post">
        <div class="card custom-card-body">
            <div class="card-body custom-card-body">
                <div class="row">
                    <div class="form-group col-lg-3 col-6">
                        <label for="lineas_fondo">Contrato</label>
                        <select class="form-control" id="contrato_id" name="contrato_id">
                            <!-- Recorre el objeto $fondos y agrega opciones según sus elementos -->
                            <?php
                            foreach ($contratos as $contrato) {
                                echo "<option>" . $contrato['numero_contrato'] . "</option>";
                            }
                            
                            ?>
                        </select>
                    </div>



                    <div class="form-group col-lg-3 col-6">
                        <label for="lineas_fondo">Cuenta</label>
                        <select class="form-control" id="cuenta" name="cuenta">
                            <!-- Recorre el objeto $fondos y agrega opciones según sus elementos -->
                            <?php
                            foreach ($cuentas as $cta) {
                                echo "<option>" . $cta['cuenta'] . "</option>";
                            }
                            
                            ?>
                        </select>
                    </div>



                    <div class="form-group col-lg-3 col-6">
                        <label for="lineas_fondo">Lineas o Fondo</label>
                        <select class="form-control" id="lineas_fondo" name="lineas_fondo">
                            <!-- Recorre el objeto $fondos y agrega opciones según sus elementos -->
                            <?php
                            foreach ($fondos as $fondo) {
                                echo "<option>" . $fondo['nombre'] . "</option>";
                            }
                            
                            ?>
                        </select>
                    </div>





                </div>
                <!-- Sección de Valores que aumentan el fondo -->
                <div class="card-body custom-card-body">
                    <h5>Valores que aumentan el fondo</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody id="aumento_table_body">
                            <!-- Aquí se agregarán las filas dinámicamente -->
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-success" onclick="agregarFila('aumento')">Agregar Fila</button>
                </div>

                <!-- Sección de Valores que disminuyen el fondeo -->
                <div class="card-body custom-card-body">
                    <h5>Valores que disminuyen el fondo</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody id="disminucion_table_body">
                            <!-- Aquí se agregarán las filas dinámicamente -->
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-danger" onclick="agregarFila('disminucion')">Agregar Fila</button>
                </div>
            </div>

            <div class="card-footer card-footer-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>






<?=  $this->endSection() ?> 


<script>
    // Función para agregar una fila a la tabla de Aumento o Disminución
    function agregarFila(tipo) {
        var newRow = "<tr>" +
            "<td><select class='form-control' name='" + tipo + "_tipo[]'>" +
                "<option value='Adiciones'>Adiciones</option>" +
                "<option value='Rendimientos de Inversiones'>Rendimientos de Inversiones</option>" +
                "<option value='Ingreso por Recaudo'>Ingreso por Recaudo</option>" +
                "<option value='Ingreso por Débito Automático'>Ingreso por Débito Automático</option>" +
                "<option value='Intereses de Crédito'>Intereses de Crédito</option>" +
                "<option value='Reintegro Cartera'>Reintegro Cartera</option>" +
                "<option value='Otros Ingresos'>Otros Ingresos</option>" +
                "<option value='Partida Conciliatoria Ingresos'>Partida Conciliatoria Ingresos</option>" +
                "<option value='Condonaciones'>Condonaciones</option>" +
                "<option value='Comision Pagada'>Comisión Pagada</option>" +
                "<option value='Desembolso Matricula'>Desembolso Matrícula</option>" +
                "<option value='Desembolso Sostenimiento'>Desembolso Sostenimiento</option>" +
                "<option value='Reintegro de Rendimiento'>Reintegro de Rendimiento</option>" +
                "<option value='Gasto Bancario'>Gasto Bancario</option>" +
                "<option value='Otros Egresos'>Otros Egresos</option>" +
                "<option value='Partida Conciliatoria'>Partida Conciliatoria</option>" +
            "</select></td>" +
            "<td><input type='text' class='form-control' name='" + tipo + "_valor[]'></td>" +
            "</tr>";

        if (tipo === 'aumento') {
            $("#aumento_table_body").append(newRow);
        } else if (tipo === 'disminucion') {
            $("#disminucion_table_body").append(newRow);
        }
    }
</script>
