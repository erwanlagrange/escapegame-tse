<?php
namespace TSE\workshop_tse_bibli\Controller;

use TSE\workshop_tse_bibli\Model\User;
use TSE\workshop_tse_bibli\Model\PlanningManager;

class PlanningController {

  private $user;
  private $planning;

  function __construct($user) {

    $this->user = $user;
    $pm = new PlanningManager();
    $this->planning = $pm->hydratePlanning($this->user->getId());
  }

  public function getPlanning() {
    return $this->planning;
  }
}
