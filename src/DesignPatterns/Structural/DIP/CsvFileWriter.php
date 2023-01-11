<?php 
namespace App\DesignPatterns\Structural\DIP;

use App\DesignPatterns\Structural\DIP\Interfaces\FileWriter;

class CsvFileWriter implements FileWriter
{

    public function write($data): void
    {
        echo "Writting to csv file..</br>";
        print_r($data);
        sleep(2);
        echo "Success!</br>";
    }
}

?>