<?php
class Db
{
    public function connectDB()
    {
        $host = 'localhost'; // nom de l'hôte
        $dbname = 'pro_epidemia'; // nom de la base de données
        $username = 'root'; // nom d'utilisateur pour la base de données
        $password = ''; // mot de passe pour la base de données

        // chaîne de connexion à la base de données
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

        // options de connexion à la base de données
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        // création d'un nouvel objet PDO pour la connexion à la base de données
        try {
            $pdo = new PDO($dsn, $username, $password, $options);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
            exit;
        }
    }
}
