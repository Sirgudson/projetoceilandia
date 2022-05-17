<?php

class EventoDTO {
    private $local;
    private $titulo;
    private $descricao;
    private $inicio;
    private $encerramento;
    private $capacidade;
    private $id;


    public function getLocal() {
        return $this->local;
    }
    public function setLocal( $local ) {
        $this->local = $local;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo( $titulo ) {
        $this->titulo = $titulo;
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function setDescricao( $descricao ) {
        $this->descricao = $descricao;
    }
    public function getInicio() {
        return $this->inicio;
    }
    public function setInicio( $inicio ) {
        $this->inicio = $inicio;
    }
    public function getEncerramento() {
        return $this->encerramento;
    }
    public function setEncerramento( $encerramento ) {
        $this->encerramento = $encerramento;
    }
    public function getCapacidade() {
        return $this->capacidade;
    }
    public function setCapacidade( $capacidade ) {
        $this->capacidade = $capacidade;
    }
    public function getId() {
        return $this->id;
    }
    public function setId( $id ) {
        $this->id = $id;
    }

}