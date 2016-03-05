<?php

namespace ColtCuddler\DAO;

use ColtCuddler\Domain\Plush;

class PlushDAO extends DAO
{

  public function findAllFromCategory($category){
    $sql = "select * from t_article where art_category=? order by art_id desc;";
    $result = $this->getDb()->fetchAll($sql, array($category));

    $plushies = array();
    foreach ($result as $row) {
        $plushId = $row['art_id'];
        $plushies[$plushId] = $this->buildDomainObject($row);;
    }

    return $plushies;
  }

  public function findFromId($id){
    $sql = "select * from t_article where art_id=?;";
    $row = $this->getDb()->fetchAssoc($sql, array($id));

    if ($row)
        return $this->buildDomainObject($row);
    else
        throw new \Exception("No article matching id " . $id);
  }


  public function buildDomainObject($row){
    $plush = new Plush();
    $plush->setId($row['art_id']);
    $plush->setName($row['art_name']);
    $plush->setPrice($row['art_price']);
    $plush->setDescription($row['art_description']);
    $plush->setImage($row['art_image']);

    return $plush;
  }
}
