<?php

namespace Pokedex\Models;

use \PDO;
use Pokedex\Models\CoreModel;

class Type extends CoreModel
{
  private $name;
  private $color;

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Get the value of color
   */ 
  public function getColor()
  {
    return $this->color;
  }

  // récupérer la liste des types
  static public function findAll()
  {
    $sql = 'SELECT * FROM `type`';
    $pdo = self::getPDO();
    $pdoStatement = $pdo->query($sql);
    $type = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    unset($pdo);
    return $type;
  }

  // récupérer un seul type
  static public function find($id)
  {
    $sql = '
    SELECT * FROM `type` 
    WHERE `id` =' . $id;

    $pdo = self::getPDO();
    $pdoStatement = $pdo->query($sql);
    $pdoStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
    $type = $pdoStatement->fetch();
    unset($pdo);
    return $type;
  }
}
