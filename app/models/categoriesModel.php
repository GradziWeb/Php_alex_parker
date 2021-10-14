<?php

/*
    ./app/models/categoriesModel.php
  */

namespace App\Models\CategoriesModel;

/**
 * @param  PDO    $conn
 * @return
 *  */
function findAll(\PDO $conn)
{
  $sql = "SELECT *
              FROM categories
              ORDER BY name ASC;";
  $rs = $conn->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
