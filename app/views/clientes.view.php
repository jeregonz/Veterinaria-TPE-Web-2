<?php

require_once ('libs/smarty/Smarty.class.php');

class clientesView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showInicio() {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('inicio.tpl');
    }
    
    public function showClienteById($cliente, $tiene_mascotas, $is_logged) {
        // mostrar el tpl
        $this->smarty->assign('is_logged', $is_logged);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('cliente', $cliente);
        $this->smarty->assign('tiene_mascotas', $tiene_mascotas);
        $this->smarty->display('cliente.tpl');
    }

    public function showAllClientes($clientes, $is_logged) {
        // mostrar el tpl
        $this->smarty->assign('is_logged', $is_logged);
        $this->smarty->assign('clientes', $clientes);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('allClientes.tpl');
    }

    public function showUpdateCliente($cliente, $is_logged){
        $this->smarty->assign('is_logged', $is_logged);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('cliente', $cliente);
        $this->smarty->display('updateCliente.tpl');
    }

    public function showError($is_logged){
        $this->smarty->assign('is_logged', $is_logged);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('errorCliente.tpl');
    }

    public function showMensaje($mensaje){
        echo "$mensaje";
    }
}