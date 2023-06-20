<?php

require_once 'app/views/clientes.view.php';
require_once 'app/models/clientes.model.php';
require_once 'app/helpers/auth.helper.php';

class clientesController {
    private $model;
    private $view;
    private $helper;

    public function __construct() {
        $this->model = new clientesModel();
        $this->view = new clientesView();
        $this->helper = new authHelper();

    }

    public function showCliente($id) {
        if (is_numeric($id)){
            session_start();
            $is_logged = isset($_SESSION['IS_LOGGED']) && $_SESSION['IS_LOGGED'];
            if($cliente = $this->getClienteAndMascota($id))
                $this->view->showClienteById($cliente, true, $is_logged);
            elseif ($cliente = $this->getSoloCliente($id))
                $this->view->showClienteById($cliente, false, $is_logged);
            else
            $this->view->showMensaje("cliente $id no encontrado");
        }
        else
            $this->view->showMensaje("cliente $id no encontrado");
    }

    public function showAllClientes() {
        $clientes = $this->getAllClientes();
        session_start();
        if (isset($_SESSION['IS_LOGGED']) && $_SESSION['IS_LOGGED'])
            $this->view->showAllClientes($clientes, true);
        else
            $this->view->showAllClientes($clientes, false);
        
    }

    public function getSoloCliente($id){
        return $this->model->getClienteById($id);
    }

    public function getClienteAndMascota($id){
        return $this->model->getClienteAndMascota($id);
    }

    public function getAllClientes(){
        return $this->model->getAllClientes();
    }

    public function addCliente() {
        if (isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
        }
        
        $this->model->insertCliente($nombre, $telefono, $email);      
    }

    public function deleteCliente($id) {
        $this->helper->checkLoggedIn();
        if (is_numeric($id)){
            if($this->getClienteAndMascota($id)){
                $this->showError();
                //$this->view->showMensaje("no se puede eliminar porque tiene al menos una mascota");
            }
            elseif ($this->getSoloCliente($id)){
                $this->model->deleteClienteById($id);
                header("Location: " . BASE_URL . "clientes");
            }
            else
                $this->view->showMensaje("cliente $id no encontrado");
        }
        else
            $this->view->showMensaje("cliente $id no encontrado");
    }

    public function prepareUpdateCliente($id) {
        $this->helper->checkLoggedIn();
        if (is_numeric($id)){
            $cliente = $this->model->getClienteById($id);
            if($cliente)
                    $this->view->showUpdateCliente($cliente, true);
                else
                    $this->view->showMensaje("cliente no encontrado");
        }
        else
            $this->view->showMensaje("cliente no encontrado");
    }

    public function updateCliente() {
        if (isset($_POST) && !empty($_POST)){
            $id_cliente = $_POST['id_cliente'];
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
        }

        $this->model->updateClienteById($id_cliente, $nombre, $telefono, $email);
        header("Location: " . BASE_URL . "cliente/" .$id_cliente);
    }

    public function showError(){
        $this->view->showError(true);
        die();
    }

}
