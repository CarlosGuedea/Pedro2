<div class="container">

<form action="/AdminPanel/busquedas" method="Post">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <label for="orden">Buscar orden</label>
        </div>
    </div>
<div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6 d-flex">
            <input type="search" name="orden" id="" required class="form-control">
            <button class="btn btn-info mx-auto"type="submit">Buscar</button>
        </div>
</form>

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

