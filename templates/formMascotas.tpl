{include file= "head.tpl"}

<body>
{include file= "header.tpl"}

    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        label {
            margin-top: 5px;
        }

        input[type="submit"] {
            margin-top: 10px;
            border-radius: 5px;
            padding: 5px 10px;
            border: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* li{
            border-radius: 5px;
            border: 0.2%;
            border-color: rgb(3, 0, 199);
            border: 1px solid black;
        } */
        a{
            text-decoration: none;
        }
        .mascota{
            color: rgb(0, 0, 0);
            font-weight: bold;
        }
        .editar {
            border: 0.2%;
            border-radius: 5px;
            border-color: rgb(3, 0, 199);
            margin-left: 1%;
            background-color: rgb(238, 255, 0); /* Cambia el color del texto a azul */
            font-weight: bold;
        }
        .editar a {
            color: rgb(4, 0, 255);
        }
        .borrar {
            border: 0.2%;
            border-radius: 5px;
            border-color: rgb(0, 0, 0);
            margin-left: 1%;
            background-color: rgb(255, 0, 0); /* Cambia el color del texto a azul */
            font-weight: bold;
        }
        .borrar a {
            color: rgb(255, 255, 255);
        }
    </style>


    <ul class="listamascotas">
        {foreach from=$mascotas item=$mascota}
            <li> 
                <a class="mascota" href="mascota/{$mascota->id_mascota}">{$mascota->nombre|capitalize}</a>
                <span>pertenece a: </span>
                <a href="cliente/{$mascota->id_cliente}">{$mascota->nombre_cliente|capitalize}</a>
                {if $is_logged}
                    <button class="editar">
                    <a href="update/mascota/{$mascota->id_mascota}">Editar</a>
                    </button>
                    <button class="borrar">
                    <a href="delete_mascota/{$mascota->id_mascota}">Borrar</a>
                    </button>
                {/if}
            </li>
        {/foreach}
    </ul>

    {if $is_logged}
        <form action="add_mascota" method="post">
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
    {/if}
    <a href="inicio" type="button">volver a inicio</a>

    {include file= "footer.tpl"}
