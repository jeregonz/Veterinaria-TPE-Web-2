<?php

require_once ('libs/smarty/Smarty.class.php');

class generalView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showInicio($is_logged) {
        $this->smarty->assign('is_logged', $is_logged);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('inicio.tpl');
    }

    function showFormLogin($is_logged) {
        $this->smarty->assign('is_logged', $is_logged);
        $this->smarty->assign('title', "Login");
        $this->smarty->display('formLogin.tpl');
    }



}