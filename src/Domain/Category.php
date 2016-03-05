<?php

namespace ColtCuddler\Domain;

class Category
{
  private $id;
  private $name;

  public function setId($id){
    $this->id = $id;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function getName(){
    return $this->name;
  }

  public function getId(){
    return $this->id;
  }
}
