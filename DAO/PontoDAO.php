<?php
require_once 'conexao/Conexao.php';

class PontoDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( PontoDTO $pontoDTO ) {
        try {
            $sql = "INSERT INTO "
                . "tb_eventos(local,titulo,descricao,foto) "
                . "VALUES(:local,:titulo,:descricao,:foto)";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":local", $pontoDTO->getLocal() );
            $stmt->bindValue( ":titulo", $pontoDTO->getTitulo() );
            $stmt->bindValue( ":descricao", $pontoDTO->getDescricao() );
            $stmt->bindValue( ':foto', $pontoDTO->getFoto() );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar novo Ponto Turístico: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM tb_eventos";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $pontos = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $pontos;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os pontos turísticos: ", $e->getMessage();
        }
    }

    public function deleteById( $idPonto ) {
        try {
            $sql = "DELETE FROM tb_eventos WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $idPonto );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo "Erro ao excluir ", $e->getMessage();
        }
    }

    public function findById( $id ) {
        try {
            $sql = "SELECT * FROM tb_eventos WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $id );
            $stmt->execute();
            $pontos = $stmt->fetch( PDO::FETCH_ASSOC );
            return $pontos;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os pontos turísticos: ", $e->getMessage();
        }
    }

    public function update( PontoDTO $pontoDTO ) {
        try {
            $sql = "UPDATE tb_eventos SET "
                . "local=?, titulo=?, descricao=? "
                . "WHERE id=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $pontoDTO->getLocal() );
            $stmt->bindValue( 2, $pontoDTO->getTitulo() );
            $stmt->bindValue( 3, $pontoDTO->getDescricao() );
            $stmt->bindValue( 4, $pontoDTO->getId() );
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar novo Ponto Turístico: ", $e->getMessage();
        }
    }
}