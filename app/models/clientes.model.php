<?php

class clientesModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_veterinaria;charset=utf8', 'root', '');
    }

    public function getClienteById($id){
        $query = $this->db->prepare('SELECT * FROM clientes WHERE id_cliente = ?');
        $query->execute([$id]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getClienteAndMascota($id){
        $query = $this->db->prepare('SELECT clientes.*, mascotas.nombre as nombre_mascota, 
                                    mascotas.id_mascota as id_mascota
                                    FROM clientes 
                                    JOIN mascotas ON clientes.id_cliente = mascotas.id_cliente 
                                    WHERE clientes.id_cliente = ?');
        $query->execute([$id]);
        // $cliente = $query->fetchAll(PDO::FETCH_ASSOC);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllClientes() {
        $query = $this->db->prepare("SELECT * FROM clientes ORDER BY `nombre` ASC");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertCliente($nombre, $telefono, $email) {
        $query = $this->db->prepare("INSERT INTO clientes (nombre, telefono, email) VALUES (?, ?, ?)");
        $query->execute([$nombre, $telefono, $email]);

        //return $this->db->lastInsertId();
    }

    public function deleteClienteById($id) {
        $query = $this->db->prepare('DELETE FROM clientes WHERE id_cliente = ?');
        $query->execute([$id]);
    }

    public function updateClienteById($id_cliente, $nombre, $telefono, $email) {
        $query = $this->db->prepare('UPDATE `clientes` 
            SET `nombre`= ?, `telefono`=?, `email`= ? WHERE id_cliente = ?');
        
        $query->execute([$nombre, $telefono, $email, $id_cliente]);
    }
}