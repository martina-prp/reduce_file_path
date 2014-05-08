<?php

/**
 * @file
 * Martina Radeva
 * reduce file path
 */

function reduce_file_path($path) {
  $reduce_path = array();
  $split_path = explode('/', $path);
  
  foreach ($split_path as $key => $item) {
    if (!$item || $item === '.') {
      unset($split_path[$key]);
    }
    if ($item && $item !== '..') {
      continue;
    }
    if ($item === '..') {
      unset($split_path[$key-1]); 
      unset($split_path[$key]);
    }
  }
  return '/' . implode('/', $split_path);
}

print reduce_file_path('home//radorado/code/./hackbulgaria/week0/..');
print '<br />';
print reduce_file_path("/");
print '<br />';
print reduce_file_path("/srv/../");
print '<br />';
print reduce_file_path("/srv/www/htdocs/wtf/");
print '<br />';
print reduce_file_path("/srv/www/htdocs/wtf");
print '<br />';
print reduce_file_path("/srv/./././././");
print '<br />';
print reduce_file_path("/etc//wtf/");
print '<br />';
print reduce_file_path("/etc/../etc/../etc/../");
print '<br />';
print reduce_file_path("//////////////");
print '<br />';
print reduce_file_path("/../");
?>
