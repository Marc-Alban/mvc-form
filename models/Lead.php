<?php

declare(strict_types=1);

class Lead extends Model
{

    public function insert($data, $table) {
        $data['website'] = $_SESSION['website'];
        // Connexion à la base de données
        $pdo = $this->getConnection();
        unset($data['submit']);
        // Construction de la requête SQL
        $columns = implode(',', array_keys($data));
        $values = ':'.implode(', :', array_keys($data));
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        // Préparation de la requête et exécution
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
    }

    public function getLastId()
    {
        $pdo = $this->getConnection();
        $sql = "SELECT MAX(id) FROM lead";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $lastId = $stmt->fetch();
        return $lastId;
    }

}
