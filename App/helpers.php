<?php

/**
 * Recupera il path del file nella cartella assets
 *
 * @param string $directory
 * @param string $file
 * 
 * @return string $path
 */
function get_asset( string $directory, string $file ) {
  switch ($directory) {
    case 'css':
      $path = get_template_directory_uri() . "/assets/{$directory}/{$file}.css";
      break;
    
    case 'js':
    case 'javascript':
      $path = get_template_directory_uri() . "/assets/{$directory}/{$file}.js";
      break;

      case 'fonts':
        $path = get_template_directory_uri() . "/assets/{$directory}/{$file}.woff";
        break;

        case 'vendor':
          $path = get_template_directory_uri() . "/{$directory}/{$file}";
          break;
  }
  return $path;
  
}
