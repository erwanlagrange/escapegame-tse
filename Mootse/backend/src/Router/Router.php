<?php
namespace TSE\workshop_tse_bibli\Router;

use TSE\workshop_tse_bibli\Controller\LoginController;
use TSE\workshop_tse_bibli\Controller\PlanningController;

class Router {

  private $response;

  function __construct() {

    $this->response = array();
    $this->handleRequest();
  }

  private function handleRequest() {

    if(isset($_POST['login']) && isset($_POST['password'])) {

      $login = htmlspecialchars($_POST['login']);
      $password = htmlspecialchars($_POST['password']);

      $user = LoginController::logUser($login, $password);

      if (!$user) {

        return array('error' => 'anthentication failed');

      } else {

        $planningController = new PlanningController($user);
        $this->response = $planningController->getPlanning();
      }
    }
  }

  public function getResponse() {

    return json_encode($this->response);
  }
}
