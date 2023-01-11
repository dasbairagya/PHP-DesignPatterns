<?php 
namespace App\DesignPatterns\Structural\DIP;

use App\DesignPatterns\Structural\DIP\Interfaces\FileWriter;

class Processor
{
    private Filewriter $fileWriter;

    public function __construct(Filewriter $fileWriter)
    {
        $this->fileWriter = $fileWriter;
    }

    public function process($data): void
    {
        echo "Processing..</br>";
        $this->fileWriter->write($data);
        echo "<br><br>";
    }
}