{include file="header.tpl"}
<main>
    <p>nombre de la mascota: {$mascota->nombre}</p>
    <p>tipo de la mascota: {$mascota->tipo}</p>
    <p>raza de la mascota: {$mascota->raza}</p>
    <p>dueño de la mascota: 
        <a href="cliente/{$mascota->id_cliente}">{$mascota->nombre_cliente}</a>
    </p>

    <a href="mascotas">Volver a lista de mascotas</a>

</main>
{include file="footer.tpl"}