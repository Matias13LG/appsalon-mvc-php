<h1 class="nombre-pagina">Olvidé password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email a continuación</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" action="/olvide" method="POST">
    <div class="campo">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            placeholder="Tu email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crear una</a>
</div>