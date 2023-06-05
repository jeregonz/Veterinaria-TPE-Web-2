<?php
/* Smarty version 4.3.1, created on 2023-06-05 01:11:47
  from 'C:\xampp\htdocs\web2\TPE-Web-2\templates\formMascotas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647d1a3305ed67_92885507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609b6a54acbc978c40d56bd3b6b42c9cb17c0ba9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE-Web-2\\templates\\formMascotas.tpl',
      1 => 1685920304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647d1a3305ed67_92885507 (Smarty_Internal_Template $_smarty_tpl) {
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

    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
mascotas/modify/37" type="button">borrar mascota 37</a>

    <form action="mascotas/add" method="post">
        <label for="nombre">Nombre de la Mascota:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" required>

        <label for="raza">Raza:</label>
        <input type="text" id="raza" name="raza" required>

        <label for="id_cliente">Nombre del dueño:</label>
        <select id="id_cliente" name="id_cliente" required>
            <option></option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientes']->value, 'cliente');
$_smarty_tpl->tpl_vars['cliente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->value) {
$_smarty_tpl->tpl_vars['cliente']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->id_cliente;?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
                
        <input type="submit" value="Agregar Mascota">
    </form>

    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
" type="button">volver a inicio</a>
</body><?php }
}
