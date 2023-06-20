{include file= "head.tpl"}

<body>
{include file= "header.tpl"}

<li class="listamascotas">
        {foreach from=$mascotas item=$mascota}
        
                        <ul> 
                    <a href="{BASE_URL}mascota/{$mascota->id_mascota}">  {$mascota->nombre|capitalize} </a>
                </ul>  
        {/foreach}
    </li>

       <form action="mascotas/add" method="post">
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

    

    {include file= "footer.tpl"}
