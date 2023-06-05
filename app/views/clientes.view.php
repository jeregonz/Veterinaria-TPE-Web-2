<?php

require_once ('libs/smarty/Smarty.class.php');

class clientesView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showClienteById($cliente) {
        // mostrar el tpl
        $this->smarty->assign('cliente', $cliente);
        $this->smarty->display('cliente.tpl');
    }

    function showFormClientes() {
        // mostrar el tpl
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('formClientes.tpl');
    }

    function showMensaje($mensaje){
        echo "$mensaje";
    }
}