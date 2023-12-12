<!-- En la vista maestros/listacontratos.php -->

<?= $this->extend('templates/admin_template') ?>
<?= $this->section('content') ?>

<h2 style="padding: 1%;">Operadores Financieros</h2>

<div class="card">
        <div class="card-body">
<div class="table-responsive">
    <table class="table table-striped table-bordered">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>.....</th>
        </tr>
    </thead>
           
    <tbody>
        <?php foreach ($contratos as $operador): ?>
            <tr>
                <td><?= $operador['id']; ?></td>
                <td><?= $operador['nombre']; ?></td>
                <td>
                    <!-- Enlaces para editar y eliminar según sea necesario -->
                    <a href="<?= base_url('operador/' . $operador['id']); ?>" class="btn btn-info">Editar</a>
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
    <a href="<?= base_url('operadores'); ?>" class="btn btn-success">Agregar Operador</a>
</div>




</div>



<?= $this->endSection() ?>
