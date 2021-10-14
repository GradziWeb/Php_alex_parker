<?php

/*
./app/models/postsModel.php
*/

namespace App\Models\PostsModel;

/**
 * Undocumented function
 *
 * @param \PDO $conn
 * @return void
 */
function findAll(\PDO $conn)
{
    $sql = "SELECT *, p.id as postId,
   c.id as categorieId,
   c.name as categorieName,
   p.created_at as postDate
   FROM posts p
   JOIN categories c on p.category_id = c.id
   ORDER BY p.created_at DESC
   LIMIT 10;";
    $rs = $conn->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * Undocumented function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return array
 */
function findOneById(\PDO $conn, int $id): array
{
    $sql = "SELECT *, p.id as postId,
   c.id as categorieId,
   c.name as categorieName,
   p.created_at as postDate
   FROM posts p
   JOIN categories c on p.category_id = c.id
   WHERE p.id = :id;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}

/**
 * Undocumented function
 *
 * @param \PDO $conn
 * @param array $data
 * @return integer
 */
function insertOne(\PDO $conn, array $data): int
{
    $sql = "INSERT INTO posts
   SET title        = :title,
   text         = :text,
   quote        = :quote,
   category_id = :category,
   created_at   = NOW();";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], \PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], \PDO::PARAM_STR);
    $rs->bindValue(':category', $data['category_id'], \PDO::PARAM_INT);
    $rs->execute();
    return $conn->lastInsertId();
}

/**
 * Undocumented function
 *
 * @param \PDO $conn
 * @param integer $id
 * @param array $data
 * @return boolean
 */
function updateOneById(\PDO $conn, int $id, array $data): bool
{
    $sql = "UPDATE posts
   SET title        = :title,
   text         = :text,
   quote        = :quote,
   category_id = :category
   WHERE id         = :id;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':title', $data['title'], \PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], \PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], \PDO::PARAM_STR);
    $rs->bindValue(':category', $data['category_id'], \PDO::PARAM_INT);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    return intval($rs->execute());
}

/**
 * Undocumented function
 *
 * @param \PDO $conn
 * @param integer $id
 * @return boolean
 */
function deleteOneById(\PDO $conn, int $id): bool
{
    $sql = "DELETE FROM posts
   WHERE id = :id;";
    $rs = $conn->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    return intval($rs->execute());
}

/**
 * Undocumented function
 *
 * @param \PDO $conn
 * @return void
 */
function findNbrPostsByCategorie(\PDO $conn)
// Bonus: Compter le nbr de post par catégorie 
{
    $sql = "SELECT category_id, COUNT(id) AS nbrPostsByCategory
   FROM posts
   GROUP BY category_id;";
    $rs = $conn->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
