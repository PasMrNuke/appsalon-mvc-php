<div class="campo">
    <label for="nombre">Nombre</label>
    <input 
        type="text"
        id="nombre"
        placeholder="Nombre servicio"
        name="nombre"
        value="<?php echo $servicio->nombre; ?>"
    />
</div>

<div class="campo">
    <label for="nombre">Precio</label>
    <input 
        type="number"
        id="precio"
        placeholder="Precio servicio"
        name="precio"
        value="<?php echo $servicio->precio; ?>"
    />
</div>