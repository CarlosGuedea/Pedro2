<form action="/nueva-orden" method="post" enctype="multipart/form-data">
<div class="row align-items-center">
        <h1 class="login-titulo">Orden de Trabajo</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <label for="Email">Nombre de la Campaña</label>
            <input type="text" name="Descripcion" id="" required class="form-control">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <label for="Email">Fecha de inicio</label>
            <input type="text" name="Fecha_Inicio" id="" required class="form-control" value="<?php echo date('Y/m/d')?>">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <label for="archivo">Seleccionar archivo:</label>
            <input type="file" id="archivo" name="archivos[]" multiple class="form-control-file" max="3145728">
        </div>
    </div>
    <div class="row justify-content-center">
            <input type="submit" class="enviar" id="" required>
    </div>
</form>