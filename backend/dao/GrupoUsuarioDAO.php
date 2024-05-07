<?php

require_once 'config/Database.php';
require_once 'entity/GrupoUsuario.php';
require_once 'BaseDAO.php';

class GrupoUsuarioDAO implements BaseDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM GrupoUsuario WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result) {
                return new GrupoUsuario(
                    $result['Id'],
                    $result['Nome'],
                    $result['Descricao'],
                    $result['DataCriacao'],
                    $result['DataAtualizacao'],
                    $result['Ativo']
                );
            }
            
            return null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM GrupoUsuario WHERE";
            $stmt = $this->db->prepare($sql);
            $grupos = [];

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $grupos = new GrupoUsuario(
                    
                );
            }
           
            return null;
        } catch (PDOException $e) {
            return [];
        }
    }


    public function create($usuario) {
        try {
            
        } catch (PDOException $e) {
            // TO-DO: implementar log
            return false;
        }
    }

    public function update($usuario) {
        try {
            

        } catch (PDOException $e) {
            // TO-DO: implementar log
            return false;
        }
    }

    public function delete($id) {
        try {
            
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>