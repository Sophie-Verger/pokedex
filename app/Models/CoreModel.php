<?php
namespace Pokedex\Models;

use PDO;
use PDOException;


class CoreModel
{
    protected $id;
  static $dsn = 'mysql:dbname=pokedex;host=127.0.0.1';
  static $user = 'pokedex';
  static $password = 'pokedex';

  // méthode statique pour récupérer une connexion à PDO
  static public function getPDO()
  {
    try {
      $pdo = new PDO(
        self::$dsn, 
        self::$user, 
        self::$password, 
        array(
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        )
      );
    } catch (PDOException $exception) {
      echo 'Connexion échouée : ' . $exception->getMessage();
    }
    return $pdo;
  }
    
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

}