<?php

namespace Pokedex;

use \PDO;

class DBData
{
    private $pdo;

    /**
     *  Connexion à la base de données
     */
    public function __construct()
    {
        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $username = 'pokedex';
        $password = 'pokedex';
        // J'ajoute une option qui me permet d'avoir les erreurs directement en Warning dans PHP
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];
        $this->pdo = new PDO($dsn, $username, $password, $options);   
    }

    public function getPdo()
    {
        # code...
    }
 
}