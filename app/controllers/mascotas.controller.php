<?php

require_once 'app/views/mascotas.view.php';

class mascotasController {
    //private $model;
    private $view;

    public function __construct() {
        //$this->model = new mascotasModel();
        $this->view = new mascotasView();

    }

    public function showFormMascotas() {
        $this->view->showFormMascotas();
    }

    function addMascota() {
        // TODO: validar entrada de datos
        if (isset($_REQUEST['nombre'])){
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $raza = $_POST['raza'];
            $id_cliente = $_REQUEST['id_cliente'];
        }
        $this->view->showMensaje("se agrego la mascota con nombre: $nombre, de tipo: $tipo y raza: $raza, del cliente $id_cliente");
        //$id = $this->model->insertMascota($nombre, $tipo, $raza, $id_cliente);

        //header("Location: " . BASE_URL); 
    }


}
