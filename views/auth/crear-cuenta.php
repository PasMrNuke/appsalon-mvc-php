<h1 class="nombre-pagina">Crear cuenta</h1>
<p class="descripcion-pagina">Por favor, rellena el siguiente formulario para poder crear tu cuenta</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php"
?>

<form method="POST" action="/crear-cuenta" class="formulario">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input 
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Tu nombre"
            value="<?php echo s($usuario->nombre) ?>"
        >
    </div>
    
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input 
            type="text"
            id="apellido"
            name="apellido"
            placeholder="Tu apellido"
            value="<?php echo s($usuario->apellido) ?>"
        >
    </div>

    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input 
            type="tel"
            id="telefono"
            name="telefono"
            placeholder="Tu número teléfono"
            value="<?php echo s($usuario->telefono) ?>"
        >
    </div>

    <div class="campo">
        <label for="email">E-mail</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu e-mail"
            value="<?php echo s($usuario->email) ?>"
        >
    </div>

    <div class="campo">
        <label for="password">Contraseña</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="Tu contraseña"
        >
    </div>

    <input type="submit" value="Crear cuenta" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tines una cuenta? Inicia sesión</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>