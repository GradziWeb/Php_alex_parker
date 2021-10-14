<?php

/*
./app/controller/categoriesController.php
*/

namespace App\Controllers\CategoriesController;

use App\Models\CategoriesModel;
//---------------------------------------------------
//POINTS BONUS: AFFICHER LE NOMBRE DE POST QUE CONTIENT CHAQUE CATEGORIE 
//Mettre dans le view/categories/index foreach
//---------------------------------------------------

/**
 * indexAction function
 *
 * @param \PDO $conn
 * @return void
 */
function indexAction(\PDO $conn)
{
    include_once '../app/models/categoriesModel.php';
    $categories = CategoriesModel\findAll($conn);

    include_once '../app/models/postsModel.php';
    $nbrPosts = \App\Models\PostsModel\findNbrPostsByCategorie($conn);
    include '../app/views/categories/index.php';
}
