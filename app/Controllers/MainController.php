<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Type;
use Pokedex\Models\Pokemon;
use Pokedex\Models\Pokemon_Type;

class MainController extends CoreController
{
  /**
   * Méthode pour la page d'accueil
   *
   * URL : /
   * HTTP method : GET
   */
  public function home()
  {
    // récupérer la liste des pokemon
    $pokemons = Pokemon::findAll();

    $this->show('home', [
      'pokemons' => $pokemons,
    ]);
  }

  /**
   * Méthode pour la détail d'un pokemon
   *
   * URL : /pokemon/[i:id]
   * HTTP method : GET
   */
  public function pokemon($params)
  {
    // récupérer les données d'un pokemon
    $pokemon = Pokemon::find($params['id']);

    $pokemonTypes = Pokemon_Type::findAllType($params['id']);

    $this->show('pokemon', [
      'pokemon' => $pokemon,
      'pokemonTypes' => $pokemonTypes,
    ]);   
  }

  /**
     * Méthode pour la page présentant tous les types
     *
     * URL : /types
     * HTTP method : GET
     */
    public function types()
    {
      // récupérer la liste des pokemon
      $types = Type::findAll();

      $this->show('types', [
        'types' => $types,
      ]);
    }

  /**
   * Méthode pour la détail d'un type
   *
   * URL : /type/[i:id]
   * HTTP method : GET
   */
  public function type($params)
  {
    // récupérer les données d'un type
    $type = Type::find($params['id']);

    $typePokemons = Pokemon_Type::findAllPokemon($params['id']);

    $this->show('type', [
      'type' => $type,
      'typePokemons' => $typePokemons,
    ]);
  }
}