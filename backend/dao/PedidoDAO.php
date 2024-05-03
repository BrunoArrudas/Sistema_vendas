<?php

require_once '../config/Database.php';
require_once '../entity/Pedido.php'; //Dois pontos sai do diretorio atual e entra nos outros

class PedidoDAO implements BaseDAO{

    private $db;
    
    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function getById($id){

    }

    public function getAll(){

    }

    public function create($entity){

    }

    public function update($entity){

    }

    public function delete($id){

    }

}

?>