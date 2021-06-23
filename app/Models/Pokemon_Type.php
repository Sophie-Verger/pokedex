<?php

namespace Pokedex\Models;

use \PDO;
use Pokedex\Models\CoreModel;

class Pokemon_Type extends CoreModel
{
  private $pokemon_numero;
  private $type_id;
  private $type_name;
  private $type_color;
  private $pokemon_nom;

  /**
   * Get the value of pokemon_numero
   */ 
  public function getPokemonNumero()
  {
    return $this->pokemon_numero;
  }

  /**
   * Get the value of type_id
   */ 
  public function getTypeId()
  {
    return $this->type_id;
  }

  /**
   * Get the value of type_name
   */ 
  public function getTypeName()
  {
    return $this->type_name;
  }

  /**
   * Get the value of type_color
   */ 
  public function getTypeColor()
  {
    return $this->type_color;
  }

  /**
   * Get the value of pokemon_nom
   */ 
  public function getPokemonNom()
  {
    return $this->pokemon_nom;
  }

  // récupérer les types associés a un pokemon
  static public function findAllType($id)
  {

    $sql = "SELECT
		`pokemon_type`.*,
		`type`.`name` AS type_name,
    `type`.`color` AS type_color
		FROM `pokemon_type`
		INNER JOIN `type` ON `type`.`id` = `pokemon_type`.`type_id`
    WHERE `pokemon_type`.`pokemon_numero`= $id";

    $pdo = self::getPDO();
    $pdoStatement = $pdo->query($sql);
    $pokemonTypes = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    unset($pdo); 
    return $pokemonTypes;
  }

  // récupérer les types associés a un pokemon
  static public function findAllPokemon($id)
  {

    $sql = "SELECT
		`pokemon_type`.*,
		`pokemon`.`nom` AS pokemon_nom
		FROM `pokemon_type`
		INNER JOIN `pokemon` ON `pokemon`.`numero` = `pokemon_type`.`pokemon_numero`
    WHERE `pokemon_type`.`type_id`= $id";

    $pdo = self::getPDO();
    $pdoStatement = $pdo->query($sql);
    $typePokemons = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
    unset($pdo); 
    return $typePokemons;
  }



  
}
