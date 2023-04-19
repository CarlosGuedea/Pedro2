<div class="container">
    <h1>Detalles</h1>
        <a href="/nuevo-orden-detalle/<?php echo $id; ?>" class="btn btn-success">Crear Nuevos Detalles</a>
    <table class="table">
        <tr>
            <th>Detalle</th>
        </tr>
        <tr>
        <?php foreach ($resultado as $orden): ?>
        <tr>
            <td><?php echo $orden['Detalle']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tr>
    </table>
</div>