<?php

require_once ('libs/smarty/Smarty.class.php');

class mascotasView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }
    function showUpdateMascota($mascota, $clientes){
        $this->smarty->assign('clientes', $clientes);
        $this->smarty->assign('mascota', $mascota);
        $this->smarty->display('updateMascota.tpl');
    }

    function showMascotaById($mascota) {
        // mostrar el tpl
        $this->smarty->assign('mascota', $mascota);
        $this->smarty->display('mascota.tpl');
    }

    function showFormMascotas($clientes) {
        // mostrar el tpl
        $this->smarty->assign('clientes', $clientes);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('formMascotas.tpl');
    }

    function showMensaje($mensaje){
        echo "$mensaje";
    }
}