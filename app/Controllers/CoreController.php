<?php

namespace Pokedex\Controllers;

class CoreController
{
  private $router;

  public function __construct($routerParam)
  {
    $this->router = $routerParam;
  }

  // méthode show
  protected function show($viewName, $viewData = [])
  {
    $viewData['currentPage'] = $viewName;

    extract($viewData);

    $router = $this->router;
    
    require __DIR__ . '/../views/header.php';
    require __DIR__ . '/../views/' . $viewName . '.php';
    require __DIR__ . '/../views/footer.php';
  }

}
