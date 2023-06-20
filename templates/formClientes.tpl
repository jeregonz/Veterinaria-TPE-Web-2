{include file= "head.tpl"}

<body>
{include file= "header.tpl"}

 

    <form class= "form" action="clientes/add" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="telefono" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Agregar Cliente">
    </form>

    <a class= "boton_volver" href="inicio" type="button">Volver a inicio</a>
   
 {include file= "footer.tpl"}

