<?php

class clientesModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_veterinaria;charset=utf8', 'root', '');
    }
    /**
     * Devuelve la lista de clientes completa.
     */
    public function getAllClientes() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM clientes");
        $query->execute();

        // 3. obtengo los resultados
        $clientes = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $clientes;
    }
    /**
     * Inserta un cliente en la base de datos.
     */
    public function insertCliente($nombre, $telefono, $email) {
        $query = $this->db->prepare("INSERT INTO clientes (nombre, telefono, email) VALUES (?, ?, ?)");
        $query->execute([$nombre, $telefono, $email]);

        //return $this->db->lastInsertId();
    }
    /**
     * Elimina un cliente dado su id.
     */
    function deleteClienteById($id) {
        $query = $this->db->prepare('DELETE FROM clientes WHERE id_cliente = ?');
        $query->execute([$id]);
    }

    /*
    function updateClienteById($id_cliente, $nombre, $telefono, $email) {
        $query = $this->db->prepare('UPDATE `clientes` 
            SET `nombre`= ?, `telefono`=?, `email`= ? WHERE id_cliente = ?');
        
        $query->execute([$nombre, $telefono, $email, $id_cliente]);
    }
    */
}