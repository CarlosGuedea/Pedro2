
<div class="container">
    <h1>Ordenes</h1>
        <a href="/nueva-orden" class="btn btn-success">Crear Nueva Orden</a>
        <a href="/cerrar-sesion" class="btn btn-danger">Cerrar Sesión</a>
    <table class="table">
        <tr>
            
            <th>Comapaña</th>
            <th>Fecha Inicio</th>
            <th>Detalles</th>
        </tr>
        <tr>
        <?php foreach ($resultado as $orden): ?>
        <tr>
            <td><?php echo $orden['Descripcion']; ?></td>
            <td><?php echo $orden['Fecha_inicio']; ?></td>
            <td><a  class="btn btn-info"href="/detalle-orden/<?php echo $orden['ID']; ?>">Ver Detalles</a></td>
        </tr>
        <?php endforeach; ?>
        </tr>
    </table>
</div>
