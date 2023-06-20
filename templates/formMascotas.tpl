
{include file= "header.tpl"}


    <ul class="listamascotas">
        {foreach from=$mascotas item=$mascota}
            <li> 
                <a class="mascota" href="mascota/{$mascota->id_mascota}">{$mascota->nombre|capitalize}</a>
                <span>pertenece a: </span>
                <a href="cliente/{$mascota->id_cliente}">{$mascota->nombre_cliente|capitalize}</a>
                {if $is_logged}
                    <button class="editar">
                    <a href="update/mascota/{$mascota->id_mascota}">Editar</a>
                    </button>
                    <button class="borrar">
                    <a href="delete_mascota/{$mascota->id_mascota}">Borrar</a>
                    </button>
                {/if}
            </li>
        {/foreach}
    </ul>

    {if $is_logged}
        <form action="add_mascota" method="post">
            <label for="nombre">Nombre de la Mascota:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" required>


            <label for="raza">Raza:</label>
            <input type="text" id="raza" name="raza" required>

            <label for="id_cliente">Nombre del dueño:</label>
            <select id="id_cliente" name="id_cliente" required>
                <option></option>
                {foreach from=$clientes item=$cliente}
                    <option value="{$cliente->id_cliente}">{$cliente->nombre}</option>
                {/foreach}
            </select>
                    
            <input type="submit" value="Agregar Mascota">
        </form>
    {/if}
    <a href="inicio" type="button">volver a inicio</a>

    {include file= "footer.tpl"}
