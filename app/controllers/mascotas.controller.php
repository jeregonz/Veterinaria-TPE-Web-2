<?php

require_once 'app/views/mascotas.view.php';
require_once 'app/models/mascotas.model.php';

class mascotasController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new mascotasModel();
        $this->view = new mascotasView();

    }

    public function showFormMascotas($clientes) {
        $this->view->showFormMascotas($clientes);
    }

    public function getAllMascotas(){
        return $this->model->getAllMascotas();
    }

    function addMascota() {
        // TODO: validar entrada de datos
        if (isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $raza = $_POST['raza'];
            $id_cliente = $_POST['id_cliente'];
        }
        
        $this->model->insertMascota($nombre, $tipo, $raza, $id_cliente);
        
        //$this->view->showMensaje("se agrego la mascota con nombre: $nombre, de tipo: $tipo y raza: $raza, del cliente $id_cliente");
        
        //$id = $this->model->insertMascota($nombre, $tipo, $raza, $id_cliente);
   
    }

    function deleteMascota($id) {
        $this->model->deleteMascotaById($id);
    }


}
