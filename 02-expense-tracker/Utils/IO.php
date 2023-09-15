<?php 

class IO {

  public static function load_file_data(String $path) {
    $jsonString = file_get_contents($path);
    $data = json_decode($jsonString, true);
    return $data;
  }
  
  public static function write_file_data($data, $path) {
    $jsonString = json_encode($data, JSON_PRETTY_PRINT);
    $fp = fopen($path, 'w');
    fwrite($fp, $jsonString);
    fclose($fp);
  }
}