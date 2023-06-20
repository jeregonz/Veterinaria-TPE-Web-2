{include file= "header.tpl"}

    <ul class="listamascotas">
        {foreach from=$clientes item=$cliente}
            <li>
                <a href="cliente/{$cliente->id_cliente}">{$cliente->nombre}</a>
                {if $is_logged}
                    <button class="modificar">
                    <a href="update/cliente/{$cliente->id_cliente}">Editar</a>
                    </button>
                    <button class="borrar">
                    <a href="delete_cliente/{$cliente->id_cliente}">Borrar</a>
                    </button>
                {/if}
            </li>
        {/foreach}
    </ul>

    {if $is_logged}
        <form class= "form" action="add_cliente" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input class="agregar" type="submit" value="Agregar Cliente">
        </form>
    {/if}
   
   
 {include file= "footer.tpl"}

