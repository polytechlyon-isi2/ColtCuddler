<?php

namespace ColtCuddler\DAO;

use ColtCuddler\Domain\Gender;

class GenderDAO extends DAO
{

  public function findAll(){
    $sql = "select * from t_gender order by gender_id desc;";
    $result = $this->getDb()->fetchAll($sql);


    // Convert query result to an array of domain objects
    $genders = array();
    foreach ($result as $row) {
        $genderId = $row['gender_id'];
        $genders[$genderId] = $this->buildDomainObject($row);;
    }
    return $genders;
  }


  public function buildDomainObject($row){
    $gender = new Gender();
    $gender->setId($row['gender_id']);
    $gender->setName($row['gender_name']);

    return $gender;
  }

}
