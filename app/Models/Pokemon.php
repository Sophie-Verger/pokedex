<?php
namespace Pokedex\Models;

use \PDO;
use Pokedex\Models\CoreModel;

class Pokemon extends CoreModel
{
    private $nom;
    private $pv;
    private $attaque;
    private $defense;
    private $attaque_spe;
    private $defense_spe;
    private $vitesse;
    private $numero;

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of attaque_spe
     */ 
    public function getAttaqueSpe()
    {
        return $this->attaque_spe;
    }

    /**
     * Get the value of defense_spe
     */ 
    public function getDefenseSpe()
    {
        return $this->defense_spe;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

  // récupérer la liste des pokemon
  static public function findAll()
  {
    $sql = 'SELECT * FROM `pokemon`';
    $pdo = self::getPDO();
    $pdoStatement = $pdo->query($sql);
    $pokemons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    unset($pdo); 
    return $pokemons;
  }

  // récupérer un seul pokemon
  static public function find($id)
  {

    $sql ='
    SELECT * FROM `pokemon` 
    WHERE `numero` =' . $id;

    $pdo = self::getPDO();
    $pdoStatement = $pdo->query($sql);
    $pdoStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
    $pokemon = $pdoStatement->fetch();
    unset($pdo);
    return $pokemon;
  }

}