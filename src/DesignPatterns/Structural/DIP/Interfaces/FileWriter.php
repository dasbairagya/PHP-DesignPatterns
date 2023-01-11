<?php 
namespace App\DesignPatterns\Structural\DIP\Interfaces;

/**
 * File Writer Interface
 */
interface FileWriter
{
    /**
     * Method to write to the file
     */
    public function write($data):void;
}

 