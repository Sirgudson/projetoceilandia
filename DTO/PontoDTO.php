<?php

class PontoDTO {
    private $local;
    private $titulo;
    private $descricao;
    private $foto;
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
    public function getFoto() {
        return $this->foto;
    }
    public function setFoto( $foto ) {
        $this->foto = $foto;
    }
    public function getId() {
        return $this->id;
    }
    public function setId( $id ) {
        $this->id = $id;
    }

}