<?php

class Conexao {
    private $host = 'localhost';
    private $dbname = 'salao_cassia';
    private $username = 'root'; // Substitua pelo seu nome de usuário do banco de dados
    private $password = ''; // Substitua pela sua senha do banco de dados
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Outras configurações opcionais
            // $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Em caso de erro na conexão
            die("Erro na conexão com o banco de dados: " . $e->getMessage());
        }
    }

    public function getPDO() {
        return $this->pdo;
    }
}
?>
