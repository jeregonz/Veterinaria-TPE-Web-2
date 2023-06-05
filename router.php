<?php
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

//require_once 'app/views/mascotas.view.php';
require_once 'app/controllers/mascotas.controller.php';
require_once 'app/controllers/clientes.controller.php';
//require_once 'app/controllers/view.controller.php';

if (!empty($_REQUEST['action'])) {
    $action = $_REQUEST['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían
}

$params = explode('/', $action);

$clientesController = new clientesController();
$mascotasController = new mascotasController();
$clientes = $clientesController->getAllClientes();

switch ($params[0]) {
    case 'inicio':
        
        
        
        //echo '<h1>inicio</h1>';
        //echo '<a href="mascotas" type="button">ir a mascotas</a>';
        //echo '<br>';
        //echo '<a href="clientes" type="button">ir a clientes</a>';
        
        break;
    case 'clientes':
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
                    if (count($params) > 2)
                        $clientesController-> deleteCliente($params[2]);
                    header("Location: " . BASE_URL . "clientes");
                    break;
                default:
                    //mostrar clientes
                    break;
            }
        }
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
                    header("Location: " . BASE_URL . "mascotas");
                    break;
                default:
                    echo "pagina '$params[1]' no encontrada";
                    break;
            }
        }
        break;
    case 'modify':
        if (count($params) > 1)
            $mascotasController->prepareUpdateMascota($params[1], $clientes);
        if ($params[1]=="updating")
            echo "<br>";
            if (isset($_POST) && !empty($_POST))
                $mascotasController->updateMascota($_POST);
        break;
    case 'cliente':
        if (count($params) > 1){
            $clientesController-> showCliente($params[1]);
        }
        break;
    case 'mascota':
        if (count($params) > 1){
            $mascotasController-> showMascota($params[1]);
        }
        break;
    default:
        echo "página '$params[0]' no encontrada";
        break;
}