<?=  $this->extend('templates/admin_template') ?> 
<?=  $this->section('content') ?> 

<h2 style="padding: 1%;">CUENTAS DE AHORRO/FIC</h2>
<form action="<?= base_url('guardarCuenta'); ?>" method="post">
        <div class="card custom-card-body">
            <div class="card-body custom-card-body">


                <div class="row">
                <div class="form-group col-lg-3 col-6">
                        <label for="lineas_fondo">Operador Financiero</label>
                        <select class="form-control" id="operador_financiero" name="operador_financiero_id">
                            <!-- Recorre el objeto $fondos y agrega opciones según sus elementos -->
                            <?php
                            foreach ($operadores as $opera) {
                                echo "<option>" . $opera['nombre'] . "</option>";
                            }
                            
                            ?>
                        </select>
                    </div>
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
                  
                    
                </div>



                <label>Comunas y/o corregimientos:</label>
                <div class="card-body custom-card-body">
                <div class="row">
                    
                        <div class="form-group  col-lg-3 col-6">
                            
                            <div class="form-check">
                                <!-- Agrega checks para cada comuna -->
                                <?php
                                for ($i = 1; $i <= 8; $i++) {
                                    echo "<input type='checkbox' class='form-check-input' id='comuna{$i}' name='comunas[]'>";
                                    echo "<label class='form-check-label' for='comuna{$i}'>Comuna {$i}</label><br>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group  col-lg-3 col-6">
                            <div class="form-check">
                                <!-- Agrega checks para cada comuna -->
                                <?php
                                for ($i = 9; $i <= 16; $i++) {
                                    echo "<input type='checkbox' class='form-check-input' id='comuna{$i}' name='comunas[]'>";
                                    echo "<label class='form-check-label' for='comuna{$i}'>Comuna {$i}</label><br>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-lg-3 col-6">
                            <div class="form-check">
                                <!-- Agrega checks para cada corregimiento -->
                                <?php
                                $corregimientosMedellin = [
                                    "Altavista",
                                    "San Antonio de Prado",
                                    "Santa Elena",
                                    "San Cristóbal",
                                    "San Sebastián de Palmitas",
                                ];

                                foreach ($corregimientosMedellin as $corregimiento) {
                                    $id = str_replace(' ', '', $corregimiento); // Elimina espacios en blanco para el ID
                                    echo "<input type='checkbox' class='form-check-input' id='corregimiento{$id}' name='corregimientos[]'>";
                                    echo "<label class='form-check-label' for='corregimiento{$id}'>$corregimiento</label><br>";
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>






                <div class="row">
                    <div class="form-group  col-lg-3 col-6">
                        <label for="tipo_cuenta">Tipo de Cuenta</label>
                        <select class="form-control" id="tipo_cuenta" name="tipo_cuenta">
                            <!-- Agrega opciones según tus necesidades -->
                            <option value="FIC">FIC</option>
                            <option value="Ahorros">Ahorros</option>
                        </select>
                    </div>
                    <div class="form-group  col-lg-3 col-6">
                        <label for="deposito_inicial">Depósito Inicial</label>
                        <input type="text" class="form-control" id="deposito_inicial" name="deposito_inicial" placeholder="Valor del Depósito Inicial ($)">
                    </div>
                    <div class="form-group  col-lg-3 col-6">
                        <label for="periodo">Periodo</label>
                        <input type="text" class="form-control" id="periodo" name="periodo" placeholder="Año-Mes">
                    </div>
                </div>
            </div>

            <div class="card-footer card-footer-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>





<?=  $this->endSection() ?> 

