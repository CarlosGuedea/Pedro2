<h1>Stripe Verificacion</h1>
<button id="verificar-btn">Verificar</button>


<script src="http://js.stripe.com/v3/"></script>

<script>
    const stripe = Stripe("pk_test_51MqelmDFy3xOvEs5ndlJqfk3xbuaTsw4h72UYJNepVNt2MJ8CDbojXE27T4nGvpTCKTtCEv5KG5YHVXb9sP08XK100e9KLHK90");
    const verificarBtn = document.querySelector("#verificar-btn");
    verificarBtn.addEventListener('click', ()=>{
        fetch('/stripe', {
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



