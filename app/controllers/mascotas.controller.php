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

    public function showMascota($id) {
        if (is_numeric($id)){
            $mascota = $this->model->getMascotaById($id);
            if($mascota)
                $this->view->showMascotaById($mascota);
            else
                $this->view->showMensaje("mascota no encontrada");
        }
        else
            $this->view->showMensaje("mascota no encontrada");
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

    function prepareUpdateMascota($id, $clientes) {
        if (is_numeric($id)){
            $mascota = $this->model->getMascotaById($id);
            if($mascota)
                    $this->view->showUpdateMascota($mascota, $clientes);
                else
                    $this->view->showMensaje("mascota no encontrada");
        }
        else
            $this->view->showMensaje("mascota no encontrada");
    }

    function updateMascota($mascota) {
        if (isset($mascota) && !empty($mascota)){
            $id_mascota = $mascota['id_mascota'];
            $nombre = $mascota['nombre'];
            $tipo = $mascota['tipo'];
            $raza = $mascota['raza'];
            $id_cliente = $mascota['id_cliente'];
        }

        $this->model->updateMascotaById($id_mascota, $nombre, $tipo, $raza, $id_cliente);
        header("Location: " . BASE_URL . "mascota/" .$id_mascota);
    }
}
