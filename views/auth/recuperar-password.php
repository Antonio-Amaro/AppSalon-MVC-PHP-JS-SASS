<h1 class="nombre-pagina">Nueva Contraseña</h1>
<p class="descripcion-pagina">Coloca tu nueva contraseña</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<?php if($error) return; ?>
<form method="POST" class="formulario">

    <div class="campo">
        <label for="password">Nueva contraseña</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="Ingresa tu nueva contraseña"
        />
    </div>

    <input type="submit" class="boton" value="Reestablecer Contraseña">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta?. ¡Inicia sesión!</a>
</div>