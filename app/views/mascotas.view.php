<?php

require_once ('libs/smarty/Smarty.class.php');

class mascotasView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function showMascotaById($mascota, $is_logged) {
        $this->smarty->assign('title', $mascota->nombre);
        $this->smarty->assign('is_logged', $is_logged);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('mascota', $mascota);
        $this->smarty->display('mascota.tpl');
    }

    public function showAllMascotas($mascotas, $clientes, $is_logged) {
        $this->smarty->assign('is_logged', $is_logged);
        $this->smarty->assign('title', 'Mascotas');
        $this->smarty->assign('clientes', $clientes);
        $this->smarty->assign('mascotas', $mascotas);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->display('allMascotas.tpl');
    }

    public function showUpdateMascota($mascota, $clientes, $is_logged){
        $this->smarty->assign('title', 'Modificar mascota');
        $this->smarty->assign('is_logged', $is_logged);
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('clientes', $clientes);
        $this->smarty->assign('mascota', $mascota);
        $this->smarty->display('updateMascota.tpl');
    }

    public function showMensaje($mensaje){
        echo "$mensaje";
    }

}