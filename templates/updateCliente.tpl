<form action="updating" method="post">
    <input type="hidden" name="id_cliente" value="{$cliente->id_cliente}">

    <label for="nombre">Nombre y Apellido:</label>
    <input type="text" id="nombre" name="nombre" value="{$cliente->nombre}" required>

    <label for="telefono">Telefono:</label>
    <input type="text" id="telefono" name="telefono" value="{$cliente->telefono}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{$cliente->email}" required>
            
    <input type="submit" value="Modificar Cliente">
</form>