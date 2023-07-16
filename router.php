<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

require_once 'app/controllers/mascotas.controller.php';
require_once 'app/controllers/clientes.controller.php';
require_once 'app/controllers/general.controller.php';

if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'inicio';
}

$params = explode('/', $action);

$clientesController = new clientesController();
$mascotasController = new mascotasController();
$generalController = new generalController();

$clientes = $clientesController->getAllClientes();

switch ($params[0]) {
    case 'inicio':
        $generalController-> showInicio();
        break;
        
    case 'clientes':
        $clientesController->showAllClientes();
        break;
    case 'add_cliente':
        $clientesController->addCliente();
        header("Location:" . BASE_URL . "clientes");
        break;
    case 'delete_cliente':
        if (count($params) > 1)
            $clientesController->deleteCliente($params[1]);
        break;
    case 'updating_cliente':
        $clientesController->updateCliente();
        break;
    case 'cliente':
        if (count($params) > 1) {
            $clientesController->showCliente($params[1], false);
        }
        break;

    case 'mascotas':
        $mascotasController->showAllMascotas($clientes);
    break;
    case 'add_mascota':
        $mascotasController->addMascota();
        header("Location:" . BASE_URL . "mascotas");
        break;
    case 'delete_mascota':
        if (count($params) > 1) {
            $mascotasController->deleteMascota($params[1]);
        }
        break;
    case 'updating_mascota':
        $mascotasController->updateMascota();
        break;
    case 'mascota':
        if (count($params) > 1) {
            $mascotasController->showMascota($params[1]);
        }
        break;

    case 'update':
        if (count($params) > 2) {
            if ($params[1] == "mascota") {
                $mascotasController->prepareUpdateMascota($params[2], $clientes);
                // if ($params[2] == "updating") {
                //     $mascotasController->updateMascota();
                // }
            } elseif ($params[1] == "cliente") {
                $clientesController->prepareUpdateCliente($params[2]);
                // if ($params[2] == "updating") {
                //     $clientesController->updateCliente();
                // }
            }
        }
        break;

    case 'login':
        $generalController->showLogin();
        break;
    case 'validate':
        $generalController->validateUser();
        break;
    case 'logout':
        $generalController->logout();
        break;

    default:
        echo "página '$params[0]' no encontrada";
        break;
}
