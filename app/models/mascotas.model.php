<?php

class mascotasModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_veterinaria;charset=utf8', 'root', '');
    }
    /**
     * Inserta una mascota en la base de datos.
     */
    public function insertMascotas($nombre, $tipo, $raza, $id_cliente) {
        $query = $this->db->prepare("INSERT INTO mascotas (nombre, tipo, raza, id_cliente) VALUES (?, ?, ?, ?)");
        $query->execute([$nombre, $tipo, $raza, $id_cliente]);

        //return $this->db->lastInsertId();
    }

}