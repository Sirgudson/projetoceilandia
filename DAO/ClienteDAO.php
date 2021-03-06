<?php
require_once 'conexao/Conexao.php';

class ClienteDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( ClienteDTO $clienteDTO ) {
        try {
            $sql = "INSERT INTO "
                . "tb_usuarios(nome,cpf,email,password,ativo) "
                . "VALUES(:nome,:cpf,:email,:senha,:ativo)";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":nome", $clienteDTO->getNome() );
            $stmt->bindValue( ":cpf", $clienteDTO->getCpf() );
            $stmt->bindValue( ":email", $clienteDTO->getEmail() );
            $stmt->bindValue( ":senha", $clienteDTO->getSenha() );
            $stmt->bindValue( ":ativo", $clienteDTO->getSituacao() );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM tb_usuarios WHERE ATIVO = 1";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $usuarios = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $usuarios;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os usuarios: ", $e->getMessage();
        }
    }

    public function findAllInativos() {
        try {
            $sql = "SELECT * FROM tb_usuarios WHERE ATIVO = 0";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $usuarios = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $usuarios;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os usuarios: ", $e->getMessage();
        }
    }

    public function deleteById( $idUsuario ) {
        try {
            $sql = "DELETE FROM tb_usuarios WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $idUsuario );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo "Erro ao excluir ", $e->getMessage();
        }
    }

    public function findById( $id ) {
        try {
            $sql = "SELECT * FROM tb_usuarios WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $id );
            $stmt->execute();
            $usuarios = $stmt->fetch( PDO::FETCH_ASSOC );
            return $usuarios;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os usuarios: ", $e->getMessage();
        }
    }

    public function update( ClienteDTO $clienteDTO ) {
        try {
            $sql = "UPDATE tb_usuarios SET "
                . "nome=?, cpf=?, email=?, password=?, ativo=? "
                . "WHERE id=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $clienteDTO->getNome() );
            $stmt->bindValue( 2, $clienteDTO->getCpf() );
            $stmt->bindValue( 3, $clienteDTO->getEmail() );
            $stmt->bindValue( 4, $clienteDTO->getSenha() );
            $stmt->bindValue( 5, $clienteDTO->getSituacao() );
            $stmt->bindValue( 6, $clienteDTO->getId() );
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar: ", $e->getMessage();
        }
    }

    public function updateSenha( ClienteDTO $clienteDTO ) {
        try {
            $sql = "UPDATE tb_usuarios SET "
                . "password=? "
                . "WHERE cpf=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $clienteDTO->getSenha() );
            $stmt->bindValue( 2, $clienteDTO->getCpf() );
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao atualizar: ", $e->getMessage();
        }
    }

    public function findByCpf( $cpf ) {
        try {
            $sql = "SELECT * FROM tb_usuarios WHERE cpf = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $cpf );
            $stmt->execute();
            $usuarios = $stmt->fetch( PDO::FETCH_ASSOC );
            return $usuarios;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os usuarios: ", $e->getMessage();
        }
    }

}