<?php
namespace TSE\workshop_tse_bibli\Controller;

use TSE\workshop_tse_bibli\Model\User;
use TSE\workshop_tse_bibli\domain\Db_manager;

class LoginController {

  public static function logUser($login, $password) {
    //déplacer l'opération sql dans un userManager ?
    $pdo = new Db_manager();
    $req = $pdo->db->prepare('
      SELECT `id`, `login`, `password` FROM users
      WHERE `login`= :login;
    ');
    try {
      $req->execute(array(
        ':login'=>$login
      ));
    } catch (PDOException $e) {
      die("ERROR :".$e->getMessage());
    }

    $req->setFetchMode(\PDO::FETCH_ASSOC);
    $result = $req->fetch();
    if ($result['password'] == $password) {
      $user = new User($result['id'], $result['login'], $result['password']);
      $user->validate(true);
      return $user;
    } else return false;
  }
}
