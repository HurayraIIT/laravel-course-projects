<?php

class IO
{

    public static function load_file_data(string $path)
    {
        $jsonString = file_get_contents($path);
        return json_decode($jsonString, true);
    }

    public static function write_file_data(array $data, string $path): void
    {
        $jsonString = json_encode($data, JSON_PRETTY_PRINT);
        $fp = fopen($path, 'w');
        fwrite($fp, $jsonString);
        fclose($fp);
    }
}