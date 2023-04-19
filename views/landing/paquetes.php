<p id="TituloPromos">PROMOCIONES</p> 
<div class="menu">
    <article class="articulo">
        <input class="basic" type="image" src="public/img/Basico.png" alt="Basico" onclick="">
    </article>
    <article class="articulo">
        <input class="standard" type="image" src="public/img/Standard.png" alt="Basico" onclick="">
    </article>
    <article class="articulo">
        <input class="premium" type="image" src="public/img/Corporativo.png" alt="Basico" onclick="">
    </article>
</div>
    
<div class="Cuenta">
    <p class="CuentaT">Cuéntanos sobre tu proyecto</p>
    <form action="/paquetes" method="post" class="Formulario">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="Nombre" required><br>

        <label for="email" id="lblEmail">Email:</label><br>
        <input type="email" id="email" name="Email" required><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="tel" id="telefono" name="Telefono" required><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="Mensaje" rows="5" cols="60" required></textarea><br>

        <label for="fecha">Fecha:</label><br>
        <input type="text" id="fecha" name="Fecha" value="<?php echo date('Y/m/d')?>" required><br>

        <input type="submit" value="Enviar" id="EnviarOrden">
    </form>
</div>

<script src="http://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe("pk_test_51MqelmDFy3xOvEs5ndlJqfk3xbuaTsw4h72UYJNepVNt2MJ8CDbojXE27T4nGvpTCKTtCEv5KG5YHVXb9sP08XK100e9KLHK90");

    //Paquete basic
    const basic = document.querySelector(".basic");
    basic.addEventListener('click', ()=>{
        fetch('/stripe-basic', {
            method:"POST",
            headers:{
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({})
        }).then(res=>res.json())
        .then(payload =>{
            stripe.redirectToCheckout({sessionId: payload.id})
        })
    })

    //Paquete Standard
    const standard = document.querySelector(".standard");
    standard.addEventListener('click', ()=>{
        fetch('/stripe-standard', {
            method:"POST",
            headers:{
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({})
        }).then(res=>res.json())
        .then(payload =>{
            stripe.redirectToCheckout({sessionId: payload.id})
        })
    })

    //Paquete Premium
    const premium = document.querySelector(".premium");
    premium.addEventListener('click', ()=>{
        fetch('/stripe-premium', {
            method:"POST",
            headers:{
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({})
        }).then(res=>res.json())
        .then(payload =>{
            stripe.redirectToCheckout({sessionId: payload.id})
        })
    })
</script>