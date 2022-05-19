<?php
require_once 'conexao/Conexao.php';

class EventoDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function salvar( EventoDTO $eventoDTO ) {
        try {
            $sql = "INSERT INTO "
                . "tb_eventos(local,titulo,descricao,data_inicio,data_termino,capacidade,foto) "
                . "VALUES(:local,:titulo,:descricao,:inicio,:encerramento,:capacidade,:foto)";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( ":local", $eventoDTO->getLocal() );
            $stmt->bindValue( ":titulo", $eventoDTO->getTitulo() );
            $stmt->bindValue( ":descricao", $eventoDTO->getDescricao() );
            $stmt->bindValue( ":inicio", $eventoDTO->getInicio() );
            $stmt->bindValue( ":encerramento", $eventoDTO->getEncerramento() );
            $stmt->bindValue( ":capacidade", $eventoDTO->getCapacidade() );
            $stmt->bindValue( ':foto', $eventoDTO->getFoto() );
            return $stmt->execute();
        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar novo Evento: ", $e->getMessage();
        }
    }

    public function findAll() {
        try {
            $sql = "SELECT * FROM tb_eventos WHERE capacidade > 1";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->execute();
            $eventos = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $eventos;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os Eventos! ", $e->getMessage();
        }
    }

    public function deleteById( $idEvento ) {
        try {
            $sql = "DELETE FROM tb_eventos WHERE id = ?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $idEvento );
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
            $eventos = $stmt->fetch( PDO::FETCH_ASSOC );
            return $eventos;
        } catch ( PDOException $e ) {
            echo "Erro ao listar os eventos turísticos: ", $e->getMessage();
        }
    }

    public function update( EventoDTO $eventoDTO ) {
        try {
            $sql = "UPDATE tb_eventos SET "
                . "local=?, titulo=?, descricao=?, data_inicio=?, data_termino=?, capacidade=? "
                . "WHERE id=?";
            $stmt = $this->pdo->prepare( $sql );
            $stmt->bindValue( 1, $eventoDTO->getLocal() );
            $stmt->bindValue( 2, $eventoDTO->getTitulo() );
            $stmt->bindValue( 3, $eventoDTO->getDescricao() );
            $stmt->bindValue( 4, $eventoDTO->getInicio() );
            $stmt->bindValue( 5, $eventoDTO->getEncerramento() );
            $stmt->bindValue( 6, $eventoDTO->getCapacidade() );
            $stmt->bindValue( 7, $eventoDTO->getId() );
            return $stmt->execute();

        } catch ( PDOException $e ) {
            echo "Erro ao cadastrar novo evento: ", $e->getMessage();
        }
    }
}