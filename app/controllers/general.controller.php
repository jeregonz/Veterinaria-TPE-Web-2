<?php

require_once 'app/views/general.view.php';


class generalController {

    private $view;

    public function __construct() {

        $this->view = new generalView();

    }

    public function inicio() {

        $this-> view-> showInicio();

    }
}
