{include file= "head.tpl"}

<body>
<<<<<<< HEAD
{include file= "header.tpl"}

<a href="{BASE_URL}mascotas/delete/{$mascota->id_mascota}" type="button">Borrar mascota</a>
<a href="{BASE_URL}modify/{$mascota->id_mascota}" type="button">Editar mascota</a>
<a href="{BASE_URL}" type="button">volver a inicio</a>

<p>nombre de la mascota: {$mascota->nombre}</p>
<p>tipo de la mascota: {$mascota->tipo}</p>
<p>raza de la mascota: {$mascota->raza}</p>
=======
    <p>nombre de la mascota: {$mascota->nombre}</p>
    <p>tipo de la mascota: {$mascota->tipo}</p>
    <p>raza de la mascota: {$mascota->raza}</p>
    <p>dueño de la mascota: 
        <a href="{$BASE_URL}cliente/{$mascota->id_cliente}">{$mascota->nombre_cliente}
    </p>
>>>>>>> 2fb13a7f12cf491af0ae766190d61a34b578dbd6
    

{include file= "footer.tpl"}