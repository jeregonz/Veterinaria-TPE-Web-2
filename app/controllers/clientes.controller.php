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
            $cliente = $this->model->getClienteById($id);
            if($cliente)
                $this->view->showClienteById($cliente);
            else
                $this->view->showMensaje("cliente no encontrado");
        }
        else
            $this->view->showMensaje("cliente no encontrado");
    }

    public function showFormClientes() {
        $this->view->showFormClientes();
    }

    public function getCliente($id){
        return $this->model->getClienteById($id);
    }

    public function getAllClientes(){
        return $this->model->getAllClientes();
    }

    function addCliente() {
        // TODO: validar entrada de datos
        if (isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
        }
        
        $this->model->insertCliente($nombre, $telefono, $email);
        
        //$this->view->showMensaje("se agrego el cliente");
        
        //$id = $this->model->insertMascota($nombre, $telefono, $email);

        
    }

    function deleteCliente($id) {
        $this->model->deleteClienteById($id);
    }

}
