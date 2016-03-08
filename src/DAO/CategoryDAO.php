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

  public function findFromId($id){
    $sql = "select * from t_category where category_id=?;";
    $row = $this->getDb()->fetchAssoc($sql, array($id));

    if ($row)
        return $this->buildDomainObject($row);
    else
        throw new \Exception("No category matching id " . $id);
  }

  public function buildDomainObject($row){
    $category = new Category();
    $category->setId($row['category_id']);
    $category->setName($row['category_name']);

    return $category;
  }

}
