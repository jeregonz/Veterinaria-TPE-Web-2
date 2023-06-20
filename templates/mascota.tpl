{include file= "header.tpl"}

    <p>nombre de la mascota: {$mascota->nombre}</p>
    <p>tipo de la mascota: {$mascota->tipo}</p>
    <p>raza de la mascota: {$mascota->raza}</p>
    <p>dueño de la mascota: 
        <a href="{$BASE_URL}cliente/{$mascota->id_cliente}">{$mascota->nombre_cliente}</a>
    </p>
    

{include file= "footer.tpl"}