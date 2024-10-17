<?php
class User{
  protected $name;
  protected $password;

  public function __construct($name, $password){
    $this->name = $name;
    $this->password = $password;
  }
  // public function getName(){
  //   return $this->name;
  // }
  // public function getPassword(){
  //   return $this->password;
  // }

  public function  FindUser()
  { 
    echo "Je suis "
    .$this->name.
    " et mon pass est : "
    .$this->password." <br> ";
    }
}