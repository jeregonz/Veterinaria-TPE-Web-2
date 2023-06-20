{include file= "head.tpl"}

<body>


<li class="listamascotas">
        {foreach from=$mascotas item=$mascota}
        
                        <ul> 
                    <a href="{BASE_URL}mascota/{$mascota->id_mascota}">  {$mascota->nombre|capitalize} </a>
                </ul>  
        {/foreach}
    </li>

    <a href="{BASE_URL}" type="button">volver a inicio</a>
 {include file= "footer.tpl"}

