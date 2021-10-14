<?php

/*
    ./app/routers/postsrouter.php
  */

use \App\Controllers\PostsController;

include_once '../app/controllers/postsController.php';


switch ($_GET['posts']):
  case 'show':
    PostsController\showAction($conn, $_GET['id']);
    break;
  case 'addForm':
    PostsController\addFormAction($conn);
    break;
  case 'add':
    PostsController\addAction($conn);
    break;
  case 'editForm':
    PostsController\editFormAction($conn, $_GET['id']);
    break;
  case 'edit':
    PostsController\editAction($conn, $_GET['id']);
    break;
  case 'delete':
    PostsController\deleteAction($conn, $_GET['id']);
    break;
endswitch;
