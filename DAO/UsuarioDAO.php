<?php
require_once 'conexao/Conexao.php';

class UsuarioDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function findByEmailSenha( $email, $senha ) {
        try {
            $sql = "SELECT email, id, tipo, ativo FROM tb_usuarios "
                . "WHERE email=? AND password=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $email );
            $stmt->bindValue( 2, $senha );
            $stmt->execute();
            $usuario = $stmt->fetch( PDO::FETCH_ASSOC );
            return $usuario;
        } catch ( PDOException $e ) {
            $e->getMessage();
        }
    }

    public function findByEmailCpf( $email, $cpf ) {
        try {
            $sql = "SELECT email, id, cpf FROM tb_usuarios "
                . "WHERE email=? AND cpf=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $email );
            $stmt->bindValue( 2, $cpf );
            $stmt->execute();
            $usuario = $stmt->fetch( PDO::FETCH_ASSOC );
            return $usuario;
        } catch ( PDOException $e ) {
            $e->getMessage();
        }
    }

    public function deleteById( $idUsuario ) {
        try {
            $sql  = 'DELETE FROM tb_usuario WHERE id = ?';
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $idUsuario );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo 'Erro ao excluir o Usuario ', $e->getMessage();
        }
    }
}