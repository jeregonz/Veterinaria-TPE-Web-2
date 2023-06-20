{include file= "head.tpl"}

<body>
{include file= "header.tpl"}

<a href="{BASE_URL}mascotas/delete/{$mascota->id_mascota}" type="button">Borrar mascota</a>
<a href="{BASE_URL}modify/{$mascota->id_mascota}" type="button">Editar mascota</a>
<a href="{BASE_URL}" type="button">volver a inicio</a>

<p>nombre de la mascota: {$mascota->nombre}</p>
<p>tipo de la mascota: {$mascota->tipo}</p>
<p>raza de la mascota: {$mascota->raza}</p>
    

{include file= "footer.tpl"}