<?php
require_once 'conexao/Conexao.php';

class AvaliacaoDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( AvaliacaoDTO $avaliacaoDTO ) {
        try {
            $sql = "INSERT INTO "
                . "tb_avaliacao(nome,opiniao,avaliacao) "
                . "VALUES(:local,:opiniao,:avaliacao)";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":nome", $avaliacaoDTO->getNome() );
            $stmt->bindValue( ":opiniao", $avaliacaoDTO->getOpiniao() );
            $stmt->bindValue( ":avaliacao", $avaliacaoDTO->getAvaliacao() );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar nova Avaliação: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM tb_avaliacao";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $avaliações = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $avaliações;
        } catch ( PDOException $e ) {
            echo "Erro ao listar Avaliações: ", $e->getMessage();
        }
    }

    public function deleteById( $idAvaliacao ) {
        try {
            $sql = "DELETE FROM tb_avaliacao WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $idAvaliacao );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo "Erro ao excluir ", $e->getMessage();
        }
    }

    public function findById( $id ) {
        try {
            $sql = "SELECT * FROM tb_avaliacao WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $id );
            $stmt->execute();
            $avaliações = $stmt->fetch( PDO::FETCH_ASSOC );
            return $avaliações;
        } catch ( PDOException $e ) {
            echo "Erro ao listar Avaliações: ", $e->getMessage();
        }
    }

    public function update( AvaliacaoDTO $avaliacaoDTO ) {
        try {
            $sql = "UPDATE tb_avaliacao SET "
                . "nome=?, opiniao=?, avaliacao=? "
                . "WHERE id=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $avaliacaoDTO->getNome() );
            $stmt->bindValue( 2, $avaliacaoDTO->getOpiniao() );
            $stmt->bindValue( 3, $avaliacaoDTO->getAvaliacao() );
            $stmt->bindValue( 4, $avaliacaoDTO->getId() );
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar nova Avaliação: ", $e->getMessage();
        }
    }
}