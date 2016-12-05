<?php
  class registrationModel extends model {
    private $username;
    private $password;
    private $email;
    
    public function setUsername($username) {
      $this->username = $username;  
    }
    public function getUsername() {
      return $this->username;  
    }
    public function setPassword($password) {
      $this->password = $password;
    }
    public function getPassword() {
      return $this->password;
    }
    public function setEmail($email) {
      $this->email = $email;
    }
    public function getEmail() {
       return $this->email;
    }

    public function save() {
       $array = array($username->getUsername, $password->getPassword,
       $email->getEmail);

       print_r $array;

  }
}
