<?php 
namespace App\DesignPatterns\Structural\DIP;

use App\DesignPatterns\Structural\DIP\Interfaces\FileWriter;

/**
 * undocumented class
 */
class XmlFileWriter implements FileWriter
{
    /**
     * Function to write to the XML file
     *
     * Responseible to write to the xml file
     *      
     * @return void
     * @throws \Exception
     **/
    public function write($data):void
    {
        echo "Writting to xml file..</br>";
        print_r($data);
        sleep(2);
        echo "Success!</br>";
    }
}



?>