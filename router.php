<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//require_once 'app/views/mascotas.view.php';
require_once 'app/controllers/mascotas.controller.php';
require_once 'app/controllers/clientes.controller.php';


if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'inicio':
        echo '<h1>inicio</h1>';
        echo '<a href="mascotas" type="button">ir a mascotas</a>';
        echo '<br>';
        echo '<a href="clientes" type="button">ir a clientes</a>';
        break;
    case 'clientes':
        $clientesController = new clientesController();
        $clientesController->showFormClientes();
        if (count($params) > 1){
            switch ($params[1]) {
                case 'add':
                    $clientesController-> addCliente();
                    header("Location: " . BASE_URL . "clientes");
                    break;
                case 'modify':

                    break;
                case 'delete':
                    //borrar
                    break;
                default:
                    //mostrar clientes
                    break;
            }
        }
        break;
    case 'mascotas':
        $mascotasController = new mascotasController();
        $mascotasController->showFormMascotas();
        if (count($params) > 1){
            switch ($params[1]){
                case 'add':
                    $mascotasController-> addMascota();
                    header("Location: " . BASE_URL . "mascotas");
                    break;
                case 'modify':
                    //formulario con parametros para editar
                    break;
                case 'delete':
                    //con id para eliminar
                    break;
                default:
                    echo "pagina '$params[1]' no encontrada";
                    break;
            }
        }
        break;
    default:
        echo "pagina '$params[0]' no encontrada";
        break;
}