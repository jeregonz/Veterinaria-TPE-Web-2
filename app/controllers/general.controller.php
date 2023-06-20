<?php

require_once 'app/views/general.view.php';
require_once 'app/models/usuarios.model.php';

class generalController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new usuariosModel();
        $this->view = new generalView();
    }

    function showInicio() {
        session_start();
        if (isset($_SESSION['IS_LOGGED']) && $_SESSION['IS_LOGGED'])
            $this->view->showInicio(true);
        else
            $this->view->showInicio(false);
    }

    public function showLogin() {
        session_start();
        session_destroy();
        $this->view->showFormLogin(false);
    }

    public function validateUser() {
        if (isset($_POST['userName']) && isset($_POST['password'])) {
            $userName = $_POST['userName'];
            $password = $_POST['password'];
            
            $user = $this->model->getUserByName($userName);

            if ($user && password_verify($password, $user->clave)) {
                session_start();
                $_SESSION['USER_ID'] = $user->id_usuario;
                $_SESSION['USER_NAME'] = $user->nombre;
                $_SESSION['IS_LOGGED'] = true;

                header("Location: " . BASE_URL);
            } else {
                $this->showLogin();
            }
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

}
