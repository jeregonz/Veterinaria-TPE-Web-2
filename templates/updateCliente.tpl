{include file="header.tpl"}

<form class="form-update" action="updating_cliente" method="post">
    <input type="hidden" name="id_cliente" value="{$cliente[0]->id_cliente}">

    <label for="nombre">Nombre y Apellido:</label>
    <input type="text" id="nombre" name="nombre" value="{$cliente[0]->nombre}" required>

    <label for="telefono">Telefono:</label>
    <input type="text" id="telefono" name="telefono" value="{$cliente[0]->telefono}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{$cliente[0]->email}" required>
            
    <input class="modificar" type="submit" value="Modificar Cliente">
</form>

{include file="footer.tpl"}