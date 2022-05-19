<?php

class AvaliacaoDTO {
    private $nome;
    private $opiniao;
    private $avaliacao;
    private $id;


    public function getNome() {
        return $this->nome;
    }
    public function setNome( $nome ) {
        $this->nome = $nome;
    }
    public function getOpiniao() {
        return $this->opiniao;
    }
    public function setOpiniao( $opiniao ) {
        $this->opiniao = $opiniao;
    }
    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function setAvaliacao( $avaliacao ) {
        $this->avaliacao = $avaliacao;
    }
    public function getId() {
        return $this->id;
    }
    public function setId( $id ) {
        $this->id = $id;
    }

}