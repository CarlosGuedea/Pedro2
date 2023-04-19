<form action="/registro" method="post">
<div class="container login">
    <div class="row align-items-center">
        <h1 class="login-titulo">Registro</h1>
    </div>
    <div class="row justify-content-center">
        <img class ="login-user-img" src="public/img/usuario-img.webp" alt="">
    </div>
    <?php if (isset($error)): ?>
      <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <?php if (isset($Exito)): ?>
      <div class="alert alert-success"><?php echo $error; ?></div>
    <?php endif; ?>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <label for="Nombre">Nombre Completo</label>
            <input type="text" name="Nombre" id="" required class="form-control">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="" required class="form-control">
        </div>
        
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <label for="Contrasena">Contraseña</label>
            <input type="password" name="Contrasena" id="" required class="form-control">
        </div>
        
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <label for="RFC">RFC</label>
            <input type="text" name="RFC" id="" required class="form-control">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
        <label for="CondPostal">Codigo Postal</label>
        <input type="text" name="CodPostal" id="" required class="form-control">
    </div>
    </div>
    <div class="row justify-content-center">
            <input type="submit" class="enviar" id="" required>
    </div>
</div>
</form>

<script src="public/app.js"></script>
<body>
</html>