<form action="/nueva-orden" method="post" enctype="multipart/form-data" id="cargaImagen" onsubmit="mostrarCarga()">
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
            <input type="file" id="miInput" name="archivos[]" multiple class="form-control-file" size="3145728">
        </div>
    </div>
    <div class="row justify-content-center">
        <input type="submit" class="enviar" id="" required>
    </div>

    <div class="cargaImagen">
        <img id="loading-image" src="public/img/carga.gif" style="display:none; margin: 0 auto; padding-top:1rem;" alt="Cargando">
    </div>
    

<script>
function mostrarCarga() {
  document.getElementById('loading-image').style.display = 'block';
}


const MAXIMO_TAMANIO_BYTES = 3000000; // 1MB = 1 millón de bytes

// Obtener referencia al elemento
const $miInput = document.querySelector("#miInput");

$miInput.addEventListener("change", function () {
	// si no hay archivos, regresamos
	if (this.files.length <= 0) return;

	// Validamos el primer archivo únicamente
	const archivo = this.files[0];
	if (archivo.size > MAXIMO_TAMANIO_BYTES) {
		const tamanioEnMb = MAXIMO_TAMANIO_BYTES / 1000000;
		alert(`El tamaño máximo es ${tamanioEnMb} MB`);
		// Limpiar
		$miInput.value = "";
	} else {
		// Validación pasada. Envía el formulario o haz lo que tengas que hacer
	}
});
</script>

</form>