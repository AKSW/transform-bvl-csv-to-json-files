<?php

/**
 * @param string $filepath
 * @return array
 */
function loadCSVFileIntoArray($filepath)
{
    $file = fopen($filepath, 'r');
    $lines = array();
    while (($line = fgetcsv($file)) !== FALSE) {
      $lines[] = $line;
    }
    fclose($file);
    return $lines;
}
