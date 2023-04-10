<form action="/nuevo-orden-detalle/<?php echo $id; ?>" method="post" enctype="multipart/form-data">
<div class="row align-items-center">
        <h1 class="login-titulo">Crear Detalles</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <label for="Email">Detalle</label>
            <input type="text" name="Detalle" id="" required class="form-control">
        </div>
    </div>
    <div class="row justify-content-center">
            <input type="submit" class="enviar" id="" required>
    </div>
</form>