<!-- En la vista maestros/listacontratos.php -->

<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<h2 style="padding: 1%;">Contratos</h2>

<div class="card">
        <div class="card-body">
<div class="table-responsive">
    <table class="table table-striped table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Número de Contrato</th>
            <th>Lineas o Fondo</th>
            <th>Operador Financiero</th>
            <th>Fecha Inicial</th>
            <th>Fecha Final</th>
            <th>Recurso Inicial</th>
            <th>Comisión</th>
            <th>Comisión</th>
            <th>Adición</th>
            <th>.....</th>
            <!-- Agrega más columnas según sea necesario -->
            
        </tr>
    </thead>
           
    <tbody>
        <?php foreach ($contratos as $contrato): ?>
            <tr>
                <td><?= $contrato['id']; ?></td>
                <td><?= $contrato['numero_contrato']; ?></td>
                <td><?= $contrato['lineas_fondo']; ?></td>
                <td><?= $contrato['operador_financiero']; ?></td>
                <td><?= $contrato['fecha_inicial']; ?></td>
                <td><?= $contrato['fecha_final']; ?></td>
                <td><?= $contrato['recurso_inicial']; ?></td>
                <td><?= $contrato['comision']; ?></td>
                <td><?= $contrato['porcentaje_comision']; ?></td>
                <td><?= $contrato['porcentaje_adicion']; ?></td>
                <!-- Agrega más celdas según sea necesario -->
                <td>
                    <!-- Enlaces para editar y eliminar según sea necesario -->
                    <a href="<?= base_url('contratos/' . $contrato['id']); ?>" class="btn btn-info">Editar</a>
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
    <a href="<?= base_url('contratos'); ?>" class="btn btn-success">Agregar Contrato</a>
</div>




</div>



<?= $this->endSection() ?>
