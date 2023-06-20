<?php

require_once ('libs/smarty/Smarty.class.php');

class generalView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showFormLogin() {
        $this->smarty->assign('title', "Login");
        $this->smarty->display('formLogin.tpl');
    }



}