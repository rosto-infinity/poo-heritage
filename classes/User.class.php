<?php
// class User{
//   protected $name;
//   protected $password;

//   public function __construct($name, $password){
//     $this->name = $name;
//     $this->password = $password;
//   }
//   // public function getName(){
//   //   return $this->name;
//   // }
//   // public function getPassword(){
//   //   return $this->password;
//   // }

//   public function  FindUser()
//   { 
//     echo "Je suis "
//     .$this->name.
//     " et mon pass est : "
//     .$this->password." <br> ";
//     }





class User {
    protected $name;
    protected $password;

    public function __construct($name, $password) {
        $this->name = $name;
        $this->setPassword($password);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        // Hash the password before storing it
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword($password) {
        // Verify the password against the stored hash
        return password_verify($password, $this->password);
    }

    public function findUser() {
        echo "Je suis " . $this->name . " et mon pass est : " . $this->password . " <br> ";
    }

    public function isValidUser($name, $password) {
      return $this->name === $name && $this->verifyPassword($password);
  }
}