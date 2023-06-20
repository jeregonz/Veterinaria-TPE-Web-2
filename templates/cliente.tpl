<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria - Cliente {$cliente[0].nombre}</title>
</head>
<body>
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


</body>