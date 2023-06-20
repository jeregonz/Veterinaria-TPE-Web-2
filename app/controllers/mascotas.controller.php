<?php

require_once 'app/views/mascotas.view.php';
require_once 'app/models/mascotas.model.php';
require_once 'app/helpers/auth.helper.php';

class mascotasController {
    private $model;
    private $view;
    private $helper;

    public function __construct() {
        $this->model = new mascotasModel();
        $this->view = new mascotasView();
        $this->helper = new authHelper();

    }

    public function showMascota($id) {
        if (is_numeric($id)){
            $mascota = $this->getMascota($id);
            if($mascota)
                $this->view->showMascotaById($mascota);
            else
                $this->view->showMensaje("mascota no encontrada");
        }
        else
            $this->view->showMensaje("mascota no encontrada");
    }

    public function showFormMascotas($clientes) {
        $mascotas = $this->getAllMascotas();
        session_start();
        if (isset($_SESSION['IS_LOGGED']) && $_SESSION['IS_LOGGED']){
            $this->view->showFormMascotas($mascotas, $clientes, true);
        }
        else
            $this->view->showFormMascotas($mascotas, $clientes, false);
    }

    public function getMascota($id){
        return $this->model->getMascotaById($id);
    }

    public function showAllMascotas() {
        $mascotas = $this->getAllMascotas();
        $this->view->showListaMascotas($mascotas);


    }

    public function getAllMascotas(){
        return $this->model->getAllMascotas();
    }

    public function addMascota() {
        if (isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['raza']) && isset($_POST['id_cliente'])){
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $raza = $_POST['raza'];
            $id_cliente = $_POST['id_cliente'];
        }
        
        $this->model->insertMascota($nombre, $tipo, $raza, $id_cliente);
        
    }

    public function deleteMascota($id) {
        $this->helper->checkLoggedIn();
            $mascota = $this->getMascota($id);
            if ($mascota){
                $this->model->deleteMascotaById($id);
                header("Location: " . BASE_URL . "mascotas");
            }
            else $this->view->showMensaje('mascota no encontrada');
    }

    public function prepareUpdateMascota($id, $clientes) {
        $this->helper->checkLoggedIn();
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

    public function updateMascota() {
        if (isset($_POST['id_mascota']) && isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['raza']) && isset($_POST['id_cliente'])){
            $id_mascota = $_POST['id_mascota'];
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            $raza = $_POST['raza'];
            $id_cliente = $_POST['id_cliente'];
        }

        $this->model->updateMascotaById($id_mascota, $nombre, $tipo, $raza, $id_cliente);
        header("Location: " . BASE_URL . "mascota/" .$id_mascota);
    }
}
