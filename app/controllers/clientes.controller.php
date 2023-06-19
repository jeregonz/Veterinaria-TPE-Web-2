<?php

require_once 'app/views/clientes.view.php';
require_once 'app/models/clientes.model.php';

class clientesController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new clientesModel();
        $this->view = new clientesView();

    }

    public function showCliente($id) {
        if (is_numeric($id)){
            if($cliente = $this->getClienteAndMascota($id))
                $this->view->showClienteById($cliente, true);
            elseif ($cliente = $this->getSoloCliente($id))
                $this->view->showClienteById($cliente, false);
            else
                $this->view->showMensaje("cliente $id no encontrado");
        }
        else
            $this->view->showMensaje("cliente $id no encontrado");
    }

    public function showFormClientes() {
        $this->view->showFormClientes();
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
        // TODO: validar entrada de datos
        if (isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
        }
        
        $this->model->insertCliente($nombre, $telefono, $email);      
    }

    public function deleteCliente($id) {
        $this->model->deleteClienteById($id);
    }

    public function prepareUpdateCliente($id) {
        if (is_numeric($id)){
            $cliente = $this->model->getClienteById($id);
            if($cliente)
                    $this->view->showUpdateCliente($cliente);
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
}
