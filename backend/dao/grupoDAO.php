<?php

require_once 'config/Database.php';
require_once 'entity/Grupo.php';
require_once 'BaseDAO.php';

class GrupoDAO implements BaseDAO {
    public $db;

    public function __construct()
    {
     $this->db = Database::getInstance();
    }

    public function getById($id)
    {
        
    }

    public function getAll()
    {
        
    }

    public function create($Grupo)
    {
        try{

        $sql = "INSERT INTO grupousuario (Id, Nome, Descricao, DataCriacao, DataAtualizacao, UsuarioAtualizacao, Ativo) VALUES (:Id,:nomeGrupo,:descricao,current_timestamp(),current_timestamp(),current_timestamp(),true)";

        $stmt = $this->db->prepare($sql);

        $id = $Grupo->getGrupoID();
        $nomeGrupo = $Grupo->getNomeGrupo();
        $descricao = $Grupo->getDescricaoGrupo();
        $dataCriacao = $Grupo->getDataCriacaoGrupo();
        $dataAtualizacao = $Grupo->getDataAtualizacaoGrupo();
        $UsuarioAtualizacao = $Grupo->getUsuarioAtualizacaoGrupo();
        $ativo = $Grupo->getAtivoGrupo();

        $stmt->bindParam(':Id', $id);
        $stmt->bindParam(':nomeGrupo', $nomeGrupo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':DataCriacao', $dataCriacao);
        $stmt->bindParam(':DataAtualizacao', $dataAtualizacao);
        $stmt->bindParam(':UsuarioAtualizacao', $UsuarioAtualizacao);
        $stmt->bindParam(':ativo', $ativo);

        $stmt-> execute();

        return true;

        }
        
    } catch (PDOException){

    }

    public function update($entity)
    {
        
    }

    public function delete($id)
    {
        
    }
}






?>