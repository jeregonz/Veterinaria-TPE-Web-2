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
$clientes = $clientesController->getAllClientes();

switch ($params[0]) {
    case 'inicio':
        $generalController= new generalController();
        $generalController-> inicio();
        
        
        echo '<h1>inicio</h1>';
        echo '<a href="mascotas" type="button">ir a mascotas</a>';
        echo '<br>';
        echo '<a href="clientes" type="button">ir a clientes</a>';
        
        break;
        
    case 'clientes':
        $clientesController->showFormClientes();
        break;
    case 'mascotas':
            $mascotasController->showFormMascotas($clientes);
        if (count($params) > 1){
            switch ($params[1]){
                case 'add':
                    $mascotasController-> addMascota();
                    header("Location: " . BASE_URL . "mascotas");
                    break;

                case 'delete':
                    if (count($params) > 2)
                        $mascotasController-> deleteMascota($params[2]);

                   // header('Location: " . BASE_URL . "mascotas");
                    break;
                default:
                    echo "pagina '$params[1]' no encontrada";
                    break;
            }

        }
        break;
    case 'delete_cliente':
        if (count($params) > 1)
            $clientesController->deleteCliente($params[1]);
        header("Location: " . BASE_URL . "clientes");
        break;
    case 'cliente':
        if (count($params) > 1) {
            $clientesController->showCliente($params[1]);
        }
        break;

    case 'mascotas':
        $mascotasController->showFormMascotas($clientes);
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
    case 'mascota':
        if (count($params) > 1) {
            $mascotasController->showMascota($params[1]);
        }
        break;

    case 'update':
        if (count($params) > 2) {
            if ($params[1] == "mascota") {
                $mascotasController->prepareUpdateMascota($params[2], $clientes);
                if ($params[2] == "updating") {
                    $mascotasController->updateMascota();
                }
            } elseif ($params[1] == "cliente") {
                $clientesController->prepareUpdateCliente($params[2]);
                if ($params[2] == "updating") {
                    $clientesController->updateCliente();
                }
            }
        }
        break;
    default:
        echo "página '$params[0]' no encontrada";
        break;
}
