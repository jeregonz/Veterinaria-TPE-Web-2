<?php
/* Smarty version 4.3.1, created on 2023-05-27 01:31:42
  from 'C:\xampp\htdocs\web2\TPE-Web-2\templates\formMascotas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6471415eb76b24_08973075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609b6a54acbc978c40d56bd3b6b42c9cb17c0ba9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Web-2\\templates\\formMascotas.tpl',
      1 => 1685143900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6471415eb76b24_08973075 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria - Mascotas</title>
</head>
<body>
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
    </style>

    <form action="add" method="post">
        <label for="nombre">Nombre de la Mascota:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" required>

        <label for="raza">Raza:</label>
        <input type="text" id="raza" name="raza" required>

        <label for="id_cliente">ID cliente:</label>
        <select id="id_cliente" name="id_cliente" required>
                <option></option>
                <option value="1">nombre 1</option>
                <option value="2">nombre 2</option>
                <option value="3">nombre 3</option>
                <option value="4">nombre 4</option>
                <option value="5">nombre 5</option>
        </select>

        <input type="submit" value="Agregar">
    </form>

    <a href="inicio" type="button">volver a inicio</a>
</body><?php }
}
