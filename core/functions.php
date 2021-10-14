<?php
/*
    ./core/functions 
    Fonctions helpers
*/

namespace Core\Functions;

/**
 * Return a formated date
 *
 * @param string $date
 * @param [type] $format
 * @return string
 */
function datify(string $date, string $format = DATE_FORMAT): string
{
   $date = new \DateTime($date);
   return $date->format($format);
}

/**
 * return a truncate string to $length characters
 *
 * @param string $string
 * @param [type] $length
 * @return string
 */
function truncate(string $string, int $length = TRUNCATE_LENGTH): string
{
   if (strlen($string) > $length) :
      $string = substr($string, 0, strpos($string, ' ', $length)) . ' ...';
   endif;
   return $string;
}

/**
 * Return a slugified string
 *
 * @param string $string
 * @return string
 */
function slugify(string $string): string
{
   return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
}


//BONUS POINTS: UPLOAD IMAGE ?
//EN PHASE DE CONSTRUCTION!
/*
function imageUpload(string $name,$ext= array('jpg', 'jpeg', 'png', 'pdf'))
{
...
}
*/
