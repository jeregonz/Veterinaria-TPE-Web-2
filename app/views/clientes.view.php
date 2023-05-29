<?php

require_once ('libs/smarty/Smarty.class.php');

class clientesView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showFormClientes() {
        // mostrar el tpl
        $this->smarty->display('formClientes.tpl');
    }

    function showMensaje($mensaje){
        echo "$mensaje";
    }
}