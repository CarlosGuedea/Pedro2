<div id="centro">
    <div class="container">
    <h1>Usuarios</h1>
    <table class="table">
        <tr>
            <th>User ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contraseña</th>
            <th>RFC</th>
            <th>CodPostal</th>
        </tr>
        <tr>
        <?php foreach ($resultados as $orden): ?>
        <tr>
            <td><?php echo $orden['ID']; ?></td>
            <td><?php echo $orden['Nombre']; ?></td>
            <td><?php echo $orden['Email']; ?></td>
            <td><?php echo $orden['Contrasena']; ?></td>
            <td><?php echo $orden['RFC']; ?></td>
            <td><?php echo $orden['CodPostal']; ?></td>
            
        </tr>
        <?php endforeach; ?>
        </tr>
    </table>
    </div>
</div>

<?php
// Generar los enlaces para la paginación
$enlaces = '';
for ($i = 1; $i <= $totalPaginas; $i++) {
    $enlaces .= '<a href="/AdminPanel/usuarios/' . $i . '">' . $i . '</a> ';
}

// Mostrar los enlaces de paginación
?>

<div class="paginacion">
    Paginación <?php echo  $enlaces?>
    <a href="/AdminPanel/usuarios/<?php echo $totalPaginas?>">Ultima</a>
</div>