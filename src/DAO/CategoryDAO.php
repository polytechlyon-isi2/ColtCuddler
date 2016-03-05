<?php

namespace ColtCuddler\DAO;

use ColtCuddler\Domain\Category;

class CategoryDAO extends DAO
{

  public function findAll(){
    $sql = "select * from t_category order by category_id desc;";
    $result = $this->getDb()->fetchAll($sql);


    // Convert query result to an array of domain objects
    $categories = array();
    foreach ($result as $row) {
        $categoryId = $row['category_id'];
        $categories[$categoryId] = $this->buildDomainObject($row);;
    }
    return $categories;
  }


  public function buildDomainObject($row){
    $category = new Category();
    $category->setId($row['category_id']);
    $category->setName($row['category_name']);

    return $category;
  }

}
