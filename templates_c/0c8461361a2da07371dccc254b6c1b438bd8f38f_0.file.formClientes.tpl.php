<?php
/* Smarty version 4.3.1, created on 2023-06-01 05:17:20
  from 'C:\xampp\htdocs\web2\TPE-Web-2\templates\formClientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64780dc00be219_53480287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c8461361a2da07371dccc254b6c1b438bd8f38f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Web-2\\templates\\formClientes.tpl',
      1 => 1685589023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64780dc00be219_53480287 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria - Clientes</title>
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

    <form action="clientes/add" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="telefono" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Agregar Cliente">
    </form>

    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" type="button">volver a inicio</a>
</body><?php }
}
