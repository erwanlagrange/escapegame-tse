<?php
namespace TSE\workshop_tse_bibli\Model;

class User {

  private $id;
  private $login;
  private $password;
  private $authenticated;

  function __construct($id, $login, $password) {

    $this->id = $id;
    $this->login = $login;
    $this->password = $password;
  }

  public function validate($bool) {
    $this->authenticated = $bool;
  }

  public function isAuthenticated() {

    return $this->authenticated;
  }

  public function getId() {

    return $this->id;
  }

  public function getLogin() {

    return $this->login;
  }

  public function getPassword() {

    return $this->password;
  }
}
