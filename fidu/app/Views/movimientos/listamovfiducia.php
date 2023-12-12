<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<h2 style="padding: 1%;">Movimientos de Fiducia</h2>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Contrato</th>
                        <th>Cuenta</th>
                        <th>Programa</th>
                        
                        <!-- Agrega más columnas según sea necesario -->
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($movimientos as $movimiento): ?>
                        <tr>
                            <td><?= $movimiento['id']; ?></td>
                            <td><?= $movimiento['contrato_id']; ?></td>
                            <td><?= $movimiento['cuenta_id']; ?></td>
                            <td><?= $movimiento['programa_id']; ?></td>
                            <!-- Agrega más celdas según sea necesario -->
                            <td>
                                <!-- Enlaces para editar y eliminar según sea necesario -->
                                <a href="<?= base_url('movfiducia/' . $movimiento['id']); ?>" class="btn btn-info">Editar</a>
                                <!-- Puedes agregar un enlace para eliminar si es necesario -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Agrega este botón al final de tu vista -->
    <div class="text-center mt-3">
        <a href="<?= base_url('movfiducia'); ?>" class="btn btn-success">Agregar Movimiento</a>
        
    </div>
</div>

<?= $this->endSection() ?>
