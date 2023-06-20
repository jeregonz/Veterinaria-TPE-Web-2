<?php

require_once ('libs/smarty/Smarty.class.php');

class generalView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }


    function showInicio() {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('inicio.tpl');
    }

 
}