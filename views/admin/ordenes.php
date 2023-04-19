
<div class="container">
    <h1>Ordenes</h1>
    <table class="table">
        <tr>
            <th>Orden ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Campaña</th>
            <th>Fecha Inicio</th>
            <th>Detalles</th>
            <th>Ruta_archivos</th>
        </tr>
        <tr>
        <?php foreach ($resultados as $orden): ?>
        <tr>
            <td><?php echo $orden['ID']; ?></td>
            <td><?php echo $orden['Nombre']; ?></td>
            <td><?php echo $orden['Email']; ?></td>
            <td><?php echo $orden['Descripcion']; ?></td>
            <td><?php echo $orden['Fecha_Inicio']; ?></td>
            
            <td><a  class="btn btn-info" href="/admin-orden-detalle/<?php echo $orden['ID']; ?>">Ver Detalles</a></td>
            <td><?php echo $orden['Ruta_archivos']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tr>
    </table>

<?php

// Generar los enlaces para la paginación
$enlaces = '';
for ($i = 1; $i <= $totalPaginas; $i++) {
    $enlaces .= '<a href="/AdminPanel/ordenes/' . $i . '">' . $i . '</a> ';
}

// Mostrar los enlaces de paginación
?>

<div class="paginacion">
    Paginación <?php echo  $enlaces?>
    <a href="/AdminPanel/ordenes/<?php echo $totalPaginas?>">Ultima</a>
</div>

