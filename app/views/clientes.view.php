<?php

require_once ('libs/smarty/Smarty.class.php');

class clientesView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    public function showClienteById($cliente, $tiene_mascotas) {
        // mostrar el tpl
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('cliente', $cliente);
        $this->smarty->assign('tiene_mascotas', $tiene_mascotas);
        $this->smarty->display('cliente.tpl');
    }

<<<<<<< HEAD
    public function showFormClientes() {
        // mostrar el tpl
=======
    function showFormClientes() {
>>>>>>> 042b6dfb3552c65235501ad0b14955e5a5ed1310
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('formClientes.tpl');
    }

    public function showUpdateCliente($cliente){
        $this->smarty->assign('cliente', $cliente);
        $this->smarty->display('updateCliente.tpl');
    }

    public function showMensaje($mensaje){
        echo "$mensaje";
    }
}