<!-- En la vista maestros/listacuentas.php -->

<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<h2 style="padding: 1%;">Cuentas de Ahorro/FIC</h2>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de Operador Financiero</th>
                        <th>Contrato</th>
                        <th>Número de Cuenta</th>
                        <!-- Agrega más columnas según sea necesario -->
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cuentas as $cuenta) : ?>
                        <tr>
                            <td><?= $cuenta['id']; ?></td>
                            <td><?= $cuenta['tipo_operador_financiero_id']; ?></td>
                            <td><?= $cuenta['contrato_id']; ?></td>
                            <td><?= $cuenta['cuenta']; ?></td>
                            <!-- Agrega más celdas según sea necesario -->
                            <td>
                                <a href="<?= base_url('cuentas/' . $cuenta['id']); ?>" class="btn btn-info">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Agrega este botón al final de tu vista -->
    <div class="text-center mt-3">
        <a href="<?= base_url('cuentas'); ?>" class="btn btn-success">Agregar Cuenta</a>
    </div>
</div>

<?= $this->endSection() ?>
