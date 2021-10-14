<?php

/*
./app/router.php
router principal
*/

// ROUTE DES POSTS
// PATTERN: index?posts=x
// router: postsrouter
if (isset($_GET['posts'])) :
    include_once '../app/routers/postsRouter.php';




// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: postsControleur
// ACTION: index
else :
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($conn);
endif;
