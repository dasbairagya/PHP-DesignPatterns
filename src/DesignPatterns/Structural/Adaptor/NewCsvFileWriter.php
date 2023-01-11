<?php 
namespace App\DesignPatterns\Structural\Adaptor;

use App\designpatterns\structural\adaptor\interfaces\NewFileWriter;
/**
 * undocumented class
 */
class NewCsvFileWriter implements NewFileWriter
{
    public function writeToFile($data): bool
    {
        echo "Writting to new csv file..</br>";
        print_r($data);
        sleep(2);
        echo "Success!</br>";
        return true;
    }
}


?>