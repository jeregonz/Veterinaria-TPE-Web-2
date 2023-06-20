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
        $this->view->showInicio();
    }

    public function showLogin() {
        $this->view->showFormLogin();
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
                $this->view->showFormLogin();
            }
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

}
