{include file="header.tpl"}

    <p>nombre del cliente: {$cliente[0].nombre}</p>
    {if $tiene_mascotas}
        <p>{$cliente[0].nombre} tiene {$cliente|@count} mascotas</p>
        {foreach from=$cliente item=fila key=key}
            <p>nombre de mascota {$key+1}: 
                <a class="mascota" href="{$BASE_URL}mascota/{$fila.id_mascota}">{$fila.nombre_mascota}</a>
            </p>
        {/foreach}
    {else}
        <p>{$cliente[0].nombre} no tiene mascotas.</p>
    {/if}


{include file= "footer.tpl"}
