<h1 class="nombre-pagina">Restablecer contraseña</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para reestablecer tu contraseña</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form action="/olvide" method="POST" class="formulario">

    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu email"
        />
    </div>

    <input type="submit" value="Enviar instrucciones" class="boton">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta?. ¡Inicia sesión!</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta?. Registrate aquí!</a>
</div>