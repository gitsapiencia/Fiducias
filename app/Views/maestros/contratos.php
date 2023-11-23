<?=  $this->extend('templates/admin_template') ?> 
<?=  $this->section('content') ?> 

<h2 style="padding: 1%;">CONTRATOS</h2>
    <form>
        <div class="card custom-card-body">
            <div class="card-body custom-card-body">
                
            
                <div class="row">
                    <div class="form-group col-lg-3 col-6">
                        <label for="contrato">Contrato</label>
                        <input type="text" class="form-control" id="contrato" placeholder="Número de Contrato">
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="lineas_fondo">Lineas o Fondo</label>
                        <select class="form-control" id="lineas_fondo">
                            <!-- Agrega opciones según tus necesidades -->
                            <option value="opcion1">Opción 1</option>
                            <option value="opcion2">Opción 2</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="lineas_fondo"></label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check_epm">
                            <label class="form-check-label" for="check_epm">EPM</label>
                        </div>
                    
                        <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check_todos">
                                <label class="form-check-label" for="check_todos">Todos</label>
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="form-group col-lg-3 col-6">
                        <label for="operador_financiero">Operador Financiero</label>
                        <input type="text" class="form-control" id="operador_financiero" placeholder="Nombre del Operador Financiero">
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="fecha_inicial">Fecha Inicial</label>
                        <input type="text" class="form-control datepicker" id="fecha_inicial" placeholder="Fecha Inicial">
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="fecha_final">Fecha Final</label>
                        <input type="text" class="form-control datepicker" id="fecha_final" placeholder="Fecha Final">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-3 col-6">
                        <label for="recurso_inicial">Recurso Inicial</label>
                        <input type="text" class="form-control" id="recurso_inicial" placeholder="Valor del Recurso Inicial ($)" readonly>
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="comision">Comisión</label>
                        <input type="text" class="form-control" id="comision" placeholder="Valor de la Comisión ($)" readonly>
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="porcentaje_comision">% Comisión</label>
                        <input type="text" class="form-control" id="porcentaje_comision" placeholder="% Comisión" readonly>
                    </div>
                    <div class="form-group col-lg-3 col-6">
                        <label for="porcentaje_adicion">% Adición</label>
                        <input type="text" class="form-control" id="porcentaje_adicion" placeholder="% Adición" readonly>
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
        </div>
    </form>




<?=  $this->endSection() ?> 

