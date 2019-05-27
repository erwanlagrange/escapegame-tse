<?php
namespace TSE\workshop_tse_bibli\Model;

use TSE\workshop_tse_bibli\domain\Db_manager;

class PlanningManager {

  public function hydratePlanning($user_id) {

    $pdo = new Db_manager();

    $req = $pdo->db->prepare('
      SELECT `hour_start`, `hour_end`, `content`
      FROM `tasks`
      WHERE `user_id` = :user_id;
    ');

    $req->execute(array(':user_id'=>$user_id));

    $req->setFetchMode(\PDO::FETCH_ASSOC);

    $response = $req->fetchAll();

    return $response;
  }
}
