<?php

class usuariosModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_veterinaria;charset=utf8', 'root', '');
    }

    public function getUserByName($nombre) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE nombre = ?");
        $query->execute([$nombre]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

}
