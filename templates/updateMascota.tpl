{include file="header.tpl"}
 
    <form class="form-update" action="updating_mascota" method="post">
        <input type="hidden" name="id_mascota" value="{$mascota->id_mascota}">

        <label for="nombre">Nombre de la Mascota:</label>
        <input type="text" id="nombre" name="nombre" value="{$mascota->nombre}" required>

        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" value="{$mascota->tipo}" required>

        <label for="raza">Raza:</label>
        <input type="text" id="raza" name="raza" value="{$mascota->raza}" required>

        <label for="id_cliente">Nombre del dueño:</label>
        <select id="id_cliente" name="id_cliente" required>
            <option value="{$mascota->id_cliente}">{$mascota->nombre_cliente}</option>
            {foreach from=$clientes item=$cliente}
                <option value="{$cliente->id_cliente}">{$cliente->nombre}</option>
            {/foreach}
        </select>
                
        <input class="modificar" type="submit" value="Modificar Mascota">
    </form>
    
{include file="footer.tpl"}
