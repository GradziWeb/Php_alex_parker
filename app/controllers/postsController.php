<?php

/*
./app/Controllers/postsController.php
*/

namespace App\Controllers\PostsController;

use App\models\PostsModel;

/**
 * indexAction function
 *
 * @param \PDO $conn
 * @return void
 */
function indexAction(\PDO $conn)
{
    //10 derniers posts
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findAll($conn);
    //TAMPON
    global $content, $title;
    $title = "Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

/**
 * showAction function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function showAction(\PDO $conn, int $id)
{
    include_once '../app/models/postsModel.php';
    $post = PostsModel\findOneById($conn, $id);
    //TAMPON
    global $content, $title;
    $title = "Alex Parker - " . $post['title'];
    ob_start();
    include '../app/views/posts/show.php';
    $content = ob_get_clean();
}


/**
 * addFormAction function
 *
 * @param \PDO $conn
 * @return void
 */
function addFormAction(\PDO $conn)
{

    include_once '../app/models/categoriesmodel.php';
    $categories = \App\Models\CategoriesModel\findAll($conn);
    //TAMPON
    global $content, $title;
    $title = "Alex Parker - Add a post";
    ob_start();
    include '../app/views/posts/addForm.php';
    $content = ob_get_clean();
}

/**
 * addAction function
 *
 * @param \PDO $conn
 * @return void
 */
function addAction(\PDO $conn)
{
    include_once '../app/models/postsmodel.php';
    $id = \App\Models\Postsmodel\insertOne($conn, $_POST);
    //REDIRECTION
    header('location: ' . BASE_URL);
}


/**
 * editFormAction function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function editFormAction(\PDO $conn, int $id)
{

    include_once '../app/models/postsmodel.php';
    $post = PostsModel\findOneById($conn, $id);
    //chercher les catégories
    include_once '../app/models/categoriesmodel.php';
    $categories = \App\Models\CategoriesModel\findAll($conn);
    //TAMPON
    global $content, $title;
    $title = "Alex Parker - Edit a post";
    ob_start();
    include '../app/views/posts/editForm.php';
    $content = ob_get_clean();
}

/**
 * editAction function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function editAction(\PDO $conn, int $id)
{
    include_once '../app/models/postsmodel.php';
    $return1 = PostsModel\updateOneById($conn, $id, $_POST);
    //REDIRECTION
    header('location: ' . BASE_URL . 'posts/' . $id . '/' . \Core\Functions\slugify($_POST['title']) . '.html');
}

/**
 * deleteAction function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function deleteAction(\PDO $conn, int $id)
{
    include_once '../app/models/postsmodel.php';
    $return1 = PostsModel\deleteOneById($conn, $id);
    // REDIRECTION
    header('location: ' . BASE_URL);
}
