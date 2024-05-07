<?php

class GrupoUsuario {
    public $id;
    public $Nome;
    public $Descricao;
    public $DataCriacao;
    public $DataAtualizacao;
    public $UsuarioAtualizacao;
    public $Ativo;

    public function __construct($id, $Nome, $Descricao, $DataCriacao = null, $DataAtualizacao = null, $UsuarioAtualizacao = null, $Ativo = 1) 
    {
        $this->$id = $id;
        $this->$Nome = $Nome;
        $this->$Descricao = $Descricao;
        $this->$DataCriacao = $DataCriacao;
        $this->$DataAtualizacao = $DataAtualizacao;
        $this->$UsuarioAtualizacao = $UsuarioAtualizacao;
        $this->$Ativo = $Ativo;
    }

    public function getGrupoID(){
        return $this->id;
    }

    public function getNomeGrupo(){
        return $this->Nome;
    }

    public function getDescricaoGrupo(){
        return $this->Descricao;
    }

    public function getDataCriacaoGrupo(){
        return $this->DataCriacao;
    }

    public function getDataAtualizacaoGrupo(){
        return $this->DataAtualizacao;
    }

    public function getUsuarioAtualizacaoGrupo(){
        return $this->UsuarioAtualizacao;
    }

    public function getAtivoGrupo(){
        return $this->Ativo;
    }

}

?>