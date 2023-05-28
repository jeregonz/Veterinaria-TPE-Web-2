<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

require_once 'app/views/mascotas.view.php';
require_once 'app/controllers/mascotas.controller.php';

if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'inicio':
        echo '<h1>inicio</h1>';
        echo '<a href="mascotas" type="button">ir a agregar mascotas</a>';
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
        $mascotasController = new mascotasController();
        $mascotasController->showFormMascotas();
        if (count($params) > 1){
            switch ($params[1]){
                case 'add':
                    $mascotasController-> addMascota();
                    // if (isset($_REQUEST['nombre'])){
                    //     $nombre = $_REQUEST['nombre'];
                    //     $tipo = $_REQUEST['tipo'];
                    //     $raza = $_REQUEST['raza'];
                    //     $id_cliente = $_REQUEST['id_cliente'];
                    //     echo "se agrego la mascota con nombre: $nombre, de tipo: $tipo y raza: $raza";
                    // }
                    header("Location: " . BASE_URL . "mascotas");
                    break;
                case 'modify':
                    //formulario con parametros para editar
                    break;
                case 'delete':
                    //con id para eliminar
                    break;
            }
        }
        break;
    default:
        echo "pagina '$params[0]' no encontrada";
        break;
}