<?php

class ClienteDTO {
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    private $situacao;


    public function getId() {
        return $this->id;
    }
    public function setId( $id ) {
        $this->id = $id;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome( $nome ) {
        $this->nome = $nome;
    }
    public function getCpf() {
        return $this->cpf;
    }
    public function setCpf( $cpf ) {
        $this->cpf = $cpf;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail( $email ) {
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha( $senha ){
        $this->senha = $senha;
    }
    public function getSituacao(){
        return $this->situacao;
    }
    public function setSituacao( $situacao ){
        $this->situacao = $situacao;
    }

}