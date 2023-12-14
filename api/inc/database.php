<?php

include_once 'conexao.php';

class Database {
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function getProducts() {
        $pdo = $this->conexao->getPDO();

        $sql = "SELECT * FROM cadastro_produtos";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    // Adicione outras funções para realizar operações INSERT, UPDATE e DELETE conforme necessário
}
?>
