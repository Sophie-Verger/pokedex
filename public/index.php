<?php

// inclure les dépendances composer
require __DIR__ . '/../vendor/autoload.php';


// instancier l'objet AltoRouter
$router = new AltoRouter();

// on fournit a AltoRouter la partie de l'URL à ne pas prendre en compte
$router->setBasePath($_SERVER['BASE_URI']);

// Route vers la page home
$router->map(
  'GET',
  '/', 
  [
    'action' => 'home',
    'controller' => 'MainController'
  ],
  'main-home' 
);

// Route vers la page détail 1 pokémon
$router->map(
  'GET',
  '/pokemon/[i:id]',
  [
    'action' => 'pokemon',
    'controller' => 'MainController'
  ],
  'main-pokemon'
);

// Route vers tous les types de pokemon
$router->map(
  'GET',
  '/types',
  [
    'action' => 'types',
    'controller' => 'MainController'
  ],
  'main-types'
);

// Route vers la liste des pokemons appartenant a 1 type
$router->map(
  'GET',
  '/type/[i:id]',
  [
    'action' => 'type',
    'controller' => 'MainController'
  ],
  'main-type'
);

// Début Dispatcher
$match = $router->match();
if ($match) {

  $controllerToUse = $match['target']['controller'];
  $controllerToUse = 'Pokedex\\Controllers\\' . $controllerToUse;
  $methodToUse = $match['target']['action'];
  $controller = new $controllerToUse($router);
  $controller->$methodToUse($match['params']);
} else {
  exit('404 Not found');
}
// Fin Dispatcher
