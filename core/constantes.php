<?php

/*
    ./core/constantes.php
  */

// base url pour rediriger 
$url = explode('index.php', $_SERVER['SCRIPT_NAME']);
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);


// Autres constantes
//Qui provient de la Core/Function
define('DATE_FORMAT', 'd-m-Y');
define('TRUNCATE_LENGTH', 150);
