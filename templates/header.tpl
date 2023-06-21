<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{BASE_URL}">
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <title>Veterinaria Las + Cotas{if $title|default} | {$title}{/if}</title>
</head>

<body>
    <header>
        <img class="logo" src="img/logo.jpg">
        <h1 class="titulo"> Veterinaria Las + Cotas</h1>
            
                {if !$is_logged}
                    <button class="boton_login" type="button"> <a href=login> Login </a></button>
                {else}
                    <button class="boton_login" type="button"> <a href=logout> Logout </a></button>
                {/if}
            

    </header>
    <nav>
        <ul class="navigation">
            <li class="item"> <a href="inicio"> Inicio </a> </li>
            <li class="item"> Medicamentos </li>
            <li class="item"> Alimentos </li>
        </ul>
    </nav>
