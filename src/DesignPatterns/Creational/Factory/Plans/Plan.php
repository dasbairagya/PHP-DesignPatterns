<?php 
namespace App\DesignPatterns\Creational\Factory\Plans;

/**
 * undocumented class
 */
abstract class Plan
{
    protected array $features = [];

    abstract public function getRate(): int;
    
    public function getFeatures(): array
    {
        return $this->features;
    }
}

?>