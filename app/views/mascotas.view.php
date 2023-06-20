<?php

require_once ('libs/smarty/Smarty.class.php');

class mascotasView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    public function showMascotaById($mascota) {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('mascota', $mascota);
        $this->smarty->display('mascota.tpl');
    }

    public function showFormMascotas($mascotas, $clientes, $is_logged) {
        // mostrar el tpl
        $this->smarty->assign('is_logged', $is_logged);
        $this->smarty->assign('title', 'Mascotas');
        $this->smarty->assign('clientes', $clientes);
        $this->smarty->assign('mascotas', $mascotas);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('formMascotas.tpl');
    }

    public function showUpdateMascota($mascota, $clientes){
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('clientes', $clientes);
        $this->smarty->assign('mascota', $mascota);
        $this->smarty->display('updateMascota.tpl');
    }

    public function showMensaje($mensaje){
        echo "$mensaje";
    }
}