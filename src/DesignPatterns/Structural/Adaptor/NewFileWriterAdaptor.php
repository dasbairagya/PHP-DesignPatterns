<?php 
namespace App\DesignPatterns\Structural\Adaptor;

use App\DesignPatterns\Structural\DIP\Interfaces\FileWriter;
use App\designpatterns\structural\adaptor\interfaces\NewFileWriter;
/**
 * undocumented class
 */
class NewFileWriterAdaptor implements FileWriter
{
    private NewFileWriter $fileWriter;

    public function __construct(NewFileWriter $fileWriter)
    {
        $this->fileWriter = $fileWriter;
    }

    public function write($data):void
    {
        $this->fileWriter->WriteToFile($data);
    }
}

?>