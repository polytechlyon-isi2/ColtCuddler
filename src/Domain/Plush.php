<?php

namespace ColtCuddler\Domain;

class Plush
{
  private $id;
  private $name;
  private $description;
  private $price;
  private $image;

  public function setId($id){
    $this->id = $id;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setDescription($description){
    $this->description = $description;
  }

  public function setPrice($price){
    $this->price = $price;
  }

  public function setImage($image){
    $this->image = $image;
  }



  public function getName(){
    return $this->name;
  }

  public function getId(){
    return $this->id;
  }

  public function getDescription(){
    return $this->description;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getImage(){
    return $this->image;
  }
}
