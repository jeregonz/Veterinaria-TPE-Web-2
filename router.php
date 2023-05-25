<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//require_once '';

if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'inicio':
        echo '<h1>inicio</h1>';
        break;
    case 'clientes':
        switch ($params[1]) {
            case 'agregar':
                echo "agregar cliente";
                break;
            case 'borrar':
                //borrar
                break;
            default:
                //mostrar clientes
                break;
        }
        break;
    case 'mascotas':

        break;
    default:
        echo "pagina '$params[0]' no encontrada";
        break;
}