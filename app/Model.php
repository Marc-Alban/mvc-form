<?php
declare(strict_types=1);

abstract class Model{

    // Informations de la base de données
    private $host = "127.0.0.1";
    private $db_name = "finapole_consoiframe";
    private $username = "finapole_consoiframe";
    private $password = "QJ0sRc9hyv";
    // private $host = "127.0.0.1";
    // private $db_name = "consoiframe";
    // private $username = "root";
    // private $password = "";




    // Création d'un objet PDO pour se connecter à une base de données MySQL
    protected $pdo;
    /**
     * Fonction d'initialisation de la base de données
     *
     */
    public function getConnection(){
        // On supprime la connexion précédente
        $this->pdo = null;

        // On essaie de se connecter à la base
        try{
            $this->pdo = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->pdo->exec("set names utf8");
            return $this->pdo;
        }catch(\PDOException $exception){
            echo "Erreur de connexion : " . $exception->getMessage();
        }
    }
}