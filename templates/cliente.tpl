{include file="header.tpl"}
<main>
    {if $tiene_mascotas}
        <p>nombre del cliente: 
            <span class="nombre-cliente">{$cliente[0].nombre}</span>
        </p>
        <p>{$cliente[0].nombre} tiene {$cliente|@count} mascotas</p>
        {foreach from=$cliente item=fila key=key}
            <p>nombre de mascota {$key+1}: 
                <a class="nombre-mascota" href="mascota/{$fila.id_mascota}">{$fila.nombre_mascota}</a>
            </p>
        {/foreach}
    {else}
        <p>{$cliente[0]->nombre} no tiene mascotas.</p>
    {/if}
    <a class="boton_volver" href="clientes">Volver a clientes</a>
</main>

{include file= "footer.tpl"}
