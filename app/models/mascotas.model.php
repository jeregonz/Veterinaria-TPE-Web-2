<?php

class mascotasModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_veterinaria;charset=utf8', 'root', '');
    }

    public function getMascotaById($id){
        $query = $this->db->prepare('SELECT * FROM mascotas WHERE id_mascota = ?');
        $query->execute([$id]);

        return $query->fetch(PDO::FETCH_OBJ); // devuelve un objeto
    }
    /**
     * Devuelve la lista de mascotas completa.
     */
    public function getAllMascotas() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM mascotas");
        $query->execute();

        // 3. obtengo los resultados
        return $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    }
    /**
     * Inserta una mascota en la base de datos.
     */
    public function insertMascota($nombre, $tipo, $raza, $id_cliente) {
        $query = $this->db->prepare("INSERT INTO mascotas (nombre, tipo, raza, id_cliente) VALUES (?, ?, ?, ?)");
        $query->execute([$nombre, $tipo, $raza, $id_cliente]);

        //return $this->db->lastInsertId();
    }
    /**
     * Elimina una mascota dado su id.
     */
    function deleteMascotaById($id) {
        $query = $this->db->prepare('DELETE FROM mascotas WHERE id_mascota = ?');
        $query->execute([$id]);
    }
    
    function updateMascotaById($id_mascota, $nombre, $tipo, $raza, $id_cliente) {
        $query = $this->db->prepare('UPDATE `mascotas` 
            SET `nombre`= ?, `tipo`=?, `raza`= ?, `id_cliente`= ? WHERE id_mascota = ?');
        
        $query->execute([$nombre, $tipo, $raza, $id_cliente, $id_mascota]);
    }

}