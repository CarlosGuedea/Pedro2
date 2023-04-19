<div class="container">
    <h1>Solicitudes</h1>
    <table class="table">
        <tr>
            <th>Mensaje ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Mensaje</th>
            <th>Fecha</th>
        </tr>
        <tr>
        <?php foreach ($resultados as $orden): ?>
        <tr>
            <td><?php echo $orden['ID']; ?></td>
            <td><?php echo $orden['Nombre']; ?></td>
            <td><?php echo $orden['Email']; ?></td>
            <td><?php echo $orden['Telefono']; ?></td>
            <td><?php echo $orden['Mensaje']; ?></td>
            <td><?php echo $orden['Fecha']; ?></td>

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
