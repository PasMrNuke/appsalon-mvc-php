<h1 class="nombre-pagina">¿Has olvidado tu contraseña?</h1>
<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu email a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php"
?>

<form method="POST" action="/olvide" class="formulario">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Tu e-mail">
    </div>

    <input type="submit" class="boton" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tines una cuenta? Inicia sesión</a>
    <a href="/crear-cuenta">¿Todavía no tines una cuenta? Crea una</a>
</div>